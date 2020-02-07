<?php
/* * *******************************************************************************
 * The content of this file is subject to the PDF Maker license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class PDFMaker_SendEmail_View extends Vtiger_ComposeEmail_View {
    public function checkPermission(Vtiger_Request $request) {
        $moduleName = "Emails";
        if (!Users_Privileges_Model::isPermitted($moduleName, 'EditView')) {
            throw new AppException('LBL_PERMISSION_DENIED');
        }
    }

    /**
     * Function which will construct the compose email
     * This will handle the case of attaching the invoice pdf as attachment
     * @param Vtiger_Request $request
     */

    public function composeMailData(Vtiger_Request $request) {
        parent::composeMailData($request);
        $viewer = $this->getViewer($request);
        $mpdf = "";
        $PDFMakerModuleModel = Vtiger_Module_Model::getInstance('PDFMaker');
        if ($request->has('record') && !$request->isEmpty('record')) {
            $inventoryRecordId = $request->get('record');
            $Records =  array($inventoryRecordId);
        } else {
            $Records = $PDFMakerModuleModel->getRecordsListFromRequest($request);
        }
        if (count($Records) > 0) {
            if ($request->has('language') && !$request->isEmpty('language')) {
                $language = $request->get('language');
            } else {
                $language = Vtiger_Language_Handler::getLanguage();
            }


            $PDFMaker = new PDFMaker_PDFMaker_Model();
            //$Templateids = $this->getRequestTemplatesIds($request);
            $record = $request->get('record');
            $moduleName = $request->get('source_module');

            $name = @$PDFMaker->GetPreparedMPDF($mpdf, $record, $moduleName, $language);
            $name = $PDFMaker->generate_cool_uri($name);
            if ($name != "")
                $fileName = $name . ".pdf";
            else
                $fileName = $moduleName . "_".$inventoryRecordId.'.pdf';
            $current_user = $cu_model = Users_Record_Model::getCurrentUserModel();
            if (!is_dir("storage/PDFMaker/")) {
                mkdir("storage/PDFMaker/");
            }
            if (!is_dir("storage/PDFMaker/" . $current_user->id)) {
                mkdir("storage/PDFMaker/".$current_user->id);
            }
            $path = 'storage/PDFMaker/'.$current_user->id;
            $pdfFilePath = $path.'/'.$fileName;

            $mpdf->Output($pdfFilePath);
            $attachmentDetails = array(array(
                'attachment' =>$fileName,
                'path' => $path,
                'size' => filesize($pdfFilePath),
                'type' => 'pdf',
                'nondeletable' => true
            ));
            $this->populateTo($request, $moduleName);
            $viewer->assign('ATTACHMENTS', $attachmentDetails);
        }
        @ob_clean();
        echo $viewer->view('ComposeEmailForm.tpl', 'Emails', true);
    }

    public function populateTo($request, $moduleName){
        $viewer = $this->getViewer($request);
        $inventoryRecordId = $request->get('record');
        $recordModel = Vtiger_Record_Model::getInstanceById($inventoryRecordId, $moduleName);
        $inventoryModule = $recordModel->getModule();
        $inventotyfields = $inventoryModule->getFields();
        $toEmailConsiderableFields = array('contact_id','account_id','vendor_id');
        $db = PearDatabase::getInstance();
        $to = array();
        $to_info = array();
        $toMailNamesList = array();
        foreach($toEmailConsiderableFields as $fieldName){
            if(!array_key_exists($fieldName, $inventotyfields)){
                continue;
            }
            $fieldModel = $inventotyfields[$fieldName];
            if(!$fieldModel->isViewable()) {
                continue;
            }
            $fieldValue = $recordModel->get($fieldName);
            if(empty($fieldValue)) {
                continue;
            }
            $referenceModule = Vtiger_Functions::getCRMRecordType($fieldValue);
            $fieldLabel = decode_html(Vtiger_Util_Helper::getRecordName($fieldValue));
            $referenceModuleModel = Vtiger_Module_Model::getInstance($referenceModule);
            if (!$referenceModuleModel) {
                continue;
            }
            if(isRecordExists($fieldValue)) {
                $referenceRecordModel = Vtiger_Record_Model::getInstanceById($fieldValue, $referenceModule);
                if ($referenceRecordModel->get('emailoptout')) {
                    continue;
                }
            }
            $emailFields = $referenceModuleModel->getFieldsByType('email');
            if(count($emailFields) <= 0) {
                continue;
            }
            $current_user = Users_Record_Model::getCurrentUserModel();
            $queryGenerator = new QueryGenerator($referenceModule, $current_user);
            $queryGenerator->setFields(array_keys($emailFields));
            $query = $queryGenerator->getQuery();
            $query .= ' AND crmid = ' . $fieldValue;
            $result = $db->pquery($query, array());
            $num_rows = $db->num_rows($result);
            if($num_rows <= 0) {
                continue;
            }
            foreach($emailFields as $fieldName => $emailFieldModel) {
                $emailValue = $db->query_result($result,0,$fieldName);
                if(!empty($emailValue)){
                    $to[] = $emailValue;
                    $to_info[$fieldValue][] = $emailValue;
                    $toMailNamesList[$fieldValue][] = array('label' => decode_html($fieldLabel), 'value' => $emailValue);
                    break;
                }
            }
            if(!empty($to)) {
                break;
            }
        }

        $viewer->assign('SELECTED_IDS', [$request->get('record')]);
        $viewer->assign('TO', $to);
        $viewer->assign('TOMAIL_NAMES_LIST', json_encode($toMailNamesList, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP));
        $viewer->assign('TOMAIL_INFO', [$request->get('record') => $to]);
    }
}
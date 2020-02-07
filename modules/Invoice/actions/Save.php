<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
class Invoice_Save_Action extends Inventory_Save_Action {

	public function saveRecord($request) {
		$recordId = $request->get('record');
		$relProject = $request->get('relProject') ?: $request->get('returnrecord');

		if ($recordId && $_REQUEST['action'] == 'SaveAjax') {
			// While saving Invoice record Line items quantities should not get updated
			// This is a dependency on the older code, where in Invoice save_module we decide wheather to update or not.
			$_REQUEST['action'] = 'InvoiceAjax';
		}

		$recordModel = parent::saveRecord($request);

        if (isRecordExists($relProject)) {
            $recordModel = Project_Record_Model::getInstanceById($relProject);
//                $requestedPage = $request->get('page');
            $pagingModel = new Vtiger_Paging_Model();
//                $pagingModel->set('page',$requestedPage);

            $relationListView = Vtiger_RelationListView_Model::getInstance($recordModel, 'Invoice', 'Invoices');

            //$targetControllerClass = Vtiger_Loader::getComponentClassName('View', 'In'.$recordModel->getModuleName().'Relation', $request->getModule());
            //$inv = Invoice_RelationListView_Model::getInstance($recordModel, $request->getModule());

//                $inv = $recordModel;
//                var_dump($inv); exit;
            //$invoice = RelatedModuleMeta::getInstance($recordModel->getModule()->getName(), 'Invoices')->getRelationMeta();
            $relModel = $relationListView->getEntries($pagingModel);

            $received = 0;
            $balance = 0;

            $modelIds = array();
            foreach ($relModel as $model) {
                if($model->get('invoicestatus') != 'Cancel') {
                    $modelIds[] = $model->getId();
//                        var_dump($model->getDisplayValue('balance')); exit;
//                        $received += $model->get('received');
//                        $balance += $model->get('balance');
                }
            }
//
            $invoices = Invoice_Record_Model::getInstancesFromIds($modelIds, $request->getModule());
//
            foreach ($invoices as $model) {
                $received += $model->get('received');
                $balance += $model->get('balance');
            }

            $recordModel->set('mode', 'edit');
            $recordModel->set('cf_945', $received);
            $recordModel->set('cf_947', $balance);
            $recordModel->save();
        }

		//Reverting the action value to $_REQUEST
		$_REQUEST['action'] = $request->get('action');
		return $recordModel;
	}
}

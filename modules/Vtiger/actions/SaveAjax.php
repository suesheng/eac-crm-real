<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Vtiger_SaveAjax_Action extends Vtiger_Save_Action {

	public function process(Vtiger_Request $request) {
		$fieldToBeSaved = $request->get('field');
        $relProject = $request->get('relProject') ?: $request->get('returnrecord');
		$response = new Vtiger_Response();
		try {
			vglobal('VTIGER_TIMESTAMP_NO_CHANGE_MODE', $request->get('_timeStampNoChangeMode',false));
			$recordModel = $this->saveRecord($request);

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

			vglobal('VTIGER_TIMESTAMP_NO_CHANGE_MODE', false);

			$fieldModelList = $recordModel->getModule()->getFields();
			$result = array();
			$picklistColorMap = array();
			foreach ($fieldModelList as $fieldName => $fieldModel) {
				$recordFieldValue = $recordModel->get($fieldName);
				if(is_array($recordFieldValue) && $fieldModel->getFieldDataType() == 'multipicklist') {
					foreach ($recordFieldValue as $picklistValue) {
						$picklistColorMap[$picklistValue] = Settings_Picklist_Module_Model::getPicklistColorByValue($fieldName, $picklistValue);
					}
					$recordFieldValue = implode(' |##| ', $recordFieldValue);     
				}
				if($fieldModel->getFieldDataType() == 'picklist') {
					$picklistColorMap[$recordFieldValue] = Settings_Picklist_Module_Model::getPicklistColorByValue($fieldName, $recordFieldValue);
				}
				$fieldValue = $displayValue = Vtiger_Util_Helper::toSafeHTML($recordFieldValue);
				if ($fieldModel->getFieldDataType() !== 'currency' && $fieldModel->getFieldDataType() !== 'datetime' && $fieldModel->getFieldDataType() !== 'date' && $fieldModel->getFieldDataType() !== 'double') { 
					$displayValue = $fieldModel->getDisplayValue($fieldValue, $recordModel->getId()); 
				}
				if ($fieldModel->getFieldDataType() == 'currency') {
					$displayValue = Vtiger_Currency_UIType::transformDisplayValue($fieldValue);
				}
				if(!empty($picklistColorMap)) {
					$result[$fieldName] = array('value' => $fieldValue, 'display_value' => $displayValue, 'colormap' => $picklistColorMap);
				} else {
					$result[$fieldName] = array('value' => $fieldValue, 'display_value' => $displayValue);
				}
			}

			//Handling salutation type
			if ($request->get('field') === 'firstname' && in_array($request->getModule(), array('Contacts', 'Leads'))) {
				$salutationType = $recordModel->getDisplayValue('salutationtype');
				$firstNameDetails = $result['firstname'];
				$firstNameDetails['display_value'] = $salutationType. " " .$firstNameDetails['display_value'];
				if ($salutationType != '--None--') $result['firstname'] = $firstNameDetails;
			}

			// removed decode_html to eliminate XSS vulnerability
			$result['_recordLabel'] = decode_html($recordModel->getName());
			$result['_recordId'] = $recordModel->getId();
			$response->setEmitType(Vtiger_Response::$EMIT_JSON);
			$response->setResult($result);
		} catch (DuplicateException $e) {
			$response->setError($e->getMessage(), $e->getDuplicationMessage(), $e->getMessage());
		} catch (Exception $e) {
			$response->setError($e->getMessage());
		}
		$response->emit();
	}

	/**
	 * Function to get the record model based on the request parameters
	 * @param Vtiger_Request $request
	 * @return Vtiger_Record_Model or Module specific Record Model instance
	 */
	public function getRecordModelFromRequest(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		if($moduleName == 'Calendar') {
			$moduleName = $request->get('calendarModule');
		}
		$recordId = $request->get('record');

		if(!empty($recordId)) {
			$recordModel = Vtiger_Record_Model::getInstanceById($recordId, $moduleName);
			$recordModel->set('id', $recordId);
			$recordModel->set('mode', 'edit');

			$fieldModelList = $recordModel->getModule()->getFields();
			foreach ($fieldModelList as $fieldName => $fieldModel) {
				//For not converting createdtime and modified time to user format
				$uiType = $fieldModel->get('uitype');
				if ($uiType == 70) {
					$fieldValue = $recordModel->get($fieldName);
				} else {
					$fieldValue = $fieldModel->getUITypeModel()->getUserRequestValue($recordModel->get($fieldName));
				}

				// To support Inline Edit in Vtiger7
				if($request->has($fieldName)){
					$fieldValue = $request->get($fieldName,null);
				}else if($fieldName === $request->get('field')){
					$fieldValue = $request->get('value');
				}

				$fieldDataType = $fieldModel->getFieldDataType();
				if ($fieldDataType == 'time') {
					$fieldValue = Vtiger_Time_UIType::getTimeValueWithSeconds($fieldValue);
				}
				if ($fieldValue !== null) {
					if (!is_array($fieldValue)) {
						$fieldValue = trim($fieldValue);
					}
					$recordModel->set($fieldName, $fieldValue);
				}
				$recordModel->set($fieldName, $fieldValue);
				if($fieldName === 'contact_id' && isRecordExists($fieldValue)) {
					$contactRecord = Vtiger_Record_Model::getInstanceById($fieldValue, 'Contacts');
					$recordModel->set("relatedContact",$contactRecord);
				}
			}
		} else {
			$moduleModel = Vtiger_Module_Model::getInstance($moduleName);

			$recordModel = Vtiger_Record_Model::getCleanInstance($moduleName);
			$recordModel->set('mode', '');

			$fieldModelList = $moduleModel->getFields();
			foreach ($fieldModelList as $fieldName => $fieldModel) {
				if ($request->has($fieldName)) {
					$fieldValue = $request->get($fieldName, null);
				} else {
					$fieldValue = $fieldModel->getDefaultFieldValue();
				}
				$fieldDataType = $fieldModel->getFieldDataType();
				if ($fieldDataType == 'time') {
					$fieldValue = Vtiger_Time_UIType::getTimeValueWithSeconds($fieldValue);
				}
				if ($fieldValue !== null) {
					if (!is_array($fieldValue)) {
						$fieldValue = trim($fieldValue);
					}
					$recordModel->set($fieldName, $fieldValue);
				}
			} 
		}

		return $recordModel;
	}
}

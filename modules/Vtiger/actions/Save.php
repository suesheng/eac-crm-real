<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

ini_set('display_errors', 1);
error_reporting(1);

class Vtiger_Save_Action extends Vtiger_Action_Controller {

	public function checkPermission(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$record = $request->get('record');

		$actionName = ($record) ? 'EditView' : 'CreateView';
		if(!Users_Privileges_Model::isPermitted($moduleName, $actionName, $record)) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
		}

		if(!Users_Privileges_Model::isPermitted($moduleName, 'Save', $record)) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
		}

		if ($record) {
			$recordEntityName = getSalesEntityType($record);
			if ($recordEntityName !== $moduleName) {
				throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
			}
		}
	}
	

    public function validateRequest(Vtiger_Request $request) {
        return $request->validateWriteAccess();
    }

	public function process(Vtiger_Request $request) {
		try {
			$recordModel = $this->saveRecord($request);
			if ($request->get('returntab_label')){
				$loadUrl = 'index.php?'.$request->getReturnURL();
			} else if($request->get('relationOperation')) {
				$parentModuleName = $request->get('sourceModule');
				$parentRecordId = $request->get('sourceRecord');
				$parentRecordModel = Vtiger_Record_Model::getInstanceById($parentRecordId, $parentModuleName);
				//TODO : Url should load the related list instead of detail view of record
				$loadUrl = $parentRecordModel->getDetailViewUrl();
			} else if ($request->get('returnToList')) {
				$loadUrl = $recordModel->getModule()->getListViewUrl();
			} else if ($request->get('returnmodule') && $request->get('returnview')) {
				$loadUrl = 'index.php?'.$request->getReturnURL();
			} else {
				$loadUrl = $recordModel->getDetailViewUrl();
			}
			//append App name to callback url
			//Special handling for vtiger7.
			$appName = $request->get('appName');
			if(strlen($appName) > 0){
				$loadUrl = $loadUrl.$appName;
			}
			header("Location: $loadUrl");
		} catch (DuplicateException $e) {
			$requestData = $request->getAll();
			$moduleName = $request->getModule();
			unset($requestData['action']);
			unset($requestData['__vtrftk']);

			if ($request->isAjax()) {
				$response = new Vtiger_Response();
				$response->setError($e->getMessage(), $e->getDuplicationMessage(), $e->getMessage());
				$response->emit();
			} else {
				$requestData['view'] = 'Edit';
				$requestData['duplicateRecords'] = $e->getDuplicateRecordIds();
				$moduleModel = Vtiger_Module_Model::getInstance($moduleName);

				global $vtiger_current_version;
				$viewer = new Vtiger_Viewer();

				$viewer->assign('REQUEST_DATA', $requestData);
				$viewer->assign('REQUEST_URL', $moduleModel->getCreateRecordUrl().'&record='.$request->get('record'));
				$viewer->view('RedirectToEditView.tpl', 'Vtiger');
			}
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}

	/**
	 * Function to save record
	 * @param <Vtiger_Request> $request - values of the record
	 * @return <RecordModel> - record Model of saved record
	 */
	public function saveRecord($request) {
//	    var_dump($request); exit;

		$recordModel = $this->getRecordModelFromRequest($request);
		if($request->get('imgDeleted')) {
			$imageIds = $request->get('imageid');
			foreach($imageIds as $imageId) {
				$status = $recordModel->deleteImage($imageId);
			}
		}

		$recordModel->save();

        $relProject = $request->get('relProject') ?: $request->get('returnrecord');

        if($relProject && is_numeric($relProject)) {

            if($relProject && isRecordExists($relProject)) {

                $parentsModuleModel = Vtiger_Module_Model::getInstance('Project');
                $relationModelf = Vtiger_Relation_Model::getInstance($parentsModuleModel, $recordModel->getModule());
                if($relationModelf) {
                    $relationModelf->addRelation($relProject, $recordModel->getId());
                }


                $recordModel = Project_Record_Model::getInstanceById($relProject);


                $pagingModel = new Vtiger_Paging_Model();
//                $pagingModel->set('page',$requestedPage);

                $relationListView = Vtiger_RelationListView_Model::getInstance($recordModel, 'Quotes', 'Quotes');

                //$targetControllerClass = Vtiger_Loader::getComponentClassName('View', 'In'.$recordModel->getModuleName().'Relation', $request->getModule());
                //$inv = Invoice_RelationListView_Model::getInstance($recordModel, $request->getModule());

//                $inv = $recordModel;
//                var_dump($inv); exit;
                //$invoice = RelatedModuleMeta::getInstance($recordModel->getModule()->getName(), 'Invoices')->getRelationMeta();
                $relModel = $relationListView->getEntries($pagingModel);

                $projectBalance = 0;

                $modelIds = array();
                foreach ($relModel as $model) {
                    $modelIds[] = $model->getId();
                }
//
                $quotes = Quotes_Record_Model::getInstancesFromIds($modelIds, $request->getModule());
                $purchaseCostPrice = [];
                $hdnGrandTotal = [];
//
                foreach ($quotes as $key => $model) {

//                    var_dump($model); exit;
//                    $sellingPrice = [];


                    foreach($model->getProducts() as $key => $product) {
//                        $sellingPrice[] = $product['unitPrice' . $key];
//                        var_dump($product); exit;
                        $purchaseCostPrice[] = $product['qty' . $key] * $product['purchaseCost' . $key];
                    }
//                    var_dump($purchaseCostPrice); exit;
//                    var_dump(array_sum($sellingPrice) . '-' . array_sum($purchaseCostPrice)); exit;


                    $hdnGrandTotal[] = $model->get('hdnGrandTotal');
                }

                $projectBalance = array_sum($hdnGrandTotal) - array_sum($purchaseCostPrice);

                $recordModel->set('mode', 'edit');
                $recordModel->set('cf_973', $projectBalance);
                $recordModel->save();

                $site_URL = vglobal('site_URL');
                $dId = $relationModelf ? $relationModelf->getId() : null;
                $lbl = $relationModelf ? $relationModelf->get('label') : null;
                return Vtiger_Functions::redirectUrl(rawurldecode(''. $site_URL .'index.php?module=Project&relatedModule='. $recordModel->getModule()->name . '&view=Detail&record='. $relProject . '&mode=showRelatedList&relationId='. $dId . '&tab_label='. $lbl .'&app=PROJECT'));
            }
        }

		if($request->get('relationOperation')) {
			$parentModuleName = $request->get('sourceModule');
			$parentModuleModel = Vtiger_Module_Model::getInstance($parentModuleName);
			$parentRecordId = $request->get('sourceRecord');
			$relatedModule = $recordModel->getModule();
			$relatedRecordId = $recordModel->getId();
			if($relatedModule->getName() == 'Events'){
				$relatedModule = Vtiger_Module_Model::getInstance('Calendar');
			}

			$relationModel = Vtiger_Relation_Model::getInstance($parentModuleModel, $relatedModule);
			$relationModel->addRelation($parentRecordId, $relatedRecordId);
		}
		$this->savedRecordId = $recordModel->getId();
		return $recordModel;
	}

	/**
	 * Function to get the record model based on the request parameters
	 * @param Vtiger_Request $request
	 * @return Vtiger_Record_Model or Module specific Record Model instance
	 */
	protected function getRecordModelFromRequest(Vtiger_Request $request) {

		$moduleName = $request->getModule();
		$recordId = $request->get('record');

		$moduleModel = Vtiger_Module_Model::getInstance($moduleName);

		if(!empty($recordId)) {
			$recordModel = Vtiger_Record_Model::getInstanceById($recordId, $moduleName);
			$recordModel->set('id', $recordId);
			$recordModel->set('mode', 'edit');
		} else {
			$recordModel = Vtiger_Record_Model::getCleanInstance($moduleName);
			$recordModel->set('mode', '');
		}

		$fieldModelList = $moduleModel->getFields();
		foreach ($fieldModelList as $fieldName => $fieldModel) {
			$fieldValue = $request->get($fieldName, null);
			$fieldDataType = $fieldModel->getFieldDataType();
			if($fieldDataType == 'time'){
				$fieldValue = Vtiger_Time_UIType::getTimeValueWithSeconds($fieldValue);
			}
			if($fieldValue !== null) {
				if(!is_array($fieldValue) && $fieldDataType != 'currency') {
					$fieldValue = trim($fieldValue);
				}
				$recordModel->set($fieldName, $fieldValue);
			}
		}
		return $recordModel;
	}
}

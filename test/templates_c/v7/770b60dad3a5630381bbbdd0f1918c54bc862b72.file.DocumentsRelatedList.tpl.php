<?php /* Smarty version Smarty-3.1.7, created on 2019-05-07 13:07:24
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Documents/DocumentsRelatedList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16967437115cd1830c3909d0-86624376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '770b60dad3a5630381bbbdd0f1918c54bc862b72' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Documents/DocumentsRelatedList.tpl',
      1 => 1554895381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16967437115cd1830c3909d0-86624376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'RELATED_HEADERS' => 0,
    'RELATED_MODULE' => 0,
    'RELATION_FIELD' => 0,
    'PAGING' => 0,
    'RELATED_MODULE_NAME' => 0,
    'ORDER_BY' => 0,
    'SORT_ORDER' => 0,
    'RELATED_ENTIRES_COUNT' => 0,
    'TOTAL_ENTRIES' => 0,
    'TAB_LABEL' => 0,
    'IS_RELATION_FIELD_ACTIVE' => 0,
    'RELATED_LIST_LINKS' => 0,
    'RELATED_LINK' => 0,
    'IS_SELECT_BUTTON' => 0,
    'IS_CREATE_PERMITTED' => 0,
    'PARENT_ID' => 0,
    'RELATED_RECORDS' => 0,
    'PARENT_RECORD' => 0,
    'IS_VIEWABLE' => 0,
    'USER_MODEL' => 0,
    'HEADER_FIELD' => 0,
    'COLUMN_NAME' => 0,
    'NEXT_SORT_ORDER' => 0,
    'FASORT_IMAGE' => 0,
    'SORT_IMAGE' => 0,
    'FIELD_UI_TYPE_MODEL' => 0,
    'SEARCH_DETAILS' => 0,
    'RELATED_RECORD' => 0,
    'DETAILVIEWPERMITTED' => 0,
    'IS_DELETABLE' => 0,
    'RECORD_ID' => 0,
    'DOCUMENT_RECORD_MODEL' => 0,
    'RELATED_HEADERNAME' => 0,
    'WIDTHTYPE' => 0,
    'CURRENCY_SYMBOL' => 0,
    'CURRENCY_VALUE' => 0,
    'RELATED_LIST_VALUE' => 0,
    'RELATED_FIELDS_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd1830c43744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd1830c43744')) {function content_5cd1830c43744($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PicklistColorMap.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('LISTVIEW_HEADERS'=>$_smarty_tpl->tpl_vars['RELATED_HEADERS']->value), 0);?>
<div class="relatedContainer"><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'), null, 0);?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['RELATION_FIELD']->value){?><?php echo $_smarty_tpl->tpl_vars['RELATION_FIELD']->value->isActiveField();?><?php }else{ ?><?php echo "false";?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['IS_RELATION_FIELD_ACTIVE'] = new Smarty_variable($_tmp1, null, 0);?><input type="hidden" name="currentPageNum" value="<?php echo $_smarty_tpl->tpl_vars['PAGING']->value->getCurrentPage();?>
" /><input type="hidden" name="relatedModuleName" class="relatedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_ENTIRES_COUNT']->value;?>
" id="noOfEntries"><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING']->value->getPageLimit();?>
" id='pageLimit'><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING']->value->get('page');?>
" id='pageNumber'><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['PAGING']->value->isNextPageExists();?>
" id="nextPageExist"/><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['TOTAL_ENTRIES']->value;?>
" id='totalCount'><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['TAB_LABEL']->value;?>
" id='tab_label' name='tab_label'><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['IS_RELATION_FIELD_ACTIVE']->value;?>
" id='isRelationFieldActive'><div class="relatedHeader"><div class="btn-toolbar row"><div class="col-lg-6 col-md-6 col-sm-6 btn-toolbar"><div class="row"><?php  $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['LISTVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->key => $_smarty_tpl->tpl_vars['RELATED_LINK']->value){
$_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkmodule')=='Documents'){?><div class="col-sm-3" style="width:22%;"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_selectRelation');?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['IS_SELECT_BUTTON'] = new Smarty_variable($_tmp2, null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linklabel');?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['LINK_LABEL'] = new Smarty_variable($_tmp3, null, 0);?><?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_linklabel')==='_add_event'){?><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME'] = new Smarty_variable('Events', null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_linklabel')==='_add_task'){?><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME'] = new Smarty_variable('Calendar', null, 0);?><?php }?><button type="button" module="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"  class="btn addButton btn-default<?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value==true){?> selectRelation <?php }?> "<?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value==true){?> data-moduleName=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_module')->get('name');?>
 <?php }?><?php if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->isPageLoadLink())){?><?php if ($_smarty_tpl->tpl_vars['RELATION_FIELD']->value){?> data-name="<?php echo $_smarty_tpl->tpl_vars['RELATION_FIELD']->value->getName();?>
" <?php }?>data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value!=true){?>name="addButton"<?php }?>><?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value==false){?><i class="icon-plus icon-white"></i><?php }?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
</button></div><?php }?><?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel()=='Vtiger'){?><?php if ($_smarty_tpl->tpl_vars['IS_CREATE_PERMITTED']->value){?><div class="col-sm-3"><div class="dropdown"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="fa fa-plus" title="<?php echo vtranslate('LBL_NEW_DOCUMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span>&nbsp;&nbsp;<?php echo vtranslate('LBL_NEW_DOCUMENT',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
&nbsp; <span class="caret"></span></button><ul class="dropdown-menu"><li class="dropdown-header"><i class="fa fa-upload"></i> <?php echo vtranslate('LBL_FILE_UPLOAD',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</li><li id="VtigerAction"><a href="javascript:Documents_Index_Js.uploadTo('Vtiger',<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
')"><img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="layouts/v7/skins//images/Vtiger.png"><?php ob_start();?><?php echo vtranslate('LBL_VTIGER',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
<?php $_tmp4=ob_get_clean();?><?php echo vtranslate('LBL_TO_SERVICE',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,$_tmp4);?>
</a></li><li role="separator" class="divider"></li><li class="dropdown-header"><i class="fa fa-link"></i> <?php echo vtranslate('LBL_LINK_EXTERNAL_DOCUMENT',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</li><li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E',<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; <?php ob_start();?><?php echo vtranslate('LBL_FILE_URL',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
<?php $_tmp5=ob_get_clean();?><?php echo vtranslate('LBL_FROM_SERVICE',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,$_tmp5);?>
</a></li><li role="separator" class="divider"></li><li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W',<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
')"><i class="fa fa-file-text"></i> <?php ob_start();?><?php echo vtranslate('SINGLE_Documents',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
<?php $_tmp6=ob_get_clean();?><?php echo vtranslate('LBL_CREATE_NEW',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,$_tmp6);?>
</a></li></ul></div></div><?php }?><?php }?><?php } ?></div>&nbsp;</div><?php $_smarty_tpl->tpl_vars['CLASS_VIEW_ACTION'] = new Smarty_variable('relatedViewActions', null, 0);?><?php $_smarty_tpl->tpl_vars['CLASS_VIEW_PAGING_INPUT'] = new Smarty_variable('relatedViewPagingInput', null, 0);?><?php $_smarty_tpl->tpl_vars['CLASS_VIEW_PAGING_INPUT_SUBMIT'] = new Smarty_variable('relatedViewPagingInputSubmit', null, 0);?><?php $_smarty_tpl->tpl_vars['CLASS_VIEW_BASIC_ACTION'] = new Smarty_variable('relatedViewBasicAction', null, 0);?><?php $_smarty_tpl->tpl_vars['PAGING_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['PAGING']->value, null, 0);?><?php $_smarty_tpl->tpl_vars['RECORD_COUNT'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['RELATED_RECORDS']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['PAGE_NUMBER'] = new Smarty_variable($_smarty_tpl->tpl_vars['PAGING']->value->get('page'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHOWPAGEJUMP'=>true), 0);?>
</div></div><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Products'&&$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value=='Products'&&$_smarty_tpl->tpl_vars['TAB_LABEL']->value==='Product Bundles'&&$_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value){?><div class="row-fluid" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><?php $_smarty_tpl->tpl_vars['IS_VIEWABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['PARENT_RECORD']->value->isBundleViewable(), null, 0);?><input type="hidden" class="isShowBundles" value="<?php echo $_smarty_tpl->tpl_vars['IS_VIEWABLE']->value;?>
"><label class="showBundlesInInventory checkbox"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['IS_VIEWABLE']->value){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['IS_VIEWABLE']->value;?>
">&nbsp;&nbsp;<?php echo vtranslate('LBL_SHOW_BUNDLE_IN_INVENTORY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><?php }?><div class="relatedContents col-lg-12 col-md-12 col-sm-12 table-container"><div class="bottomscroll-div"><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?><table id="listview-table"  class="table listview-table"><thead><tr class="listViewHeaders"><th style="min-width:100px"></th><?php  $_smarty_tpl->tpl_vars['HEADER_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->key => $_smarty_tpl->tpl_vars['HEADER_FIELD']->value){
$_smarty_tpl->tpl_vars['HEADER_FIELD']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')=='time_start'||$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')=='time_end'){?><th class="nowrap" style="width:15px"><?php }else{ ?><th class="nowrap"><?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')=="access_count"||$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')=="idlists"){?><a href="javascript:void(0);" class="noSorting"><?php echo vtranslate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</a><?php }else{ ?><a href="javascript:void(0);" class="listViewContentHeaderValues" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column');?>
"><?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')){?><i class="fa fa-sort <?php echo $_smarty_tpl->tpl_vars['FASORT_IMAGE']->value;?>
"></i><?php }else{ ?><i class="fa fa-sort customsort"></i><?php }?>&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')){?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
"><?php }?>&nbsp;</a><?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')){?><a href="#" class="removeSorting"><i class="fa fa-remove"></i></a><?php }?><?php }?><?php }?></th><?php } ?></tr><tr class="searchRow"><th class="inline-search-btn"><button class="btn btn-success btn-sm" data-trigger="relatedListSearch"><?php echo vtranslate("LBL_SEARCH",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></th><?php  $_smarty_tpl->tpl_vars['HEADER_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->key => $_smarty_tpl->tpl_vars['HEADER_FIELD']->value){
$_smarty_tpl->tpl_vars['HEADER_FIELD']->_loop = true;
?><th><?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')=='time_start'||$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')=='time_end'||$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('column')=='folderid'||$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType()=='reference'){?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getUITypeModel(), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['HEADER_FIELD']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getName()],'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value), 0);?>
<input type="hidden" class="operatorValue" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getName()]['comparator'];?>
"><?php }?></th><?php } ?></tr></thead><?php  $_smarty_tpl->tpl_vars['RELATED_RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->key => $_smarty_tpl->tpl_vars['RELATED_RECORD']->value){
$_smarty_tpl->tpl_vars['RELATED_RECORD']->_loop = true;
?><tr class="listViewEntries" data-id='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
'<?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value=='Calendar'){?>data-recurring-enabled='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isRecurringEnabled();?>
'<?php $_smarty_tpl->tpl_vars['DETAILVIEWPERMITTED'] = new Smarty_variable(isPermitted($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'),'DetailView',$_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId()), null, 0);?><?php if ($_smarty_tpl->tpl_vars['DETAILVIEWPERMITTED']->value=='yes'){?>data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
'<?php }?><?php }else{ ?>data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
'<?php }?>><td style="width:100px">&nbsp;&nbsp;&nbsp;<span class="actionImages"><a name="relationEdit" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getEditViewUrl();?>
"><i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-pencil"></i></a> &nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['IS_DELETABLE']->value){?><a class="relationDelete"><i title="<?php echo vtranslate('LBL_UNLINK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="vicon-linkopen"></i></a>&nbsp;&nbsp;<?php }?><?php $_smarty_tpl->tpl_vars['RECORD_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId(), null, 0);?><?php $_smarty_tpl->tpl_vars["DOCUMENT_RECORD_MODEL"] = new Smarty_variable(Vtiger_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['RECORD_ID']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filename')&&$_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filestatus')){?><a name="viewfile" href="javascript:void(0)" data-filelocationtype="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filelocationtype');?>
" data-filename="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filename');?>
" onclick="Vtiger_Header_Js.previewFile(event)"><i title="<?php echo vtranslate('LBL_VIEW_FILE',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
" class="fa fa-picture-o alignMiddle"></i></a>&nbsp;&nbsp;<?php }?><?php if ($_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filename')&&$_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filestatus')&&$_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->get('filelocationtype')=='I'){?><a name="downloadfile" href="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_RECORD_MODEL']->value->getDownloadFileURL();?>
" onclick="event.stopImmediatePropagation();"><i title="<?php echo vtranslate('LBL_DOWNLOAD_FILE',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
" class="fa fa-download alignMiddle"></i></a><?php }?></span></td><?php  $_smarty_tpl->tpl_vars['HEADER_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->key => $_smarty_tpl->tpl_vars['HEADER_FIELD']->value){
$_smarty_tpl->tpl_vars['HEADER_FIELD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['RELATED_HEADERNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATED_LIST_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['IS_DOCUMENT_SOURCE_FIELD'] = new Smarty_variable(0, null, 0);?><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name')=='Documents'&&$_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value=='document_source'){?><?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value)=='Vtiger'||$_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value)=='Google Drive'||$_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value)=='Dropbox'){?><?php $_smarty_tpl->tpl_vars['IS_DOCUMENT_SOURCE_FIELD'] = new Smarty_variable(1, null, 0);?><?php }?><?php }?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 relatedListEntryValues " data-field-type="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType();?>
" nowrap style="width:inherit;"><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name')=='Documents'&&$_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value=='document_source'){?><center><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
</center><?php }else{ ?><span class= "value textOverflowEllipsis"><?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isNameField()==true||$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('uitype')=='4'){?><a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
</a><?php }elseif($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value=='access_count'){?><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getAccessCountValue($_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getId());?>
<?php }elseif($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value=='time_start'||$_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value=='time_end'){?><?php }elseif($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value=='PriceBooks'&&($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value=='listprice'||$_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value=='unit_price')){?><?php if ($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value=='listprice'){?><?php $_smarty_tpl->tpl_vars["LISTPRICE"] = new Smarty_variable(CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value),null,true), null, 0);?><?php }?><?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value),null,true);?>
<?php }elseif($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('uitype')=='71'||$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('uitype')=='72'){?><?php $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL'] = new Smarty_variable(Vtiger_RelationListView_Model::getCurrencySymbol($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('id'),$_smarty_tpl->tpl_vars['HEADER_FIELD']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['CURRENCY_VALUE'] = new Smarty_variable(CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value)), null, 0);?><?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('uitype')=='72'){?><?php $_smarty_tpl->tpl_vars['CURRENCY_VALUE'] = new Smarty_variable(CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value),null,true), null, 0);?><?php }?><?php if (Users_Record_Model::getCurrentUserModel()->get('currency_symbol_placement')=='$1.0'){?><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['CURRENCY_VALUE']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['CURRENCY_VALUE']->value;?>
<?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value=='listprice'){?><?php $_smarty_tpl->tpl_vars["LISTPRICE"] = new Smarty_variable(CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value),null,true), null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType()=='picklist'){?><span <?php if (!empty($_smarty_tpl->tpl_vars['RELATED_LIST_VALUE']->value)){?> class="picklist-color picklist-<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getId();?>
-<?php echo Vtiger_Util_Helper::convertSpaceToHyphen($_smarty_tpl->tpl_vars['RELATED_LIST_VALUE']->value);?>
" <?php }?>> <?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
 </span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
<?php }?></span><?php }?></td><?php } ?></tr><?php } ?></table></div></div><script type="text/javascript">var related_uimeta = (function() {var fieldInfo  = <?php echo $_smarty_tpl->tpl_vars['RELATED_FIELDS_INFO']->value;?>
;return {field: {get: function(name, property) {if(name && property === undefined) {return fieldInfo[name];}if(name && property) {return fieldInfo[name][property]}},isMandatory : function(name){if(fieldInfo[name]) {return fieldInfo[name].mandatory;}return false;},getType : function(name){if(fieldInfo[name]) {return fieldInfo[name].type}return false;}},};})();</script></div>

    <script type="text/javascript">
        jQuery(function() {
            if(typeof Documents_Index_Js !== 'function') {
                jQuery("body").append('<script type="text/javascript" src="layouts/v7/modules/Documents/resources/Documents.js"><\/script>');
            }
        });
    </script>
<?php }} ?>
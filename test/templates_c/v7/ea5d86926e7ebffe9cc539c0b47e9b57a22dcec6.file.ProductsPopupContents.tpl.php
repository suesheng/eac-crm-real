<?php /* Smarty version Smarty-3.1.7, created on 2018-11-19 12:10:48
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Products/ProductsPopupContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16377472385bf2a848419965-97064787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea5d86926e7ebffe9cc539c0b47e9b57a22dcec6' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Products/ProductsPopupContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16377472385bf2a848419965-97064787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'PAGE_NUMBER' => 0,
    'PAGING_MODEL' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
    'LISTVIEW_COUNT' => 0,
    'SEARCH_DETAILS' => 0,
    'ORDER_BY' => 0,
    'SORT_ORDER' => 0,
    'LISTVIEW_HEADERS' => 0,
    'LISTVIEW_HEADER' => 0,
    'NEXT_SORT_ORDER' => 0,
    'FASORT_IMAGE' => 0,
    'MODULE_MODEL' => 0,
    'FIELD_UI_TYPE_MODEL' => 0,
    'MODULE_NAME' => 0,
    'CURRENT_USER_MODEL' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'LISTVIEW_ENTRY' => 0,
    'SELECTED_RECORDS' => 0,
    'RECORD_DATA' => 0,
    'GETURL' => 0,
    'EDITED_VALUE' => 0,
    'LISTVIEW_HEADERNAME' => 0,
    'CURRENCY_SYMBOL_PLACEMENT' => 0,
    'LISTVIEW_ENTRY_VALUE' => 0,
    'MULTI_RAW_PICKLIST_VALUES' => 0,
    'MULTI_PICKLIST_VALUE' => 0,
    'MULTI_PICKLIST_INDEX' => 0,
    'MULTI_PICKLIST_VALUES' => 0,
    'ENTRY_VALUE' => 0,
    'COL_NUMBER' => 0,
    'ROW_NUMBER' => 0,
    'QTY_ELEMENT_NAME' => 0,
    'IS_MODULE_DISABLED' => 0,
    'RELATED_MODULE' => 0,
    'FIELDS_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bf2a8484836d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf2a8484836d')) {function content_5bf2a8484836d($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PicklistColorMap.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupNavigation.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="row"><div class="col-md-12"><input type='hidden' id='pageNumber' value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
"><input type='hidden' id='pageLimit' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
"><input type="hidden" id="noOfEntries" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
"><input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" /><input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" /><input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" /><input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" /><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" /><input type="hidden" value="<?php echo Vtiger_Util_Helper::toSafeHTML(Zend_JSON::encode($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value));?>
" id="currentSearchParams" /><div class="contents-topscroll"><div class="topscroll-div">&nbsp;</div></div><div class="popupEntriesDiv relatedContents"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder"><input type="hidden" value="Products_ProductRelatedProductBundles_Js" id="popUpClassName"/><div class="popupEntriesTableContainer"><table class="listview-table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><th><input type="checkbox"  class="selectAllInCurrentPage" /></th><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
?><th><a href="javascript:void(0);" class="listViewContentHeaderValues listViewHeaderValues <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')=='listprice'){?> noSorting <?php }?>" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['ORDER_BY']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name');?>
"><?php if ($_smarty_tpl->tpl_vars['ORDER_BY']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')){?><i class="fa fa-sort <?php echo $_smarty_tpl->tpl_vars['FASORT_IMAGE']->value;?>
"></i><?php }else{ ?><i class="fa fa-sort customsort"></i><?php }?>&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</a></th><?php } ?></tr><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value&&$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isQuickSearchEnabled()){?><tr class="searchRow"><th class="textAlignCenter searchBtn"><button class="btn btn-success pull-right pull-right" data-trigger="PopupListSearch"><?php echo vtranslate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></th><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
?><th><?php $_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUITypeModel(), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName()],'USER_MODEL'=>$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value), 0);?>
</th><?php } ?></tr><?php }?></thead><?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['popupListView']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['popupListView']['index']++;
?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['popupListView']['index'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["COL_NUMBER"] = new Smarty_variable($_tmp1, null, 0);?><?php $_smarty_tpl->tpl_vars["RECORD_DATA"] = new Smarty_variable(($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRawData()), null, 0);?><?php $_smarty_tpl->tpl_vars['EDITED_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['SELECTED_RECORDS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId()], null, 0);?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='EmailTemplates'){?> data-name="<?php echo $_smarty_tpl->tpl_vars['RECORD_DATA']->value['subject'];?>
" data-info="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('body');?>
" <?php }else{ ?> data-name="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getName();?>
" data-info='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRawData()));?>
' <?php }?><?php if ($_smarty_tpl->tpl_vars['GETURL']->value!=''){?> data-url='<?php $_tmp2=$_smarty_tpl->tpl_vars['GETURL']->value;?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->$_tmp2();?>
' <?php }?>  id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_popUpListView_row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['popupListView']['index']+1;?>
"><td><input class="entryCheckBox" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['EDITED_VALUE']->value){?>checked<?php }?>/></td><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listViewEntry']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listViewEntry']['index']++;
?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['listViewEntry']['index'];?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["ROW_NUMBER"] = new Smarty_variable($_tmp3, null, 0);?><?php $_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value), null, 0);?><td class="listViewEntryValue textOverflowEllipsis" title="<?php echo $_smarty_tpl->tpl_vars['RECORD_DATA']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value];?>
"><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isNameField()==true||$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('uitype')=='4'){?><a><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);?>
</a><?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('uitype')=='72'){?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_symbol_placement');?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL_PLACEMENT'] = new Smarty_variable($_tmp4, null, 0);?><?php if ($_smarty_tpl->tpl_vars['CURRENCY_SYMBOL_PLACEMENT']->value=='1.0$'){?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);?>
<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('currencySymbol');?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('currencySymbol');?>
<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);?>
<?php }?><?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value=='listprice'){?><?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value),null,true,true);?>
<?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType()=='picklist'){?><span <?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value)){?> class="picklist-color picklist-<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getId();?>
-<?php echo Vtiger_Util_Helper::convertSpaceToHyphen($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRaw($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value));?>
" <?php }?>> <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value;?>
 </span><?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType()=='multipicklist'){?><?php $_smarty_tpl->tpl_vars['MULTI_RAW_PICKLIST_VALUES'] = new Smarty_variable(explode('|##|',$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRaw($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value)), null, 0);?><?php $_smarty_tpl->tpl_vars['MULTI_PICKLIST_VALUES'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value), null, 0);?><?php  $_smarty_tpl->tpl_vars['MULTI_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MULTI_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['MULTI_PICKLIST_INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MULTI_RAW_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MULTI_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['MULTI_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['MULTI_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['MULTI_PICKLIST_INDEX']->value = $_smarty_tpl->tpl_vars['MULTI_PICKLIST_VALUE']->key;
?><span <?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value)){?> class="picklist-color picklist-<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getId();?>
-<?php echo Vtiger_Util_Helper::convertSpaceToHyphen(trim($_smarty_tpl->tpl_vars['MULTI_PICKLIST_VALUE']->value));?>
" <?php }?>> <?php echo trim($_smarty_tpl->tpl_vars['MULTI_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['MULTI_PICKLIST_INDEX']->value]);?>
 </span><?php } ?><?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName()=='qty_per_unit'){?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value;?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["ENTRY_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_tmp5), null, 0);?><a class="qtyForDisplay <?php if ($_smarty_tpl->tpl_vars['EDITED_VALUE']->value){?>hide<?php }?>"><?php echo $_smarty_tpl->tpl_vars['ENTRY_VALUE']->value;?>
</a><div class="<?php if (!$_smarty_tpl->tpl_vars['EDITED_VALUE']->value){?>hide<?php }?> qtyForEdit"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['COL_NUMBER']->value;?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['ROW_NUMBER']->value;?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["QTY_ELEMENT_NAME"] = new Smarty_variable((("quantity").($_tmp6)).($_tmp7), null, 0);?><input type="text" value="<?php if ($_smarty_tpl->tpl_vars['EDITED_VALUE']->value){?><?php echo $_smarty_tpl->tpl_vars['EDITED_VALUE']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['ENTRY_VALUE']->value;?>
<?php }?>" data-rule-positiveExcludingZero=true data-rule-positive=true name="<?php echo $_smarty_tpl->tpl_vars['QTY_ELEMENT_NAME']->value;?>
" class="form-control quantityTextBox" /></div><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);?>
<?php }?></td><?php } ?></tr><?php } ?></table></div><!--added this div for Temporarily --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value=='0'){?><div><div class="emptyRecordsDiv"><?php if ($_smarty_tpl->tpl_vars['IS_MODULE_DISABLED']->value=='true'){?><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATED_MODULE']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE']->value);?>
<?php echo vtranslate('LBL_MODULE_DISABLED',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['RELATED_MODULE']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE']->value);?>
 <?php echo vtranslate('LBL_FOUND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
.</div><?php }?></div><?php }?><?php if ($_smarty_tpl->tpl_vars['FIELDS_INFO']->value!=null){?><script type="text/javascript">var popup_uimeta = (function() {var fieldInfo = <?php echo $_smarty_tpl->tpl_vars['FIELDS_INFO']->value;?>
;return {field: {get: function(name, property) {if (name && property === undefined) {return fieldInfo[name];}if (name && property) {return fieldInfo[name][property]}},isMandatory: function(name) {if (fieldInfo[name]) {return fieldInfo[name].mandatory;}return false;},getType: function(name) {if (fieldInfo[name]) {return fieldInfo[name].type}return false;}},};})();</script><?php }?></div></div></div><?php }} ?>
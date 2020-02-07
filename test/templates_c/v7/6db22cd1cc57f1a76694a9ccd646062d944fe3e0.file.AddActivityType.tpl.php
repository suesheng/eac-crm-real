<?php /* Smarty version Smarty-3.1.7, created on 2019-06-18 07:48:42
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Calendar/AddActivityType.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13447794065d08975ac531d0-40309007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db22cd1cc57f1a76694a9ccd646062d944fe3e0' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Calendar/AddActivityType.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13447794065d08975ac531d0-40309007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'ADDVIEWS' => 0,
    'MODULE_NAME' => 0,
    'VIEWCONDITIONS' => 0,
    'CONDITION' => 0,
    'CONDITION_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d08975acb359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d08975acb359')) {function content_5d08975acb359($_smarty_tpl) {?>

<div class="modal-dialog modelContainer modal-content"><?php ob_start();?><?php echo vtranslate('LBL_ADD_CALENDAR_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><form class="form-horizontal"><input type="hidden" class="selectedType" value="" /><input type="hidden" class="selectedColor" value="" /><input type="hidden" class="editorMode" value="create" /><input type=hidden name="moduleDateFields" data-value='<?php echo json_encode($_smarty_tpl->tpl_vars['ADDVIEWS']->value,@JSON_HEX_APOS);?>
' /><div class="form-group"><label class="control-label fieldLabel col-sm-4"><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-sm-6"><select id="editModulesList" class="select2" name="modulesList" style="min-width: 250px;"><?php  $_smarty_tpl->tpl_vars['DATE_FIELDS_LIST'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DATE_FIELDS_LIST']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ADDVIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DATE_FIELDS_LIST']->key => $_smarty_tpl->tpl_vars['DATE_FIELDS_LIST']->value){
$_smarty_tpl->tpl_vars['DATE_FIELDS_LIST']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_NAME']->value = $_smarty_tpl->tpl_vars['DATE_FIELDS_LIST']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" data-viewmodule="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php } ?></select></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-4"><?php echo vtranslate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-sm-6"><select id="editFieldsList" class="select2" name="fieldsList" style="min-width: 250px;"><option value=" "><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div></div><div id="js-eventtype-condition" class="form-group hide"><label class="control-label fieldLabel col-sm-4"><?php echo vtranslate('LBL_SELECT_EVENT_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-sm-6"><select id="calendarviewconditions" class="select2" name="conditions" style="min-width: 250px;"><option value=""><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['CONDITION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CONDITION']->_loop = false;
 $_smarty_tpl->tpl_vars['CONDITION_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VIEWCONDITIONS']->value['Events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CONDITION']->key => $_smarty_tpl->tpl_vars['CONDITION']->value){
$_smarty_tpl->tpl_vars['CONDITION']->_loop = true;
 $_smarty_tpl->tpl_vars['CONDITION_NAME']->value = $_smarty_tpl->tpl_vars['CONDITION']->key;
?><option value='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['CONDITION']->value);?>
'><?php echo $_smarty_tpl->tpl_vars['CONDITION_NAME']->value;?>
</option><?php } ?></select></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-4"><?php echo vtranslate('LBL_SELECT_FIELDS_FOR_RANGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-sm-8"><input type="checkbox" name="rangeFields" />&nbsp;&nbsp;<select class="select2" disabled="disabled" name="sourceFieldsList" style="min-width: 150px;"><option value=" "><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select>&nbsp;<select class="select2" disabled="disabled" name="targetFieldsList" style="min-width: 150px;"><option value=" "><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-4"><?php echo vtranslate('LBL_SELECT_CALENDAR_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-sm-8"><p class="calendarColorPicker"></p></div></div></form></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2019-08-12 08:12:09
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Calendar/EditUserCalendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17146950285d511f59ed3262-24051124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa7e9693ce9d2ccff0bf20dacaad0d2784d8ac3c' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Calendar/EditUserCalendar.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17146950285d511f59ed3262-24051124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SHAREDUSERS_INFO' => 0,
    'CURRENTUSER_MODEL' => 0,
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'CURRENT_USER_ID' => 0,
    'SHAREDUSERS' => 0,
    'USER_ID' => 0,
    'USER_NAME' => 0,
    'SHAREDGROUPS' => 0,
    'GROUP_ID' => 0,
    'GROUP_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d511f5a01015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d511f5a01015')) {function content_5d511f5a01015($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['SHARED_USER_INFO'] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['CURRENT_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENTUSER_MODEL']->value->getId(), null, 0);?><div class="modal-dialog modelContainer modal-content"><?php ob_start();?><?php echo vtranslate('LBL_EDITING_CALENDAR_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><form class="form-horizontal"><input type="hidden" class="selectedType" value="" /><input type="hidden" class="selectedColor" value="" /><input type="hidden" class="editorMode" value="edit" /><div class="form-group editCalendarViewsList"><label class="control-label fieldLabel col-sm-4"><?php echo vtranslate('LBL_EDITING_CALENDAR_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-sm-6"><select class="select2" name="usersList" style="min-width: 250px;"><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"><?php echo vtranslate('LBL_MINE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHAREDUSERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['USER_ID']->value]['visible']!='0'){?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</option><?php }?><?php } ?><?php  $_smarty_tpl->tpl_vars['GROUP_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHAREDGROUPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_NAME']->key => $_smarty_tpl->tpl_vars['GROUP_NAME']->value){
$_smarty_tpl->tpl_vars['GROUP_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_ID']->value = $_smarty_tpl->tpl_vars['GROUP_NAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['GROUP_ID']->value]['visible']!='0'){?><option value="<?php echo $_smarty_tpl->tpl_vars['GROUP_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
</option><?php }?><?php } ?></select></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-4"><?php echo vtranslate('LBL_SELECT_CALENDAR_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-sm-8"><p class="calendarColorPicker"></p></div></div></form></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
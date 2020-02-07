<?php /* Smarty version Smarty-3.1.7, created on 2019-07-08 14:39:59
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Calendar/AddUserCalendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12370700085d2355bf6b2629-12503122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd17a2fbf8dd6b7440a628f6b8ad7ffd50b76f7cf' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Calendar/AddUserCalendar.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12370700085d2355bf6b2629-12503122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SHAREDUSERS_INFO' => 0,
    'CURRENTUSER_MODEL' => 0,
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'SHAREDUSERS' => 0,
    'USER_ID' => 0,
    'USER_NAME' => 0,
    'SHAREDGROUPS' => 0,
    'GROUP_ID' => 0,
    'GROUP_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d2355bf6d8d6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2355bf6d8d6')) {function content_5d2355bf6d8d6($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['SHARED_USER_INFO'] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['CURRENT_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENTUSER_MODEL']->value->getId(), null, 0);?><div class="modal-dialog modelContainer modal-content"><?php ob_start();?><?php echo vtranslate('LBL_EDITING_CALENDAR_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><form class="form-horizontal"><input type="hidden" class="selectedType" value="" /><input type="hidden" class="selectedColor" value="" /><input type="hidden" class="editorMode" value="create" /><div class="form-group addCalendarViewsList"><label class="control-label fieldLabel col-sm-4"><?php echo vtranslate('LBL_SELECT_USER_CALENDAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-sm-6"><select class="select2" name="usersList" style="min-width: 250px;"><?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHAREDUSERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['USER_ID']->value]['visible']=='0'){?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" data-calendar-group="false"><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</option><?php }?><?php } ?><?php  $_smarty_tpl->tpl_vars['GROUP_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHAREDGROUPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_NAME']->key => $_smarty_tpl->tpl_vars['GROUP_NAME']->value){
$_smarty_tpl->tpl_vars['GROUP_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_ID']->value = $_smarty_tpl->tpl_vars['GROUP_NAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['SHAREDUSERS_INFO']->value[$_smarty_tpl->tpl_vars['GROUP_ID']->value]['visible']=='0'){?><option value="<?php echo $_smarty_tpl->tpl_vars['GROUP_ID']->value;?>
" data-calendar-group="true"><?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
</option><?php }?><?php } ?></select></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-4"><?php echo vtranslate('LBL_SELECT_CALENDAR_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-sm-8"><p class="calendarColorPicker"></p></div></div></form></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 13:37:09
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Project/EditColor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14319393765cd2db8521f6b6-13107494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca9ef8104f7949c95bba454ab0b265274e7455cb' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Project/EditColor.tpl',
      1 => 1536167405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14319393765cd2db8521f6b6-13107494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'TASK_STATUS' => 0,
    'STATUS_NAME' => 0,
    'STATUS' => 0,
    'TASK_STATUS_COLOR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd2db85233f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd2db85233f6')) {function content_5cd2db85233f6($_smarty_tpl) {?>
<div class="modal-dialog modelContainer modal-lg"><div class="modal-content"><?php ob_start();?><?php echo vtranslate('LBL_EDIT_PROJECT_TASK_STATUS_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<form id="editColor" class="form-horizontal"><div class="modal-body"><input type="hidden" class="selectedColor" name="selectedColor" value="" /><div class="form-group"><label class="control-label col-lg-3"><?php echo vtranslate('LBL_SELECT_STATUS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls col-lg-9"><select id="editFieldsList" class="select2" name="taskstatus" style="min-width: 250px;"><?php  $_smarty_tpl->tpl_vars['STATUS_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['STATUS_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TASK_STATUS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['STATUS_NAME']->key => $_smarty_tpl->tpl_vars['STATUS_NAME']->value){
$_smarty_tpl->tpl_vars['STATUS_NAME']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['STATUS_NAME'] = new Smarty_variable(trim($_smarty_tpl->tpl_vars['STATUS_NAME']->value), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['STATUS_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['STATUS']->value==$_smarty_tpl->tpl_vars['STATUS_NAME']->value){?> selected <?php }?> data-color="<?php echo $_smarty_tpl->tpl_vars['TASK_STATUS_COLOR']->value[$_smarty_tpl->tpl_vars['STATUS_NAME']->value];?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['STATUS_NAME']->value,'ProjectTask');?>
</option><?php } ?></select></div></div><div class="form-group"><label class="control-label col-lg-3"><?php echo vtranslate('LBL_SELECT_PROJECT_TASK_STATUS_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls col-lg-9"><div class="colorPicker"></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div><?php }} ?>
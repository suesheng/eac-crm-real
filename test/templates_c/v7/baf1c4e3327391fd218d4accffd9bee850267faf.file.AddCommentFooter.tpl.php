<?php /* Smarty version Smarty-3.1.7, created on 2019-01-14 08:07:35
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/AddCommentFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14895772575c3c4347515506-98201587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baf1c4e3327391fd218d4accffd9bee850267faf' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/AddCommentFooter.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14895772575c3c4347515506-98201587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'MODULE_NAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c3c434751bc4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3c434751bc4')) {function content_5c3c434751bc4($_smarty_tpl) {?>
<div class="modal-footer"><div class="row-fluid"><div class="col-xs-6"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="col-xs-6"><div><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div><?php }} ?>
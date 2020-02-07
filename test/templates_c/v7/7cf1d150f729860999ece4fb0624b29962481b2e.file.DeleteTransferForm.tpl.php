<?php /* Smarty version Smarty-3.1.7, created on 2018-11-09 08:06:22
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Roles/DeleteTransferForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17529686025be53ffe8c0509-79788609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf1d150f729860999ece4fb0624b29962481b2e' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Roles/DeleteTransferForm.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17529686025be53ffe8c0509-79788609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'RECORD_MODEL' => 0,
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5be53ffe8cd61',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be53ffe8cd61')) {function content_5be53ffe8cd61($_smarty_tpl) {?>



<div class="modal-dialog modelContainer"><?php ob_start();?><?php echo vtranslate('LBL_DELETE_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable((($_tmp1).(" - ")).($_tmp2), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-content"><form class="form-horizontal" id="roleDeleteForm" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Delete" /><input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId();?>
" /><div name='massEditContent'><div class="modal-body"><div class="col-sm-5"><div class="control-label fieldLabel pull-right "><?php echo vtranslate('LBL_TRANSFER_TO_OTHER_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></div></div><div class="input-group fieldValue col-xs-6"><input id="transfer_record" name="transfer_record" type="hidden" value="" class="sourceField" data-rule-required="true"><input id="transfer_record_display" data-rule-required='true' name="transfer_record_display" type="text" class="inputElement" value=""><a href="#" id="clearRole" class="clearReferenceSelection hide cursorPointer" name="clearToEmailField"> X </a><span class="input-group-addon cursorPointer relatedPopup" data-field="transfer_record" data-action="popup" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getPopupWindowUrl();?>
&type=Transfer"><i class="fa fa-search"></i></span></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>



<?php }} ?>
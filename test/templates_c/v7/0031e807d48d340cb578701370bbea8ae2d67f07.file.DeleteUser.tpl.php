<?php /* Smarty version Smarty-3.1.7, created on 2018-11-08 07:07:49
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Users/DeleteUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7997837615be3e0c5950c05-06153037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0031e807d48d340cb578701370bbea8ae2d67f07' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Users/DeleteUser.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7997837615be3e0c5950c05-06153037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'USERID' => 0,
    'DELETE_USER_NAME' => 0,
    'OCCUPY_COMPLETE_WIDTH' => 0,
    'USER_LIST' => 0,
    'USER_ID' => 0,
    'USER_MODEL' => 0,
    'PERMANENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5be3e0c59ad41',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be3e0c59ad41')) {function content_5be3e0c59ad41($_smarty_tpl) {?>



<div class="modal-dialog modelContainer"><?php ob_start();?><?php echo vtranslate('Transfer records to user',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-content"><form class="form-horizontal" id="deleteUser" name="deleteUser" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
" /><div name='massEditContent'><div class="modal-body"><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('User to be deleted',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><label class="control fieldValue col-sm-5" style="padding-top: 6PX;"><?php echo $_smarty_tpl->tpl_vars['DELETE_USER_NAME']->value;?>
</label></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('Transfer records to user',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-xs-6"><select class="select2 <?php if ($_smarty_tpl->tpl_vars['OCCUPY_COMPLETE_WIDTH']->value){?> row-fluid <?php }?>" name="tranfer_owner_id" data-validation-engine="validate[ required]" ><?php  $_smarty_tpl->tpl_vars['USER_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['USER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_MODEL']->key => $_smarty_tpl->tpl_vars['USER_MODEL']->value){
$_smarty_tpl->tpl_vars['USER_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_MODEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</option><?php } ?></select></div></div><?php if (!$_smarty_tpl->tpl_vars['PERMANENT']->value){?><div class="form-group"><label class="control-label fieldLabel col-sm-4"></label><div class="controls fieldValue col-sm-8"><input type="checkbox" name="deleteUserPermanent" value="1" >&nbsp;&nbsp;<?php echo vtranslate('LBL_DELETE_USER_PERMANENTLY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<i class="fa fa-question-circle" data-toggle="tooltip"  data-placement="right" title="<?php echo vtranslate('LBL_DELETE_USER_PERMANENTLY_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></div></div><?php }?></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>

<?php }} ?>
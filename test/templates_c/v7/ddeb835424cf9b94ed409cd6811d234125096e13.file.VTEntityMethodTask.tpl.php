<?php /* Smarty version Smarty-3.1.7, created on 2018-11-20 11:41:19
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/Tasks/VTEntityMethodTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17530215515bf3f2df5d1554-68969202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddeb835424cf9b94ed409cd6811d234125096e13' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/Tasks/VTEntityMethodTask.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17530215515bf3f2df5d1554-68969202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'WORKFLOW_MODEL' => 0,
    'ENTITY_METHODS' => 0,
    'TASK_OBJECT' => 0,
    'METHOD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bf3f2df5e1b0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf3f2df5e1b0')) {function content_5bf3f2df5e1b0($_smarty_tpl) {?>
<div class="row form-group"><div class="col-sm-6 col-xs-6"><div class="row"><div class="col-sm-3 col-xs-3"><?php echo vtranslate('LBL_METHOD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 :</div><div class="col-sm-8 col-xs-8"><?php $_smarty_tpl->tpl_vars['ENTITY_METHODS'] = new Smarty_variable($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getEntityMethods(), null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['ENTITY_METHODS']->value)){?><div class="alert alert-info"><?php echo vtranslate('LBL_NO_METHOD_IS_AVAILABLE_FOR_THIS_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }else{ ?><select name="methodName" class="select2"><?php  $_smarty_tpl->tpl_vars['METHOD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['METHOD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_METHODS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['METHOD']->key => $_smarty_tpl->tpl_vars['METHOD']->value){
$_smarty_tpl->tpl_vars['METHOD']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->methodName==$_smarty_tpl->tpl_vars['METHOD']->value){?>selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['METHOD']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select><?php }?></div></div></div></div>	
<?php }} ?>
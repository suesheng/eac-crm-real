<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 10:37:03
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ReminderDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18699511865cc03c4f961728-81740744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35881e28ace42756bd9eced88a5e008ea26f55da' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ReminderDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18699511865cc03c4f961728-81740744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
    'REMINDER_VALUES' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc03c4f96b85',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc03c4f96b85')) {function content_5cc03c4f96b85($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['REMINDER_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId()), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value==''){?>
    <?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['REMINDER_VALUES']->value;?>
<?php echo vtranslate('LBL_BEFORE_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }?><?php }} ?>
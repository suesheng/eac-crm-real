<?php /* Smarty version Smarty-3.1.7, created on 2018-10-23 12:33:53
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ReminderDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16850768635bcf1531e73c33-29046477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f2381e238e173228898e6154e29ac93ac8ea69' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ReminderDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16850768635bcf1531e73c33-29046477',
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
  'unifunc' => 'content_5bcf1531e809f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcf1531e809f')) {function content_5bcf1531e809f($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['REMINDER_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId()), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value==''){?>
    <?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['REMINDER_VALUES']->value;?>
<?php echo vtranslate('LBL_BEFORE_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }?><?php }} ?>
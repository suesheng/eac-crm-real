<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 12:53:32
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6328481885cc05c4c1f7159-30315095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e915eedf7e8720c8d957811bcd5a3720c0b6ab7c' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6328481885cc05c4c1f7159-30315095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc05c4c1fc74',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc05c4c1fc74')) {function content_5cc05c4c1fc74($_smarty_tpl) {?>


<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>


<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>
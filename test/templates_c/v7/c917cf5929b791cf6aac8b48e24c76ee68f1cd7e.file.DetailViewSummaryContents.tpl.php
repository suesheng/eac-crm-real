<?php /* Smarty version Smarty-3.1.7, created on 2018-10-31 07:00:02
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Invoice/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12842539375bd952f2169b28-64959276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c917cf5929b791cf6aac8b48e24c76ee68f1cd7e' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Invoice/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12842539375bd952f2169b28-64959276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd952f2170d5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd952f2170d5')) {function content_5bd952f2170d5($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
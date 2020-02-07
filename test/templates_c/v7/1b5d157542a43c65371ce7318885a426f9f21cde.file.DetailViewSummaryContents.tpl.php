<?php /* Smarty version Smarty-3.1.7, created on 2019-04-22 10:06:37
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Invoice/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:668265515cbd922dd1dd01-08617668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b5d157542a43c65371ce7318885a426f9f21cde' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Invoice/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '668265515cbd922dd1dd01-08617668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbd922dd215e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbd922dd215e')) {function content_5cbd922dd215e($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
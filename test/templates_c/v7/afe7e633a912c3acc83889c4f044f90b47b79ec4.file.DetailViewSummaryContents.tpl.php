<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 13:37:20
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Quotes/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17016467275cc1b8100456c5-48327624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe7e633a912c3acc83889c4f044f90b47b79ec4' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Quotes/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17016467275cc1b8100456c5-48327624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1b81004963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1b81004963')) {function content_5cc1b81004963($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
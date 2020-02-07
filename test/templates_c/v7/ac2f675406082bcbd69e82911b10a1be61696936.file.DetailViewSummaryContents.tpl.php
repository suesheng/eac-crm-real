<?php /* Smarty version Smarty-3.1.7, created on 2018-10-31 07:50:34
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/SalesOrder/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1279055505bd95ecaf0aa69-76099706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac2f675406082bcbd69e82911b10a1be61696936' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/SalesOrder/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1279055505bd95ecaf0aa69-76099706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd95ecaf0dce',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd95ecaf0dce')) {function content_5bd95ecaf0dce($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
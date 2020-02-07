<?php /* Smarty version Smarty-3.1.7, created on 2018-11-20 12:29:59
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6213048215bf3fe4791ec68-36288612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a52e0d69dc0b7d4c14dd1763d2a6dc179865970' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6213048215bf3fe4791ec68-36288612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bf3fe47921dc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf3fe47921dc')) {function content_5bf3fe47921dc($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
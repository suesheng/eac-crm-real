<?php /* Smarty version Smarty-3.1.7, created on 2018-11-20 12:29:59
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12128464855bf3fe47910823-19386663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0e6c1c7a9bb0d67b58c98893ba263fcc06f5281' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12128464855bf3fe47910823-19386663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bf3fe479144d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf3fe479144d')) {function content_5bf3fe479144d($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
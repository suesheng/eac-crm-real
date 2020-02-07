<?php /* Smarty version Smarty-3.1.7, created on 2018-10-31 07:50:34
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/SalesOrder/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11096840975bd95ecaefe936-86440571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4f8f4ceeb3b60ca31f61d719a1bdb5627165b82' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/SalesOrder/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11096840975bd95ecaefe936-86440571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd95ecaf0182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd95ecaf0182')) {function content_5bd95ecaf0182($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
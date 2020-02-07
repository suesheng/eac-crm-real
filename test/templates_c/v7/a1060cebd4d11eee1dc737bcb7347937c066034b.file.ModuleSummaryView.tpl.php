<?php /* Smarty version Smarty-3.1.7, created on 2018-10-31 07:00:02
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Invoice/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1954310375bd952f214ff72-08073146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1060cebd4d11eee1dc737bcb7347937c066034b' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Invoice/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1954310375bd952f214ff72-08073146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd952f2157ad',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd952f2157ad')) {function content_5bd952f2157ad($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
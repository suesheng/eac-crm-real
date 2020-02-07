<?php /* Smarty version Smarty-3.1.7, created on 2019-04-22 13:25:18
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Project/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11670902085cbdc0be423288-35186482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bf5bd9b4ab2aa222ecf56030dbcf875062f08f9' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Project/ModuleSummaryView.tpl',
      1 => 1536167405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11670902085cbdc0be423288-35186482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbdc0be428e4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbdc0be428e4')) {function content_5cbdc0be428e4($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>
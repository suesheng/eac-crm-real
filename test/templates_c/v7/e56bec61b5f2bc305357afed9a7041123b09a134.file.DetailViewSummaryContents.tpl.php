<?php /* Smarty version Smarty-3.1.7, created on 2019-04-22 13:25:18
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Project/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1389146265cbdc0be449ce3-26332140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e56bec61b5f2bc305357afed9a7041123b09a134' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Project/DetailViewSummaryContents.tpl',
      1 => 1536167405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1389146265cbdc0be449ce3-26332140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbdc0be44ea0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbdc0be44ea0')) {function content_5cbdc0be44ea0($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
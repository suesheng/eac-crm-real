<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 11:30:29
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Project/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12612297825bcdb4d5927317-69672489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8cbe04559718199f8a49052c7208dab3af86c51' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Project/DetailViewSummaryContents.tpl',
      1 => 1536167405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12612297825bcdb4d5927317-69672489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdb4d592aef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdb4d592aef')) {function content_5bcdb4d592aef($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
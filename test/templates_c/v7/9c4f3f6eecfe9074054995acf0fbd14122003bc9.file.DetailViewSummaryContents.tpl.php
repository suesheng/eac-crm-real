<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 13:34:04
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Quotes/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8406737885bcdd1cc567b82-09706313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c4f3f6eecfe9074054995acf0fbd14122003bc9' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Quotes/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8406737885bcdd1cc567b82-09706313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdd1cc56c48',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdd1cc56c48')) {function content_5bcdd1cc56c48($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
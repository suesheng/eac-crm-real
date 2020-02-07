<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 13:15:09
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3930233725bcdcd5d97b2b2-32770506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1526aa746dcc1819e17a0e33e8048a4a644e06b0' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3930233725bcdcd5d97b2b2-32770506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdcd5d97f76',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdcd5d97f76')) {function content_5bcdcd5d97f76($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
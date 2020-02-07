<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 12:50:41
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Accounts/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7990502825cc05ba16eb769-15010686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15340f61aa56545c833935bc02da2134658cf4a9' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Accounts/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7990502825cc05ba16eb769-15010686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc05ba16efbe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc05ba16efbe')) {function content_5cc05ba16efbe($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>
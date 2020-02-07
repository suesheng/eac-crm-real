<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 10:56:09
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Accounts/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11953957915bcdacc92a5103-04894526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d522a2579fe4774d91ebaaf80bb52c9c67764f' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Accounts/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11953957915bcdacc92a5103-04894526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdacc92a9a6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdacc92a9a6')) {function content_5bcdacc92a9a6($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>
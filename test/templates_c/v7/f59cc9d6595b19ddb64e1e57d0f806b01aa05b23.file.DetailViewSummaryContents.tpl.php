<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 14:39:51
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/SalesOrder/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5037426855cd2ea37bf0404-04924686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f59cc9d6595b19ddb64e1e57d0f806b01aa05b23' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/SalesOrder/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5037426855cd2ea37bf0404-04924686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd2ea37bf3f8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd2ea37bf3f8')) {function content_5cd2ea37bf3f8($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
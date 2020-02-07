<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 14:39:51
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/SalesOrder/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17545925255cd2ea37bdebd2-26181431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9948db56051218d3b85c4968606b55b2a2e7b3' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/SalesOrder/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17545925255cd2ea37bdebd2-26181431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd2ea37be416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd2ea37be416')) {function content_5cd2ea37be416($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2018-10-31 06:57:49
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Contacts/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12210740205bd9526d4496c8-19322856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21e782cd978b42d6115fe873470be2d171763ece' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Contacts/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12210740205bd9526d4496c8-19322856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd9526d44d12',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd9526d44d12')) {function content_5bd9526d44d12($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>
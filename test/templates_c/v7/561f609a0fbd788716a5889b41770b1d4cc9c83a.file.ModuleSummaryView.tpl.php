<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 12:50:41
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Accounts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3056561375cc05ba16d44f4-63054116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '561f609a0fbd788716a5889b41770b1d4cc9c83a' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Accounts/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3056561375cc05ba16d44f4-63054116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc05ba16d9fd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc05ba16d9fd')) {function content_5cc05ba16d9fd($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
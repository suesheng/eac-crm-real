<?php /* Smarty version Smarty-3.1.7, created on 2019-05-07 08:58:29
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18817174745cd148b57b6397-28832338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac2152ecf8a08fa9689281008845cebc06b2e19e' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewPreProcess.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18817174745cd148b57b6397-28832338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd148b57c10b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd148b57c10b')) {function content_5cd148b57c10b($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("CalendarDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
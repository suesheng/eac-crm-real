<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 12:18:19
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Users/PreferenceDetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11448452185cc0540b02cc00-37562676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560acf205600f4138bbf5cd94cc56af75e64c2c8' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Users/PreferenceDetailViewPreProcess.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11448452185cc0540b02cc00-37562676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc0540b0374b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc0540b0374b')) {function content_5cc0540b0374b($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class=""><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PreferenceDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
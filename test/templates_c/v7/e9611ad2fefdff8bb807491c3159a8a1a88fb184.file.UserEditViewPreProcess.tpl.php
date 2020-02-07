<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 13:44:10
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Users/UserEditViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17817809285cc1b9aa0405d1-65082943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9611ad2fefdff8bb807491c3159a8a1a88fb184' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Users/UserEditViewPreProcess.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17817809285cc1b9aa0405d1-65082943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1b9aa046b5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1b9aa046b5')) {function content_5cc1b9aa046b5($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['QUALIFIED_MODULE'] = new Smarty_variable('Settings:User', null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><?php }} ?>
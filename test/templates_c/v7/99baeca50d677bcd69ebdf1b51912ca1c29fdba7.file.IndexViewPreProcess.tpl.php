<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 16:06:38
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7593817185bcdf58e2d15d0-77608561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99baeca50d677bcd69ebdf1b51912ca1c29fdba7' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/IndexViewPreProcess.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7593817185bcdf58e2d15d0-77608561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdf58e2dc26',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdf58e2dc26')) {function content_5bcdf58e2dc26($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="container-fluid app-nav"><div class="row"><?php echo $_smarty_tpl->getSubTemplate ("modules/Reports/partials/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></nav><div class="clearfix main-container"><div><div class="editViewPageDiv viewContent"><div class="reports-content-area"><?php }} ?>
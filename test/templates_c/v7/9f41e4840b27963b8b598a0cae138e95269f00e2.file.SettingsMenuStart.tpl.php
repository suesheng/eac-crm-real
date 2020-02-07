<?php /* Smarty version Smarty-3.1.7, created on 2019-06-04 09:19:43
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/SettingsMenuStart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17553834045cf637af7b91b7-85839745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f41e4840b27963b8b598a0cae138e95269f00e2' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/SettingsMenuStart.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17553834045cf637af7b91b7-85839745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cf637af7c39a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf637af7c39a')) {function content_5cf637af7c39a($_smarty_tpl) {?>


<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
</nav>    

<div class="main-container clearfix">
	<div class=" ExtensionscontentsDiv contentsDiv"><?php }} ?>
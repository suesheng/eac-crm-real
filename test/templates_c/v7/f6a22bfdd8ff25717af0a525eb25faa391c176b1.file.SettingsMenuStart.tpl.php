<?php /* Smarty version Smarty-3.1.7, created on 2018-09-05 17:11:04
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/SettingsMenuStart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2888065475b900e28e71c53-79091410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6a22bfdd8ff25717af0a525eb25faa391c176b1' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/SettingsMenuStart.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2888065475b900e28e71c53-79091410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b900e28e7872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b900e28e7872')) {function content_5b900e28e7872($_smarty_tpl) {?>


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
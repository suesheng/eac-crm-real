<?php /* Smarty version Smarty-3.1.7, created on 2019-04-26 08:57:37
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/EmailTemplates/DetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1588323425cc2c80130b6e5-31466819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc532b043ed74d8d1e2feee154e91a259c05babf' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/EmailTemplates/DetailViewPreProcess.tpl',
      1 => 1536167403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1588323425cc2c80130b6e5-31466819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc2c80131a2b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc2c80131a2b')) {function content_5cc2c80131a2b($_smarty_tpl) {?>


<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
</nav>
<div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
	<div class="data">
	</div>
	<div class="modal-dialog">
	</div>
</div>
<div class="container-fluid main-container">
	<div class="row">
		<div id="modnavigator" class="module-nav detailViewModNavigator clearfix">
			<div class="hidden-xs hidden-sm mod-switcher-container">
				<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
		<div class="detailViewContainer viewContent clearfix">
			<div class="content-area container-fluid">
<?php }} ?>
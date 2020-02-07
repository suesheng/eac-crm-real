<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 10:37:03
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Calendar/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:625353695cc03c4f84e523-18920970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c098ccea07a02d769ffb3479ed1137ddc2c94be' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Calendar/partials/SidebarHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '625353695cc03c4f84e523-18920970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc03c4f85d36',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc03c4f85d36')) {function content_5cc03c4f85d36($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
	<div class="row" title="<?php echo strtoupper(vtranslate("LBL_CALENDAR",$_smarty_tpl->tpl_vars['MODULE']->value));?>
">
		<span class="app-indicator-icon fa fa-calendar"></span>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
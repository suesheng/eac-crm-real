<?php /* Smarty version Smarty-3.1.7, created on 2019-04-22 10:06:37
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8214081235cbd922da3fbd3-24396859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a96f0765cab322ccc05d871f905a3533e9c5314' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/partials/SidebarHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8214081235cbd922da3fbd3-24396859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
    'APP_IMAGE_MAP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbd922da4a9c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbd922da4a9c')) {function content_5cbd922da4a9c($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>

<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
	<div class="row" title="<?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Home'||!$_smarty_tpl->tpl_vars['MODULE']->value){?> <?php echo vtranslate('LBL_DASHBOARD');?>
 <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
<?php }?>">
		<span class="app-indicator-icon fa <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Home'||!$_smarty_tpl->tpl_vars['MODULE']->value){?>fa-dashboard<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['APP_IMAGE_MAP']->value[$_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value];?>
<?php }?>"></span>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
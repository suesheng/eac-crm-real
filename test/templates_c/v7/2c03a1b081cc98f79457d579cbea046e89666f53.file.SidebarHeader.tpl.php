<?php /* Smarty version Smarty-3.1.7, created on 2018-10-23 13:11:24
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Documents/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13021206615bcf1dfce4b5a4-27075296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c03a1b081cc98f79457d579cbea046e89666f53' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Documents/partials/SidebarHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13021206615bcf1dfce4b5a4-27075296',
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
  'unifunc' => 'content_5bcf1dfce52e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcf1dfce52e3')) {function content_5bcf1dfce52e3($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
 moduleIcon">
    <div class="row" title="<?php echo vtranslate("Documents",$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
		<span class="app-indicator-icon fa vicon-documents"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2019-06-04 09:19:43
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9239816725cf637af7ce1f5-42507362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb48c738aa17201947a0e08dd5152e3eebdb3d03' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/partials/SidebarHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9239816725cf637af7ce1f5-42507362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cf637af7d3d9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf637af7d3d9')) {function content_5cf637af7d3d9($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container extensionstore app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"> 
    <div class="row" title="<?php echo vtranslate('LBL_EXTENSION_STORE','Settings:ExtensionStore');?>
"> 
        <span class="app-indicator-icon cursorPointer fa fa-shopping-cart"></span> 
    </div>
</div>
  
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
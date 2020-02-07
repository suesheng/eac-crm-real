<?php /* Smarty version Smarty-3.1.7, created on 2018-09-05 17:11:04
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15491561145b900e28e86c00-68954768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee7513d974644b39fd3f0351fbe34c92fdcb6873' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/partials/SidebarHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15491561145b900e28e86c00-68954768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b900e28e8ab9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b900e28e8ab9')) {function content_5b900e28e8ab9($_smarty_tpl) {?>

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
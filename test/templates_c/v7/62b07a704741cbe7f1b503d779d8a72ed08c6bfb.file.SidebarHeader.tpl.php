<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 12:18:19
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3410704055cc0540b04f001-74348561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62b07a704741cbe7f1b503d779d8a72ed08c6bfb' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/SidebarHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3410704055cc0540b04f001-74348561',
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
  'unifunc' => 'content_5cc0540b054ba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc0540b054ba')) {function content_5cc0540b054ba($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo vtranslate("LBL_SETTINGS",$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
        <span class="app-indicator-icon fa fa-cog"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
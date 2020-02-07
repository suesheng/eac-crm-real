<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 16:06:25
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14191918185bcdf58159dca6-17966364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b53bdabdcb9c7f1b3b40abe2c8f7e673d369ccc9' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/partials/SidebarHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14191918185bcdf58159dca6-17966364',
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
  'unifunc' => 'content_5bcdf5815a308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdf5815a308')) {function content_5bcdf5815a308($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>

<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
">
        <span class="app-indicator-icon fa fa-bar-chart"></span>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
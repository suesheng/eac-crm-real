<?php /* Smarty version Smarty-3.1.7, created on 2018-12-17 09:12:58
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/MailManager/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15495851595c17689ac726a1-06394894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d893a9dd6dd243d2abb052445a14b3b4c286677' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/MailManager/partials/SidebarHeader.tpl',
      1 => 1536167399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15495851595c17689ac726a1-06394894',
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
  'unifunc' => 'content_5c17689ac79cb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c17689ac79cb')) {function content_5c17689ac79cb($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
">
        <span class="app-indicator-icon fa vicon-mailmanager"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
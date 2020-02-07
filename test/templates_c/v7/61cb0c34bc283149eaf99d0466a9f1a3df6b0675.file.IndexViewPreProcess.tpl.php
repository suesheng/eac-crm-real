<?php /* Smarty version Smarty-3.1.7, created on 2018-10-31 06:57:17
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Portal/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10253304615bd9524dcf1ab0-76364245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61cb0c34bc283149eaf99d0466a9f1a3df6b0675' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Portal/IndexViewPreProcess.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10253304615bd9524dcf1ab0-76364245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd9524dcfeda',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd9524dcfeda')) {function content_5bd9524dcfeda($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="container-fluid app-nav"><div class="row"><?php echo $_smarty_tpl->getSubTemplate ("modules/Portal/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></nav><div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'><div class="data"></div><div class="modal-dialog"></div></div><div class="main-container main-container-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><div id="modnavigator" class="module-nav"><div class="hidden-xs hidden-sm mod-switcher-container"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><div class="listViewPageDiv content-area full-width" id="listViewContent"><?php }} ?>
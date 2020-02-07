<?php /* Smarty version Smarty-3.1.7, created on 2019-07-03 14:16:47
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Portal/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5972717865d1cb8cfa0b859-16065128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c12b59dc445839e1af31c1a748a5f3c05f4376bf' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Portal/IndexViewPreProcess.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5972717865d1cb8cfa0b859-16065128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d1cb8cfa18b4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d1cb8cfa18b4')) {function content_5d1cb8cfa18b4($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="container-fluid app-nav"><div class="row"><?php echo $_smarty_tpl->getSubTemplate ("modules/Portal/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></nav><div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'><div class="data"></div><div class="modal-dialog"></div></div><div class="main-container main-container-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><div id="modnavigator" class="module-nav"><div class="hidden-xs hidden-sm mod-switcher-container"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><div class="listViewPageDiv content-area full-width" id="listViewContent"><?php }} ?>
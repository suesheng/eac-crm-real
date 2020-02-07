<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 14:01:51
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/MailManager/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12662699815cc1bdcf606bf3-76528543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7814e88d6db96fc8873ec3e70752eca5c965d7ca' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/MailManager/IndexViewPreProcess.tpl',
      1 => 1536167399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12662699815cc1bdcf606bf3-76528543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1bdcf60ee3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1bdcf60ee3')) {function content_5cc1bdcf60ee3($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate ("modules/MailManager/partials/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
</nav>
    <div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
    </div>
<div class="main-container main-container-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
">
<div id="modnavigator" class="module-nav">
    <div class="hidden-xs hidden-sm mod-switcher-container">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>

<div class="listViewPageDiv content-area" id="listViewContent">
<?php }} ?>
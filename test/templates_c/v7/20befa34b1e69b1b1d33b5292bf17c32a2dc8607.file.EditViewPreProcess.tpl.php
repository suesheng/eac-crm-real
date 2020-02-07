<?php /* Smarty version Smarty-3.1.7, created on 2018-11-20 12:50:59
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PDFMaker/EditViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18565277795bf40333d52012-25931922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20befa34b1e69b1b1d33b5292bf17c32a2dc8607' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PDFMaker/EditViewPreProcess.tpl',
      1 => 1542712691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18565277795bf40333d52012-25931922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bf40333d5d9d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf40333d5d9d')) {function content_5bf40333d5d9d($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<?php }} ?>
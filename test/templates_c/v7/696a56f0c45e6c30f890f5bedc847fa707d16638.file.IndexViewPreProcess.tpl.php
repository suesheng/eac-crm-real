<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 12:49:33
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12161143535cc05b5d503580-62961805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '696a56f0c45e6c30f890f5bedc847fa707d16638' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/IndexViewPreProcess.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12161143535cc05b5d503580-62961805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc05b5d50e9c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc05b5d50e9c')) {function content_5cc05b5d50e9c($_smarty_tpl) {?>



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
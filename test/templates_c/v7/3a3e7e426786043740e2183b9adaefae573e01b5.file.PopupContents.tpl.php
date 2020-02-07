<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 13:36:40
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Inventory/PopupContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5150836955cc1b7e8b3efe6-42259991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a3e7e426786043740e2183b9adaefae573e01b5' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Inventory/PopupContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5150836955cc1b7e8b3efe6-42259991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1b7e8b488d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1b7e8b488d')) {function content_5cc1b7e8b488d($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PicklistColorMap.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupNavigation.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id='popupContentsDiv'><div class="row"><div class="col-md-12"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PopupEntries.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div>

<?php }} ?>
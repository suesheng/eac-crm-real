<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 13:25:36
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Inventory/PopupContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21135945685bcdcfd01b5684-39192230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fc7db25cc6afd1aecf0da524c97d68275d3f38a' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Inventory/PopupContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21135945685bcdcfd01b5684-39192230',
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
  'unifunc' => 'content_5bcdcfd01c202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdcfd01c202')) {function content_5bcdcfd01c202($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PicklistColorMap.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupNavigation.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id='popupContentsDiv'><div class="row"><div class="col-md-12"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PopupEntries.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div>

<?php }} ?>
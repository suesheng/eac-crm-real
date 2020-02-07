<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 13:39:09
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Inventory/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14560415445bcdd2fd78fbf5-10619803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c54eac683b1d7ee89fa7dff3afc26ea4dbc9d21' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Inventory/DetailViewFullContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14560415445bcdd2fd78fbf5-10619803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdd2fd79516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdd2fd79516')) {function content_5bcdd2fd79516($_smarty_tpl) {?>
<form id="detailView" method="POST">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LineItemsDetail.tpl','Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</form>
<?php }} ?>
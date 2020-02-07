<?php /* Smarty version Smarty-3.1.7, created on 2019-04-22 10:06:37
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15835640095cbd922dae9188-65836158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbdcf46fb2f83cd987bd4bbc4ee4c975d6f74d3c' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15835640095cbd922dae9188-65836158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbd922daee71',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbd922daee71')) {function content_5cbd922daee71($_smarty_tpl) {?>
<div class=" detailview-header-block"><div class="detailview-header"><div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }} ?>
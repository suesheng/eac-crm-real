<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 14:10:09
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Reports/EditHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18011976745cd2e34170d1c7-88230112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df9459c603a34ff2eb054e985501c6cff2fee885' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Reports/EditHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18011976745cd2e34170d1c7-88230112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LABELS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd2e34171ad1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd2e34171ad1')) {function content_5cd2e34171ad1($_smarty_tpl) {?>
<div class="editContainer" style="padding-left: 2%;padding-right: 2%"><div class="row"><?php $_smarty_tpl->tpl_vars['LABELS'] = new Smarty_variable(array("step1"=>"LBL_REPORT_DETAILS","step2"=>"LBL_SELECT_COLUMNS","step3"=>"LBL_FILTERS"), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BreadCrumbs.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ACTIVESTEP'=>1,'BREADCRUMB_LABELS'=>$_smarty_tpl->tpl_vars['LABELS']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0);?>
</div><div class="clearfix"></div><?php }} ?>
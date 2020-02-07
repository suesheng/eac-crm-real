<?php /* Smarty version Smarty-3.1.7, created on 2019-01-31 09:15:16
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/EditChartHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7018625595c52bca42099b3-50136655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a53341afe2162c862997a06717b7e33062c3131' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/EditChartHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7018625595c52bca42099b3-50136655',
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
  'unifunc' => 'content_5c52bca4211a6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c52bca4211a6')) {function content_5c52bca4211a6($_smarty_tpl) {?>
<div class="editContainer" style="padding-left: 2%;padding-right: 2%"><div class="row"><?php $_smarty_tpl->tpl_vars['LABELS'] = new Smarty_variable(array("step1"=>"LBL_REPORT_DETAILS","step2"=>"LBL_FILTERS","step3"=>"LBL_SELECT_CHART"), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BreadCrumbs.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ACTIVESTEP'=>1,'BREADCRUMB_LABELS'=>$_smarty_tpl->tpl_vars['LABELS']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0);?>
</div><div class="clearfix"></div><?php }} ?>
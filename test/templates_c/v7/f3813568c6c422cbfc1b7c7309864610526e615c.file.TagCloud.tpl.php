<?php /* Smarty version Smarty-3.1.7, created on 2019-09-25 08:34:03
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/TagCloud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6577744805d8b267b2da564-63240346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3813568c6c422cbfc1b7c7309864610526e615c' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/TagCloud.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6577744805d8b267b2da564-63240346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d8b267b3b0a7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8b267b3b0a7')) {function content_5d8b267b3b0a7($_smarty_tpl) {?>
<div class="dashboardWidgetHeader"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="dashboardWidgetContent" style='padding:5px'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/TagCloudContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="widgeticons dashBoardWidgetFooter"><div class="footerIcons pull-right"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div>	 <?php }} ?>
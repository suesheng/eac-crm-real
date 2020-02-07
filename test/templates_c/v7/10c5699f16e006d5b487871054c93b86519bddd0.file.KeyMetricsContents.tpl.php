<?php /* Smarty version Smarty-3.1.7, created on 2018-11-09 07:40:49
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/KeyMetricsContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20262446975be53a01ef21f6-12316729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c5699f16e006d5b487871054c93b86519bddd0' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/KeyMetricsContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20262446975be53a01ef21f6-12316729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'KEYMETRICS' => 0,
    'KEYMETRIC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5be53a01ef945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be53a01ef945')) {function content_5be53a01ef945($_smarty_tpl) {?>
<div><?php  $_smarty_tpl->tpl_vars['KEYMETRIC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['KEYMETRIC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['KEYMETRICS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['KEYMETRIC']->key => $_smarty_tpl->tpl_vars['KEYMETRIC']->value){
$_smarty_tpl->tpl_vars['KEYMETRIC']->_loop = true;
?><div style="padding-bottom:6px;"><span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['KEYMETRIC']->value['count'];?>
</span><a href="?module=<?php echo $_smarty_tpl->tpl_vars['KEYMETRIC']->value['module'];?>
&view=List&viewname=<?php echo $_smarty_tpl->tpl_vars['KEYMETRIC']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['KEYMETRIC']->value['name'];?>
</a></div><?php } ?></div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 10:34:45
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/KeyMetricsContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11285050625cc03bc521dce7-63911141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '763421faf20c7bfd56bb780d0d667fc73cd1fd98' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/KeyMetricsContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11285050625cc03bc521dce7-63911141',
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
  'unifunc' => 'content_5cc03bc52235a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc03bc52235a')) {function content_5cc03bc52235a($_smarty_tpl) {?>
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
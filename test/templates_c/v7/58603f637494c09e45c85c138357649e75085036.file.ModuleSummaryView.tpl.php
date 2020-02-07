<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 11:30:29
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Project/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14753929855bcdb4d590cce9-83401398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58603f637494c09e45c85c138357649e75085036' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Project/ModuleSummaryView.tpl',
      1 => 1536167405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14753929855bcdb4d590cce9-83401398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdb4d591588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdb4d591588')) {function content_5bcdb4d591588($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>
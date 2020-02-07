<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 13:15:09
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/HelpDesk/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6522612515bcdcd5d953dd5-91293653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e06d1d2077d1853a73d8111b7b3381f035fa368c' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/HelpDesk/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6522612515bcdcd5d953dd5-91293653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdcd5d9583b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdcd5d9583b')) {function content_5bcdcd5d9583b($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 13:34:04
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Quotes/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18786903835bcdd1cc552787-11889431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b5a4bb0c91e58de33f7d2025476453af41e526c' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Quotes/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18786903835bcdd1cc552787-11889431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdd1cc556f2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdd1cc556f2')) {function content_5bcdd1cc556f2($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
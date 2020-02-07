<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 12:53:32
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Contacts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17505689205cc05c4c1ed2f3-45037969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b3b9215799e3ce7df0f6614bb863ca67b626b62' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Contacts/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17505689205cc05c4c1ed2f3-45037969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc05c4c1f225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc05c4c1f225')) {function content_5cc05c4c1f225($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
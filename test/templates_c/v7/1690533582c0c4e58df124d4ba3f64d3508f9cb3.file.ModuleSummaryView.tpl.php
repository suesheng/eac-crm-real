<?php /* Smarty version Smarty-3.1.7, created on 2018-10-31 06:57:49
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Contacts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6098015775bd9526d42b859-94750979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1690533582c0c4e58df124d4ba3f64d3508f9cb3' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Contacts/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6098015775bd9526d42b859-94750979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd9526d42ff2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd9526d42ff2')) {function content_5bd9526d42ff2($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
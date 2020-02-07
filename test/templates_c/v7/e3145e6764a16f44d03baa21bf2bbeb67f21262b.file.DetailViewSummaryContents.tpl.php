<?php /* Smarty version Smarty-3.1.7, created on 2018-10-24 14:10:06
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Potentials/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11282242165bd07d3ee9aff2-38627011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3145e6764a16f44d03baa21bf2bbeb67f21262b' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Potentials/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11282242165bd07d3ee9aff2-38627011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd07d3ee9f0b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd07d3ee9f0b')) {function content_5bd07d3ee9f0b($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>
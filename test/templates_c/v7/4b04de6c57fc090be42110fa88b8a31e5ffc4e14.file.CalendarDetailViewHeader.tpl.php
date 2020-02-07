<?php /* Smarty version Smarty-3.1.7, created on 2019-05-07 08:58:29
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18404875255cd148b57e6070-51490243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b04de6c57fc090be42110fa88b8a31e5ffc4e14' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18404875255cd148b57e6070-51490243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd148b57ebd7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd148b57ebd7')) {function content_5cd148b57ebd7($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="detailViewContainer"><div class="detailViewTitle" id="prefPageHeader"></div><div class="detailViewInfo userPreferences row-fluid"><div class="details col-xs-12"><?php }} ?>
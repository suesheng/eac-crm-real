<?php /* Smarty version Smarty-3.1.7, created on 2018-10-30 09:24:50
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19141595445bd823628a6f73-43347264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb8895405befac293b88598201d23f80443e27fe' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19141595445bd823628a6f73-43347264',
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
  'unifunc' => 'content_5bd823628b2a6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd823628b2a6')) {function content_5bd823628b2a6($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="detailViewContainer"><div class="detailViewTitle" id="prefPageHeader"></div><div class="detailViewInfo userPreferences row-fluid"><div class="details col-xs-12"><?php }} ?>
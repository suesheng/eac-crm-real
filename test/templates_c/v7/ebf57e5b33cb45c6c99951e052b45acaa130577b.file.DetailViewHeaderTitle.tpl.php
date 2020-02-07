<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 13:15:09
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20292587925bcdcd5d91a276-91648215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf57e5b33cb45c6c99951e052b45acaa130577b' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewHeaderTitle.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20292587925bcdcd5d91a276-91648215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE_MODEL' => 0,
    'RECORD' => 0,
    'NAME_FIELD' => 0,
    'FIELD_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdcd5d92bc5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdcd5d92bc5')) {function content_5bcdcd5d92bc5($_smarty_tpl) {?>
<div class="col-sm-6 col-lg-6 col-md-6"><div class="record-header clearfix"><div class="hidden-sm hidden-xs recordImage bghelpdesk app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"><div class="name"><span><strong><?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModuleIcon();?>
</strong></span></div></div><div class="recordBasicInfo"><div class="info-row"><h4><span class="recordLabel pushDown" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><?php  $_smarty_tpl->tpl_vars['NAME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD']->key => $_smarty_tpl->tpl_vars['NAME_FIELD']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['NAME_FIELD']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPermissions()){?><span class="<?php echo $_smarty_tpl->tpl_vars['NAME_FIELD']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME_FIELD']->value);?>
</span>&nbsp;<?php }?><?php } ?></span></h4></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderFieldsView.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div><?php }} ?>
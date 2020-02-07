<?php /* Smarty version Smarty-3.1.7, created on 2019-04-22 13:25:13
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/DateFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8251849455cbdc0b9a45691-69064154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '751bdf06fed785af26169b1385e788fd0e5effc2' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/DateFieldSearchView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8251849455cbdc0b9a45691-69064154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'USER_MODEL' => 0,
    'dateFormat' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbdc0b9a5007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbdc0b9a5007')) {function content_5cbdc0b9a5007($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><?php $_smarty_tpl->tpl_vars["dateFormat"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'), null, 0);?><div class="row-fluid"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" class="listSearchContributor inputElement dateField" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
" data-calendar-type="range" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'];?>
" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'  data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
"/></div><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2019-06-17 09:07:47
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/TimeFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10556113155d0758634c56e2-57526700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f79966c5a46f5cb27c245203bbb4dacac526dd8' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/TimeFieldSearchView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10556113155d0758634c56e2-57526700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'SEARCH_VALUE' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d0758634d3ea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0758634d3ea')) {function content_5d0758634d3ea($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars["SEARCH_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'], null, 0);?><div class=""><input type="text" class="timepicker-default listSearchContributor" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_VALUE']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'/></div><?php }} ?>
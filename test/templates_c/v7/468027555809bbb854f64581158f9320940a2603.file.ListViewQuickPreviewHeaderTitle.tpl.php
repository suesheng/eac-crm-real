<?php /* Smarty version Smarty-3.1.7, created on 2018-12-19 08:24:42
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16686282165c1a004aa90a93-57649560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '468027555809bbb854f64581158f9320940a2603' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16686282165c1a004aa90a93-57649560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'MODULE_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c1a004aa9822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1a004aa9822')) {function content_5c1a004aa9822($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['QUICK_PREVIEW'] = new Smarty_variable("true", null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2019-04-26 08:52:42
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3547562585cc2c6dae07915-20306859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f52dcf0dc1af4631677e134faeb6a6e59b2fa349' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3547562585cc2c6dae07915-20306859',
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
  'unifunc' => 'content_5cc2c6dae0f3c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc2c6dae0f3c')) {function content_5cc2c6dae0f3c($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['QUICK_PREVIEW'] = new Smarty_variable("true", null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2018-10-31 09:00:33
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/SalesOrder/OverlayEditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16954598065bd96f31a14819-98760089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5678b4fd15a9e5e076cee8812ae8bdb14b7e5ff' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/SalesOrder/OverlayEditView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16954598065bd96f31a14819-98760089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SCRIPTS' => 0,
    'jsModel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd96f31a228e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd96f31a228e')) {function content_5bd96f31a228e($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('OverlayEditView.tpl','Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php  $_smarty_tpl->tpl_vars['jsModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SCRIPTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsModel']->key => $_smarty_tpl->tpl_vars['jsModel']->value){
$_smarty_tpl->tpl_vars['jsModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['jsModel']->key;
?>
    <script type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"></script>
<?php } ?><?php }} ?>
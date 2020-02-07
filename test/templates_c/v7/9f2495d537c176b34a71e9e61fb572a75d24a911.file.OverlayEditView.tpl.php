<?php /* Smarty version Smarty-3.1.7, created on 2019-05-13 10:45:52
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/SalesOrder/OverlayEditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13840743975cd94ae0d4c9f6-42114106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f2495d537c176b34a71e9e61fb572a75d24a911' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/SalesOrder/OverlayEditView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13840743975cd94ae0d4c9f6-42114106',
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
  'unifunc' => 'content_5cd94ae0d5d23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd94ae0d5d23')) {function content_5cd94ae0d5d23($_smarty_tpl) {?>

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
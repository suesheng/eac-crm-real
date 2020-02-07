<?php /* Smarty version Smarty-3.1.7, created on 2019-02-12 13:27:00
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Quotes/OverlayEditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17201938575bd0257ec7e8b7-61145774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d9499e5fd4081cdea3e339abc53787621f8221' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Quotes/OverlayEditView.tpl',
      1 => 1549956912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17201938575bd0257ec7e8b7-61145774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd0257ec8974',
  'variables' => 
  array (
    'SCRIPTS' => 0,
    'jsModel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd0257ec8974')) {function content_5bd0257ec8974($_smarty_tpl) {?>

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
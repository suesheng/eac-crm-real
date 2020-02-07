<?php /* Smarty version Smarty-3.1.7, created on 2019-04-24 10:34:45
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/ExtensionStore/Promotions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9893592795cc03bc5b36c69-73917202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '708329140958658ac85a845f96d2a93cbc37e644' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/ExtensionStore/Promotions.tpl',
      1 => 1554367670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9893592795cc03bc5b36c69-73917202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HEADER_SCRIPTS' => 0,
    'SCRIPT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc03bc5b42bd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc03bc5b42bd')) {function content_5cc03bc5b42bd($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['SCRIPT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SCRIPT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HEADER_SCRIPTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SCRIPT']->key => $_smarty_tpl->tpl_vars['SCRIPT']->value){
$_smarty_tpl->tpl_vars['SCRIPT']->_loop = true;
?><script type="<?php echo $_smarty_tpl->tpl_vars['SCRIPT']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['SCRIPT']->value->getSrc();?>
" /><?php } ?>
<?php }} ?>
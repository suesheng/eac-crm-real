<?php /* Smarty version Smarty-3.1.7, created on 2019-04-22 10:06:39
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13933341415cbd922f15abb5-79793100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bacf6eb7ed458360131ea854884bdab40f96c76a' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13933341415cbd922f15abb5-79793100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbd922f15dae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbd922f15dae')) {function content_5cbd922f15dae($_smarty_tpl) {?>
<div class="noCommentsMsgContainer noContent"><p class="textAlignCenter"> <?php echo vtranslate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }} ?>
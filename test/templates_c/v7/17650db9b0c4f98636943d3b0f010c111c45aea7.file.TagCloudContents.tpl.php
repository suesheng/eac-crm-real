<?php /* Smarty version Smarty-3.1.7, created on 2019-09-25 08:34:03
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/TagCloudContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5733390425d8b267b3b6e15-15161594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17650db9b0c4f98636943d3b0f010c111c45aea7' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/TagCloudContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5733390425d8b267b3b6e15-15161594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAGS' => 0,
    'TAG_MODEL' => 0,
    'TAG_LABEL' => 0,
    'TAG_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d8b267b3ca8c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8b267b3ca8c')) {function content_5d8b267b3ca8c($_smarty_tpl) {?>

<div class="tagsContainer" id="tagCloud"><?php  $_smarty_tpl->tpl_vars['TAG_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAG_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TAG_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAGS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAG_MODEL']->key => $_smarty_tpl->tpl_vars['TAG_MODEL']->value){
$_smarty_tpl->tpl_vars['TAG_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TAG_ID']->value = $_smarty_tpl->tpl_vars['TAG_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars['TAG_LABEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName(), null, 0);?><span class="tag" title="<?php echo $_smarty_tpl->tpl_vars['TAG_LABEL']->value;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getType();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
"><span class="tagName display-inline-block textOverflowEllipsis cursorPointer" data-tagid="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_LABEL']->value;?>
</span></span><?php } ?></div><?php }} ?>
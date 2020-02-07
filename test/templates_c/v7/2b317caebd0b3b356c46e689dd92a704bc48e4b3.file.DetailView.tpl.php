<?php /* Smarty version Smarty-3.1.7, created on 2019-09-24 09:57:47
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/Groups/DetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12264574085d89e89b7a6d22-07631812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b317caebd0b3b356c46e689dd92a704bc48e4b3' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/Groups/DetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12264574085d89e89b7a6d22-07631812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD_MODEL' => 0,
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'GROUPS' => 0,
    'GROUP_MEMBERS' => 0,
    'GROUP_LABEL' => 0,
    'GROUP_MEMBER_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d89e89b825f8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d89e89b825f8')) {function content_5d89e89b825f8($_smarty_tpl) {?>


<div class="detailViewContainer full-height"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-scroll"><div class="detailViewInfo" ><form id="detailView" class="form-horizontal" method="POST"><div class="clearfix"><h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('groupname');?>
</h4><div class="btn-group pull-right" ><button class="btn btn-default" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getEditViewUrl();?>
'" type="button"><strong><?php echo vtranslate('LBL_EDIT_RECORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div><hr><div class="form-group"><span class="fieldLabel col-lg-3 col-md-3 col-sm-3"><?php echo vtranslate('LBL_GROUP_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></span><div class="fieldValue"><b><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
</b></div></div><div class="form-group"><span class="fieldLabel col-lg-3 col-md-3 col-sm-3"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="fieldValue"><b><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDescription();?>
</b></div></div><div class="form-group "><span class="fieldLabel col-lg-3 col-md-3 col-sm-3 "><?php echo vtranslate('LBL_GROUP_MEMBERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></span><div class="fieldValue"><span class="col-lg-6 col-md-6 col-sm-6 collectiveGroupMembers" style="width:auto;min-width:300px"><ul class="nav"><?php $_smarty_tpl->tpl_vars["GROUPS"] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getMembers(), null, 0);?><?php  $_smarty_tpl->tpl_vars['GROUP_MEMBERS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->key => $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value){
$_smarty_tpl->tpl_vars['GROUP_MEMBERS']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_LABEL']->value = $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value)){?><li class="groupLabel"><?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><?php  $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->key => $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value){
$_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->_loop = true;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value->get('name');?>
</a></li><?php } ?><?php }?><?php } ?></ul></span></div></div></form></div></div></div><?php }} ?>
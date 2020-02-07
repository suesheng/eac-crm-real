<?php /* Smarty version Smarty-3.1.7, created on 2019-01-28 11:59:17
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Events/uitypes/MultireferenceDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2665638485c4eee951d5a37-02993210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ee47bda680897ab3ea40fbbbae8b644481c9b8b' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Events/uitypes/MultireferenceDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2665638485c4eee951d5a37-02993210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RELATED_CONTACTS' => 0,
    'CONTACT_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c4eee951dcd6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4eee951dcd6')) {function content_5c4eee951dcd6($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['CONTACT_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CONTACT_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_CONTACTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CONTACT_INFO']->key => $_smarty_tpl->tpl_vars['CONTACT_INFO']->value){
$_smarty_tpl->tpl_vars['CONTACT_INFO']->_loop = true;
?><a href='<?php echo $_smarty_tpl->tpl_vars['CONTACT_INFO']->value['_model']->getDetailViewUrl();?>
' title='<?php echo vtranslate("Contacts","Contacts");?>
'> <?php echo Vtiger_Util_Helper::getRecordName($_smarty_tpl->tpl_vars['CONTACT_INFO']->value['id']);?>
</a><br><?php } ?><?php }} ?>
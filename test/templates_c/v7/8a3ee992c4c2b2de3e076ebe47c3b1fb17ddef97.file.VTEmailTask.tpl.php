<?php /* Smarty version Smarty-3.1.7, created on 2019-01-22 11:57:18
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/Tasks/VTEmailTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7245463885c47051e96cfb8-97663452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a3ee992c4c2b2de3e076ebe47c3b1fb17ddef97' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/Tasks/VTEmailTask.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7245463885c47051e96cfb8-97663452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'TASK_OBJECT' => 0,
    'FROM_EMAIL_FIELD_OPTION' => 0,
    'EMAIL_FIELD_OPTION' => 0,
    'ALL_FIELD_OPTIONS' => 0,
    'META_VARIABLES' => 0,
    'META_VARIABLE_VALUE' => 0,
    'META_VARIABLE_KEY' => 0,
    'EMAIL_TEMPLATES' => 0,
    'EMAIL_TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c47051e9c54c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c47051e9c54c')) {function content_5c47051e9c54c($_smarty_tpl) {?>

<div id="VtEmailTaskContainer"><div class="row"><div class="col-sm-12 col-xs-12" style="margin-bottom: 70px;"><div class="row form-group" ><div class="col-sm-6 col-xs-6"><div class="row"><div class="col-sm-3 col-xs-3"><?php echo vtranslate('LBL_FROM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-9 col-xs-9"><input name="fromEmail" class=" fields inputElement" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->fromEmail;?>
" /></div></div></div><div class="col-sm-5 col-xs-5"><select id="fromEmailOption" style="min-width: 250px" class="select2" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php echo $_smarty_tpl->tpl_vars['FROM_EMAIL_FIELD_OPTION']->value;?>
</select></div></div><div class="row form-group"><div class="col-sm-6 col-xs-6"><div class="row"><div class="col-sm-3 col-xs-3"><?php echo vtranslate('Reply To',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-9 col-xs-9"><input name="replyTo" class="fields inputElement" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->replyTo;?>
"/></div></div></div><span class="col-sm-5 col-xs-5"><select style="min-width: 250px" class="task-fields select2 overwriteSelection" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value;?>
</select></span></div><div class="row form-group"><div class="col-sm-6 col-xs-6"><div class="row"><span class="col-sm-3 col-xs-3"><?php echo vtranslate('LBL_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></span><div class="col-sm-9 col-xs-9"><input data-rule-required="true" name="recepient" class="fields inputElement" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recepient;?>
" /></div></div></div><div class="col-sm-5 col-xs-5"><select style="min-width: 250px" class="task-fields select2" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value;?>
</select></div></div><div class="row form-group <?php if (empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc)){?>hide <?php }?>" id="ccContainer"><div class="col-sm-6 col-xs-6"><div class="row"><div class="col-sm-3 col-xs-3"><?php echo vtranslate('LBL_CC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-9 col-xs-9"><input class="fields inputElement" type="text" name="emailcc" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc;?>
" /></div></div></div><span class="col-sm-5 col-xs-5"><select class="task-fields select2" data-placeholder='<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
' style="min-width: 250px"><option></option><?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value;?>
</select></span></div><div class="row form-group <?php if (empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc)){?>hide <?php }?>" id="bccContainer"><div class="col-sm-6 col-xs-6"><div class="row"><div class="col-sm-3 col-xs-3"><?php echo vtranslate('LBL_BCC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-9 col-xs-9"><input class="fields inputElement" type="text" name="emailbcc" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc;?>
" /></div></div></div><div class="col-sm-5 col-xs-5"><select class="task-fields select2" data-placeholder='<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
' style="min-width: 250px"><option></option><?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value;?>
</select></div></div><div class="row form-group <?php if ((!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc))&&(!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc))){?> hide <?php }?>"><div class="col-sm-8 col-xs-8"><div class="row"><div class="col-sm-3 col-xs-3">&nbsp;</div><div class="col-sm-9 col-xs-9"><a class="cursorPointer <?php if ((!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc))){?>hide<?php }?>" id="ccLink"><?php echo vtranslate('LBL_ADD_CC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>&nbsp;&nbsp;<a class="cursorPointer <?php if ((!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc))){?>hide<?php }?>" id="bccLink"><?php echo vtranslate('LBL_ADD_BCC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></div></div><div class="row form-group"><div class="col-sm-6 col-xs-6"><div class="row"><div class="col-sm-3 col-xs-3"><?php echo vtranslate('LBL_SUBJECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></div><div class="col-sm-9 col-xs-9"><input data-rule-required="true" name="subject" class="fields inputElement" type="text" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->subject;?>
" id="subject" spellcheck="true"/></div></div></div><div class="col-sm-5 col-xs-5"><select style="min-width: 250px" class="task-fields select2" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php echo $_smarty_tpl->tpl_vars['ALL_FIELD_OPTIONS']->value;?>
</select></div></div><div class="row form-group"><div class="col-sm-6 col-xs-6"><div class="row"><div style="margin-top: 7px" class="col-sm-3 col-xs-3"><?php echo vtranslate('LBL_ADD_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>&nbsp;&nbsp;<div class="col-sm-8 col-xs-8"><select style="min-width: 250px" id="task-fieldnames" class="select2" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php echo $_smarty_tpl->tpl_vars['ALL_FIELD_OPTIONS']->value;?>
</select></div></div></div><div class="col-sm-5 col-xs-5"><div class="row"><div style="margin-top: 7px" class="col-sm-3 col-xs-3"><?php echo vtranslate('LBL_GENERAL_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>&nbsp;&nbsp;<div class="col-sm-8 col-xs-8"><select style="width: 205px" id="task_timefields" class="select2" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php  $_smarty_tpl->tpl_vars['META_VARIABLE_KEY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['META_VARIABLE_KEY']->_loop = false;
 $_smarty_tpl->tpl_vars['META_VARIABLE_VALUE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['META_VARIABLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['META_VARIABLE_KEY']->key => $_smarty_tpl->tpl_vars['META_VARIABLE_KEY']->value){
$_smarty_tpl->tpl_vars['META_VARIABLE_KEY']->_loop = true;
 $_smarty_tpl->tpl_vars['META_VARIABLE_VALUE']->value = $_smarty_tpl->tpl_vars['META_VARIABLE_KEY']->key;
?><option value="<?php if (strpos(strtolower($_smarty_tpl->tpl_vars['META_VARIABLE_VALUE']->value),'url')===false){?>$<?php }?><?php echo $_smarty_tpl->tpl_vars['META_VARIABLE_KEY']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['META_VARIABLE_VALUE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select></div></div></div></div><div class="row from-group"><?php if ($_smarty_tpl->tpl_vars['EMAIL_TEMPLATES']->value){?><div class="col-sm-6 col-xs-6"><div class="row"><div class="col-sm-3 col-xs-3"><?php echo vtranslate('LBL_EMAIL_TEMPLATES','EmailTemplates');?>
</div><div class="col-sm-9 col-xs-9"><select style="min-width: 250px" id="task-emailtemplates" class="select2" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php  $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EMAIL_TEMPLATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->key => $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value){
$_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value->isDeleted()){?><option value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value->get('body');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value->get('templatename'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php }?><?php } ?></select></div></div></div><?php }?></div><div class="row form-group"><div class="col-sm-12 col-xs-12"><textarea id="content" name="content"><?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->content;?>
</textarea></div></div></div></div></div><?php }} ?>
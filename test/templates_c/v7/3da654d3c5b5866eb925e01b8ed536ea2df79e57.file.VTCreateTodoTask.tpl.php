<?php /* Smarty version Smarty-3.1.7, created on 2018-10-30 13:11:56
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/Tasks/VTCreateTodoTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20954917055bd8589c142324-98443326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da654d3c5b5866eb925e01b8ed536ea2df79e57' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/Tasks/VTCreateTodoTask.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20954917055bd8589c142324-98443326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'TASK_OBJECT' => 0,
    'TASK_TYPE_MODEL' => 0,
    'STATUS_PICKLIST_VALUES' => 0,
    'STATUS_PICKLIST_KEY' => 0,
    'STATUS_PICKLIST_VALUE' => 0,
    'PRIORITY_PICKLIST_VALUES' => 0,
    'PRIORITY_PICKLIST_KEY' => 0,
    'PRIORITY_PICKLIST_VALUE' => 0,
    'ASSIGNED_TO' => 0,
    'LABEL' => 0,
    'ASSIGNED_USERS_LIST' => 0,
    'ASSIGNED_USER_KEY' => 0,
    'ASSIGNED_USER' => 0,
    'TIME' => 0,
    'DATETIME_FIELDS' => 0,
    'DATETIME_FIELD' => 0,
    'RELATED_MODULE_MODEL' => 0,
    'FIELD_MODELS' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'SHOWN_FIELDS_LIST' => 0,
    'MANDATORY_FIELD_MODELS' => 0,
    'MANDATORY_FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd8589c19e44',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8589c19e44')) {function content_5bd8589c19e44($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST'] = new Smarty_variable(array(), null, 0);?><div class="row" style="margin-bottom: 70px;"><div class="col-sm-9 col-xs-9"><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></div><div class="col-sm-8 col-xs-8"><input data-rule-required="true" class="inputElement" name="todo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->todo;?>
" /><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['subject'] = 'subject';?></div></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-8 col-xs-8"><textarea class="inputElement" name="description" style="height: inherit;"><?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->description;?>
</textarea><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['description'] = 'description';?></div></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-5 col-xs-5"><?php $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_TYPE_MODEL']->value->getTaskBaseModule()->getField('taskstatus')->getPickListValues(), null, 0);?><select name="status" class="select2"><?php  $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->status){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->value;?>
</option><?php } ?></select></div><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['taskstatus'] = 'taskstatus';?></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_PRIORITY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-5 col-xs-5"><?php $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_TYPE_MODEL']->value->getTaskBaseModule()->getField('taskpriority')->getPickListValues(), null, 0);?><select name="priority" class="select2"><?php  $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->priority){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->value;?>
</option><?php } ?></select></div><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['taskpriority'] = 'taskpriority';?></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_ASSIGNED_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-5 col-xs-5"><select name="assigned_user_id" class="select2"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->_loop = false;
 $_smarty_tpl->tpl_vars['LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ASSIGNED_TO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->key => $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->value){
$_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->_loop = true;
 $_smarty_tpl->tpl_vars['LABEL']->value = $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->key;
?><optgroup label="<?php echo vtranslate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['ASSIGNED_USER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ASSIGNED_USER']->_loop = false;
 $_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ASSIGNED_USER']->key => $_smarty_tpl->tpl_vars['ASSIGNED_USER']->value){
$_smarty_tpl->tpl_vars['ASSIGNED_USER']->_loop = true;
 $_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY']->value = $_smarty_tpl->tpl_vars['ASSIGNED_USER']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->assigned_user_id){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER']->value;?>
</option><?php } ?></optgroup><?php } ?><optgroup label="<?php echo vtranslate('LBL_SPECIAL_OPTIONS');?>
"><option value="copyParentOwner" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->assigned_user_id=='copyParentOwner'){?> selected="" <?php }?>><?php echo vtranslate('LBL_PARENT_OWNER');?>
</option></optgroup></select></div><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['assigned_user_id'] = 'assigned_user_id';?></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-3 col-xs-3" ><div class="input-group time"><?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->time!=''){?><?php $_smarty_tpl->tpl_vars['TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->time, null, 0);?><?php }?><input type="text" class="timepicker-default inputElement" value="<?php echo $_smarty_tpl->tpl_vars['TIME']->value;?>
" name="time" /><span  class="input-group-addon"><i  class="fa fa-clock-o"></i></span></div></div></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_DUE_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-2 col-xs-2"><div class="row"><div class="col-sm-8 col-xs-8"><input class="inputElement" type="text" name="days" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->days;?>
">&nbsp;</div><span class="alignMiddle"><?php echo vtranslate('LBL_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><div class="col-sm-2 col-xs-2 marginLeftZero"><select class="select2" name="direction" style="width: 100%;"><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->direction=='after'){?>selected=""<?php }?> value="after"><?php echo vtranslate('LBL_AFTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->direction=='before'){?>selected=""<?php }?> value="before"><?php echo vtranslate('LBL_BEFORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div><span class="col-sm-6 col-xs-6"><div class="row"><div class="col-sm-6 col-xs-6"><select class="select2" name="datefield" style="width: 100%;"><?php  $_smarty_tpl->tpl_vars['DATETIME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DATETIME_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DATETIME_FIELD']->key => $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value){
$_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->datefield==$_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name')){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->getModuleName());?>
</option><?php } ?></select>&nbsp;</div><div class="col-sm-6 col-xs-6" style="vertical-align: super; word-wrap: break-word; padding: 0px;">(<?php echo vtranslate('LBL_THE_SAME_VALUE_IS_USED_FOR_START_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
)</div></div></span><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['date_start'] = 'date_start';?><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['due_date'] = 'due_date';?></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_SEND_NOTIFICATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-6 col-xs-6"><input  type="checkbox" name="sendNotification" value="true" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->sendNotification){?>checked<?php }?> /></div><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['sendnotification'] = 'sendnotification';?></div><?php $_smarty_tpl->tpl_vars['QUALIFIED_MODULE'] = new Smarty_variable('Calendar', null, 0);?><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->todo)){?><?php $_smarty_tpl->tpl_vars['FIELD_MODELS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFields(), null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FIELD_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php if (!in_array($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value)&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayType()!='3'&&($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()||!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->{$_smarty_tpl->tpl_vars['FIELD_NAME']->value}))&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()!='reference'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()!='multireference'){?><?php $_smarty_tpl->tpl_vars["test"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->{$_smarty_tpl->tpl_vars['FIELD_NAME']->value}), null, 0);?><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?><span class="redColor">*</span><?php }?></div><div class="col-sm-6 col-xs-6"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>Users_Record_Model::getCurrentUserModel()), 0);?>
</div></div><?php }?><?php } ?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODELS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getMandatoryFieldModels(), null, 0);?><?php  $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->_loop = true;
?><?php if (!in_array($_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value)&&$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->getDisplayType()!='3'&&$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->getFieldDataType()!='reference'&&$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->getFieldDataType()!='multireference'){?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars["test"] = new Smarty_variable($_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->{$_smarty_tpl->tpl_vars['FIELD_NAME']->value}), null, 0);?><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate($_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></div><div class="col-sm-6 col-xs-6"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value,'USER_MODEL'=>Users_Record_Model::getCurrentUserModel()), 0);?>
</div></div><?php }?><?php } ?><?php }?></div></div>
<?php }} ?>
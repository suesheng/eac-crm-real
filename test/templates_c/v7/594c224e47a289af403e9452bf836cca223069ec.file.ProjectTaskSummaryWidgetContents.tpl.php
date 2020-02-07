<?php /* Smarty version Smarty-3.1.7, created on 2019-04-22 13:25:19
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/ProjectTaskSummaryWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3126071505cbdc0bf1536a7-36616094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '594c224e47a289af403e9452bf836cca223069ec' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/ProjectTaskSummaryWidgetContents.tpl',
      1 => 1554904546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3126071505cbdc0bf1536a7-36616094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RELATED_HEADERS' => 0,
    'HEADER' => 0,
    'MODULE_NAME' => 0,
    'RELATED_RECORDS' => 0,
    'RELATED_MODULE' => 0,
    'RELATED_RECORD' => 0,
    'MODULE' => 0,
    'RELATED_MODULE_MODEL' => 0,
    'FIELD_MODEL' => 0,
    'NUMBER_OF_RECORDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbdc0bf19035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbdc0bf19035')) {function content_5cbdc0bf19035($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER']->key => $_smarty_tpl->tpl_vars['HEADER']->value){
$_smarty_tpl->tpl_vars['HEADER']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['HEADER']->value->get('label')=="Project Task Name"){?><?php ob_start();?><?php echo vtranslate($_smarty_tpl->tpl_vars['HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TASK_NAME_HEADER'] = new Smarty_variable($_tmp1, null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['HEADER']->value->get('label')=="Progress"){?><?php $_smarty_tpl->tpl_vars['TASK_PROGRESS_HEADER'] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['HEADER']->value->get('label')=="Status"){?><?php $_smarty_tpl->tpl_vars['TASK_STATUS_HEADER'] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), null, 0);?><?php }?><?php } ?><?php  $_smarty_tpl->tpl_vars['RELATED_RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->key => $_smarty_tpl->tpl_vars['RELATED_RECORD']->value){
$_smarty_tpl->tpl_vars['RELATED_RECORD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['PERMISSIONS'] = new Smarty_variable(Users_Privileges_Model::isPermitted($_smarty_tpl->tpl_vars['RELATED_MODULE']->value,'EditView',$_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('id')), null, 0);?><div class="recentActivitiesContainer"><ul class="unstyled"><li><div><div class="textOverflowEllipsis width27em"><input type="checkbox" data-recordid="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
" data-fieldname="projecttaskstatus"id="rec-<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
" class="checkTask" <?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('projecttaskstatus')==vtranslate('Completed',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value)){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('projecttaskstatus');?>
"> &nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
_Related_Record_<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('id');?>
" title="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('projecttaskname');?>
"><?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('projecttaskstatus')==vtranslate('Completed',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value)){?><del><?php }?><strong><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('projecttaskname');?>
</strong><?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('projecttaskstatus')=='Completed'){?></del><?php }?></a></div><div class="row"><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('ProjectTask'), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getField('projecttaskprogress'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isViewableInDetailView()){?><div class="col-lg-6"><div class="row"></div></div><?php }?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getField('projecttaskstatus'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isViewableInDetailView()){?><div class="col-lg-6"><div class="row"></div></div><?php }?></div></div></li></ul></div><?php } ?><?php $_smarty_tpl->tpl_vars['NUMBER_OF_RECORDS'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['RELATED_RECORDS']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['NUMBER_OF_RECORDS']->value==5){?><div class=""><div class="pull-right"><a class="moreRecentTasks cursorPointer"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></div></div><?php }?><?php }} ?>
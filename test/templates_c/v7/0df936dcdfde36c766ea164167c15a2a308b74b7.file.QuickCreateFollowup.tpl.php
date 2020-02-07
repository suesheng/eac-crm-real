<?php /* Smarty version Smarty-3.1.7, created on 2019-06-17 09:02:58
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Calendar/QuickCreateFollowup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11397787515d075742e95547-59084288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0df936dcdfde36c766ea164167c15a2a308b74b7' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Calendar/QuickCreateFollowup.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11397787515d075742e95547-59084288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'RECORD_MODEL' => 0,
    'USER_MODEL' => 0,
    'time' => 0,
    'RECORD_ID' => 0,
    'STARTDATE' => 0,
    'dateFormat' => 0,
    'STARTDATEFIELDMODEL' => 0,
    'FOLLOW_UP_LABEL' => 0,
    'currentDate' => 0,
    'timeformat' => 0,
    'currentTimeInVtigerFormat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d075742ebee1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d075742ebee1')) {function content_5d075742ebee1($_smarty_tpl) {?>

<div class="modal-dialog modelContainer modal-content"><?php ob_start();?><?php echo vtranslate('LBL_CREATE_FOLLOWUP_EVENT',"Events");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<form class="form-horizontal followupCreateView" id="followupQuickCreate" name="followupQuickCreate" method="post" action="index.php"><div class="modal-body"><?php $_smarty_tpl->tpl_vars['RECORD_ID'] = new Smarty_variable(($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('id')), null, 0);?><?php $_smarty_tpl->tpl_vars["dateFormat"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'), null, 0);?><?php $_smarty_tpl->tpl_vars["timeformat"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('hour_format'), null, 0);?><?php $_smarty_tpl->tpl_vars["currentDate"] = new Smarty_variable(Vtiger_Date_UIType::getDisplayDateValue(''), null, 0);?><?php $_smarty_tpl->tpl_vars["time"] = new Smarty_variable(Vtiger_Time_UIType::getDisplayTimeValue(null), null, 0);?><?php $_smarty_tpl->tpl_vars["currentTimeInVtigerFormat"] = new Smarty_variable(Vtiger_Time_UIType::getDisplayValue($_smarty_tpl->tpl_vars['time']->value), null, 0);?><?php ob_start();?><?php echo vtranslate('LBL_HOLD_FOLLOWUP_ON',"Events");?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FOLLOW_UP_LABEL'] = new Smarty_variable($_tmp2, null, 0);?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><input type="hidden" name="action" value="SaveFollowupAjax" /><input type="hidden" name="mode" value="createFollowupEvent"><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" name="defaultCallDuration" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('callduration');?>
" /><input type="hidden" name="defaultOtherEventDuration" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('othereventduration');?>
" /><input class="dateField" type="hidden" name="date_start" value="<?php echo $_smarty_tpl->tpl_vars['STARTDATE']->value;?>
" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
" data-fieldinfo="<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['STARTDATEFIELDMODEL']->value));?>
"/><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FOLLOW_UP_LABEL']->value;?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('FIELD_INFO', null, 0);
$_smarty_tpl->tpl_vars['FIELD_INFO']->value['label'] = $_tmp3;?><div class="row"><div class="col-sm-12"><div class="col-sm-4 fieldLabel" style="padding-top:1%"><label class="muted pull-right"><?php echo $_smarty_tpl->tpl_vars['FOLLOW_UP_LABEL']->value;?>
</label></div><div class="col-sm-6 fieldValue"><div><div class="input-group inputElement" style="margin-bottom: 3px"><input type="text" class="dateField form-control" data-fieldname="followup_date_start" data-fieldtype="date" name="followup_date_start" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
"value="<?php echo $_smarty_tpl->tpl_vars['currentDate']->value;?>
" data-rule-required="true" data-rule-greaterThanOrEqualToToday="true"/><span class="input-group-addon"><i class="fa fa-calendar "></i></span></div></div><div><div class="input-group inputElement time" ><input type="text" data-format="<?php echo $_smarty_tpl->tpl_vars['timeformat']->value;?>
" class="timepicker-default form-control" value="<?php echo $_smarty_tpl->tpl_vars['currentTimeInVtigerFormat']->value;?>
" name="followup_time_start"data-rule-required="true" /><span  class="input-group-addon"><i  class="fa fa-clock-o"></i></span></div></div></div></div></div></div><?php ob_start();?><?php echo vtranslate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['BUTTON_NAME'] = new Smarty_variable($_tmp4, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div>
<?php }} ?>
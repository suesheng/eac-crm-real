<?php /* Smarty version Smarty-3.1.7, created on 2018-10-30 09:32:54
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/MailConverter/RulesList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14954848965bd825465e03f0-74569002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0379aa20837b9b4661be782730274acafefd8fb1' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/MailConverter/RulesList.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14954848965bd825465e03f0-74569002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'RECORD_EXISTS' => 0,
    'MODULE_MODEL' => 0,
    'SCANNER_ID' => 0,
    'MAILBOXES' => 0,
    'SCANNER' => 0,
    'CRON_RECORD_MODEL' => 0,
    'QUALIFIED_MODULE_NAME' => 0,
    'FOLDERS_SCANNED' => 0,
    'FOLDER' => 0,
    'SCANNER_MODEL' => 0,
    'RECORD' => 0,
    'LINK' => 0,
    'RULE_MODELS_LIST' => 0,
    'RULE_MODEL' => 0,
    'RULE_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd82546627e9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd82546627e9')) {function content_5bd82546627e9($_smarty_tpl) {?>

<div class="listViewContentDiv col-lg-12"><h4><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><hr><?php if (!$_smarty_tpl->tpl_vars['RECORD_EXISTS']->value){?><div class="mailConveterDesc"><center><br><br><div><?php echo vtranslate('LBL_MAILCONVERTER_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><img src="<?php echo vimage_path('MailConverter.png');?>
" alt="Mail Converter"><br><br><a onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl();?>
'" style="color: #15c !important;"><u class="cursorPointer" style="font-size:12pt;"><?php echo vtranslate('LBL_CREATE_MAILBOX_NOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</u></a><br><br></center></div><?php }else{ ?><input type="hidden" id="scannerId" value="<?php echo $_smarty_tpl->tpl_vars['SCANNER_ID']->value;?>
"/><div class="col-lg-12"><div class="col-lg-4 mailBoxDropdownWrapper" style="padding-left: 0px;"><select class="mailBoxDropdown select2" style="max-width: 300px; min-width: 200px;"><?php  $_smarty_tpl->tpl_vars['SCANNER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SCANNER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MAILBOXES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SCANNER']->key => $_smarty_tpl->tpl_vars['SCANNER']->value){
$_smarty_tpl->tpl_vars['SCANNER']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['SCANNER']->value['scannerid'];?>
" <?php if ($_smarty_tpl->tpl_vars['SCANNER_ID']->value==$_smarty_tpl->tpl_vars['SCANNER']->value['scannerid']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['SCANNER']->value['scannername'];?>
</option><?php } ?></select></div><div class="col-lg-4" id="mailConverterStats"><?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->isEnabled()){?><?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->hadTimedout()){?><?php echo vtranslate('LBL_LAST_SCAN_TIMED_OUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
.<?php }elseif($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getLastEndDateTime()!=''){?><?php echo vtranslate('LBL_LAST_SCAN_AT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
<?php echo $_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getLastEndDateTime();?>
<br /><?php echo vtranslate('LBL_FOLDERS_SCANNED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
&nbsp;:&nbsp;<?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS_SCANNED']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?><strong><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value;?>
&nbsp;&nbsp;</strong><?php } ?><?php }?><?php }?></div><div class="col-lg-4" style="padding-right: 0px;"><div class="btn-group pull-right"><button class="btn btn-default addButton" id="addRuleButton" title="<?php echo vtranslate('LBL_DRAG_AND_DROP_BLOCK_TO_PRIORITISE_THE_RULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"<?php if (stripos($_smarty_tpl->tpl_vars['SCANNER_MODEL']->value->getCreateRuleRecordUrl(),'javascript:')===0){?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['SCANNER_MODEL']->value->getCreateRuleRecordUrl(),strlen("javascript:"));?>
'<?php }else{ ?>onclick='window.location.href="<?php echo $_smarty_tpl->tpl_vars['SCANNER_MODEL']->value->getCreateRuleRecordUrl();?>
"'<?php }?>><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD_RULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button href="javascript:void(0);" data-toggle="dropdown" class="btn btn-default" style="margin-left: 4px;"><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
&nbsp;<i class="caret"></i></button><ul class="dropdown-menu pull-right"><?php  $_smarty_tpl->tpl_vars['LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RECORD']->value->getRecordLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->key => $_smarty_tpl->tpl_vars['LINK']->value){
$_smarty_tpl->tpl_vars['LINK']->_loop = true;
?><li><a <?php if (strpos($_smarty_tpl->tpl_vars['LINK']->value->getUrl(),'javascript:')===0){?> href='javascript:void(0);' onclick='<?php echo substr($_smarty_tpl->tpl_vars['LINK']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?>href=<?php echo $_smarty_tpl->tpl_vars['LINK']->value->getUrl();?>
<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php } ?></ul></div></div></div><br><div id="mailConverterBody" class="col-lg-12"><br><div id="rulesList"><?php if (count($_smarty_tpl->tpl_vars['RULE_MODELS_LIST']->value)){?><?php $_smarty_tpl->tpl_vars['RULE_COUNT'] = new Smarty_variable(1, null, 0);?><?php $_smarty_tpl->tpl_vars['FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getSetupRuleFields(), null, 0);?><?php  $_smarty_tpl->tpl_vars['RULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RULE_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RULE_MODELS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RULE_MODEL']->key => $_smarty_tpl->tpl_vars['RULE_MODEL']->value){
$_smarty_tpl->tpl_vars['RULE_MODEL']->_loop = true;
?><div class="row-fluid padding-bottom1per rule" data-id="<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->get('ruleid');?>
" data-blockid="block_<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->get('ruleid');?>
"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Rule.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RULE_COUNT'=>$_smarty_tpl->tpl_vars['RULE_COUNT']->value), 0);?>
</div><?php $_smarty_tpl->tpl_vars['RULE_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['RULE_COUNT']->value+1, null, 0);?><?php } ?><?php }else{ ?><div class="details border1px" style="text-align: center; min-height: 200px; padding-top: 100px;"><?php echo vtranslate('LBL_NO_RULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }?></div></div><?php }?>
<?php }} ?>
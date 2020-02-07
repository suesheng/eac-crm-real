<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 09:44:26
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/SelectEmailFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1729372475cd2a4fad01b80-25157347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57c8b6cd085b2c54d35bc9a8db2860ff4147e183' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/SelectEmailFields.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1729372475cd2a4fad01b80-25157347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'VIEWNAME' => 0,
    'SEARCH_KEY' => 0,
    'OPERATOR' => 0,
    'ALPHABET_VALUE' => 0,
    'SEARCH_PARAMS' => 0,
    'SOURCE_MODULE' => 0,
    'TO' => 0,
    'SELECTED_EMAIL_SOURCE_MODULE' => 0,
    'PARENT_MODULE' => 0,
    'PARENT_RECORD' => 0,
    'RELATED_MODULE' => 0,
    'PREF_NEED_TO_UPDATE' => 0,
    'EMAIL_FIELDS_INFO' => 0,
    'RECORDS_COUNT' => 0,
    'EMAIL_FIELDS' => 0,
    'count' => 0,
    'EMAIL_FIELD' => 0,
    'EMAIL_FIELD_NAME' => 0,
    'RECORD_INFO' => 0,
    'RECORD_ID' => 0,
    'RECORD_LABEL' => 0,
    'EMAIL_MODULE' => 0,
    'EMAIL_VALUE' => 0,
    'RELATED_LOAD' => 0,
    'RECIPIENT_PREF_ENABLED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd2a4fad4769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd2a4fad4769')) {function content_5cd2a4fad4769($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/var/www/html/eac-crm/libraries/Smarty/libs/plugins/function.counter.php';
?>


<div id="sendEmailContainer" class="modal-dialog"><form class="form-horizontal" id="SendEmailFormStep1" method="post" action="index.php"><div class="modal-content"><?php ob_start();?><?php echo vtranslate('LBL_SELECT_EMAIL_IDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_tmp1), 0);?>
<div class="modal-body"><input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
 /><input type="hidden" name="excluded_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
 /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
" /><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="view" value="ComposeEmail"/><input type="hidden" name="search_key" value= "<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" /><input type="hidden" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" /><input type="hidden" name="search_value" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><?php if ($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value){?><input type="hidden" name="search_params" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value);?>
' /><?php }?><input type="hidden" name="fieldModule" value=<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
 /><input type="hidden" name="to" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['TO']->value);?>
' /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_EMAIL_SOURCE_MODULE']->value;?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['PARENT_MODULE']->value)){?><input type="hidden" name="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
" /><input type="hidden" name="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value;?>
" /><input type="hidden" name="parentModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
" /><?php }?><input type="hidden" name="prefsNeedToUpdate" id="prefsNeedToUpdate" value="<?php echo $_smarty_tpl->tpl_vars['PREF_NEED_TO_UPDATE']->value;?>
" /><div id="multiEmailContainer" style="padding-left:20px;"><?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>"count"),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELDS_INFO']->value){?><?php if ($_smarty_tpl->tpl_vars['RECORDS_COUNT']->value>1){?><input type="hidden" name="emailSource" value="ListView" /><?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>"count"),$_smarty_tpl);?>
<?php  $_smarty_tpl->tpl_vars['EMAIL_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EMAIL_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL_FIELD']->key => $_smarty_tpl->tpl_vars['EMAIL_FIELD']->value){
$_smarty_tpl->tpl_vars['EMAIL_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['EMAIL_FIELD']->key;
?><label class="checkbox" style="padding-left: 7%;"><input type="checkbox" class="emailField" name="selectedFields[<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
]" data-moduleName="<?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD']->value->getModule()->getName();?>
" value='<?php echo Vtiger_Functions::jsonEncode(array('field'=>$_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME']->value,'field_id'=>$_smarty_tpl->tpl_vars['EMAIL_FIELD']->value->getId(),'module_id'=>$_smarty_tpl->tpl_vars['EMAIL_FIELD']->value->getModule()->getId()));?>
' <?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELD']->value->get('isPreferred')){?>checked="true"<?php }?>/>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['EMAIL_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</label><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<?php } ?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['RECORD_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['EMAIL_MODULE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EMAIL_FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD_INFO']->key => $_smarty_tpl->tpl_vars['RECORD_INFO']->value){
$_smarty_tpl->tpl_vars['RECORD_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['EMAIL_MODULE']->value = $_smarty_tpl->tpl_vars['RECORD_INFO']->key;
?><div class="control-group"><?php  $_smarty_tpl->tpl_vars['EMAIL_FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL_FIELDS']->_loop = false;
 $_smarty_tpl->tpl_vars['RECORD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL_FIELDS']->key => $_smarty_tpl->tpl_vars['EMAIL_FIELDS']->value){
$_smarty_tpl->tpl_vars['EMAIL_FIELDS']->_loop = true;
 $_smarty_tpl->tpl_vars['RECORD_ID']->value = $_smarty_tpl->tpl_vars['EMAIL_FIELDS']->key;
?><?php ob_start();?><?php echo decode_html(textlength_check(Vtiger_Util_Helper::getRecordName($_smarty_tpl->tpl_vars['RECORD_ID']->value)));?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['RECORD_LABEL'] = new Smarty_variable($_tmp2, null, 0);?><?php if ($_smarty_tpl->tpl_vars['RECORDS_COUNT']->value>1){?><h5><?php echo $_smarty_tpl->tpl_vars['RECORD_LABEL']->value;?>
</h5><?php }?><?php  $_smarty_tpl->tpl_vars['EMAIL_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['EMAIL_VALUE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EMAIL_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL_FIELD']->key => $_smarty_tpl->tpl_vars['EMAIL_FIELD']->value){
$_smarty_tpl->tpl_vars['EMAIL_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['EMAIL_VALUE']->value = $_smarty_tpl->tpl_vars['EMAIL_FIELD']->key;
?><label class="checkbox" style="<?php if ($_smarty_tpl->tpl_vars['RECORDS_COUNT']->value>1){?>padding-left: 7%;<?php }?> font-weight:normal"><input type="checkbox" class="emailField" name="selectedFields[<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
]" data-moduleName="<?php echo $_smarty_tpl->tpl_vars['EMAIL_MODULE']->value;?>
" value='<?php echo Vtiger_Functions::jsonEncode(array('record'=>$_smarty_tpl->tpl_vars['RECORD_ID']->value,'field_value'=>$_smarty_tpl->tpl_vars['EMAIL_VALUE']->value,'record_label'=>$_smarty_tpl->tpl_vars['RECORD_LABEL']->value,'field_id'=>$_smarty_tpl->tpl_vars['EMAIL_FIELD']->value->getId(),'module_id'=>$_smarty_tpl->tpl_vars['EMAIL_FIELD']->value->getModule()->getId()));?>
' <?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELD']->value->get('isPreferred')){?>checked="true"<?php }?>/>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['EMAIL_VALUE']->value;?>
<span class="muted">&nbsp;-<?php echo vtranslate($_smarty_tpl->tpl_vars['EMAIL_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</span></label><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<?php } ?><?php } ?></div><?php } ?><?php }?><?php }?></div><?php if ($_smarty_tpl->tpl_vars['RELATED_LOAD']->value==true){?><input type="hidden" name="relatedLoad" value=<?php echo $_smarty_tpl->tpl_vars['RELATED_LOAD']->value;?>
 /><?php }?></div><div class="preferenceDiv" style="padding: 0px 0px 10px 35px;"><label class="checkbox displayInlineBlock"><input type="checkbox" name="saveRecipientPrefs" id="saveRecipientPrefs" <?php if ($_smarty_tpl->tpl_vars['RECIPIENT_PREF_ENABLED']->value){?>checked="true"<?php }?>/>&nbsp;&nbsp;&nbsp;<?php echo vtranslate('LBL_REMEMBER_MY_PREF',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;</label><i class="fa fa-info-circle" title="<?php echo vtranslate('LBL_EDIT_EMAIL_PREFERENCE_TOOLTIP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></div><?php ob_start();?><?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BUTTON_NAME'=>$_tmp3), 0);?>
</div></form></div>


<?php }} ?>
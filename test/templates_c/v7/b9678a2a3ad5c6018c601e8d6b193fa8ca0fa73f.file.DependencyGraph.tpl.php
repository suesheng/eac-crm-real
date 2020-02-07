<?php /* Smarty version Smarty-3.1.7, created on 2020-01-07 07:41:29
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/PickListDependency/DependencyGraph.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19273395985e143629e03dd4-86139273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9678a2a3ad5c6018c601e8d6b193fa8ca0fa73f' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/PickListDependency/DependencyGraph.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19273395985e143629e03dd4-86139273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'RECORD_MODEL' => 0,
    'MAPPED_VALUES' => 0,
    'MAPPED_SOURCE_PICKLIST_VALUES' => 0,
    'MAPPING' => 0,
    'SOURCE_PICKLIST_VALUES' => 0,
    'TARGET_PICKLIST_VALUES' => 0,
    'SOURCE_PICKLIST_VALUE' => 0,
    'SAFEHTML_SOURCE_PICKLIST_VALUES' => 0,
    'DECODED_MAPPED_SOURCE_PICKLIST_VALUES' => 0,
    'TRANSLATED_SOURCE_PICKLIST_VALUE' => 0,
    'MAPPED_TARGET_PICKLIST_VALUES' => 0,
    'targetValues' => 0,
    'TARGET_VALUE' => 0,
    'SAFEHTML_TARGET_PICKLIST_VALUES' => 0,
    'IS_SELECTED' => 0,
    'TRANSLATED_TARGET_VALUE' => 0,
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'SOURCE_VALUE' => 0,
    'TRANSLATED_SOURCE_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e143629e5b83',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e143629e5b83')) {function content_5e143629e5b83($_smarty_tpl) {?>



<div class="row"><div class="col-sm-12 col-xs-12 accordion"><span><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_CONFIGURE_DEPENDENCY_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;&nbsp;</span><a class="cursorPointer accordion-heading accordion-toggle" data-toggle="collapse" data-target="#dependencyHelp"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
..</a><div id="dependencyHelp" class="accordion-body collapse"><ul><br><li><?php echo vtranslate('LBL_CONFIGURE_DEPENDENCY_HELP_1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><br><li><?php echo vtranslate('LBL_CONFIGURE_DEPENDENCY_HELP_2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><br><li><?php echo vtranslate('LBL_CONFIGURE_DEPENDENCY_HELP_3',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="selectedCell" style="padding: 4px;"><?php echo vtranslate('Selected Values',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></li></ul></div></div></div><br><div class="row"><div class="col-sm-2 col-xs-2"><div class="btn-group"><button class="btn btn-default sourceValues" type="button"><?php echo vtranslate('LBL_SELECT_SOURCE_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div><div class="col-sm-10 col-xs-10"><div class="btn-group"><button class="btn btn-default selectAllValues" type="button"><?php echo vtranslate('LBL_SELECT_ALL_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-default unSelectAllValues" type="button"><?php echo vtranslate('LBL_UNSELECT_ALL_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div><br><?php $_smarty_tpl->tpl_vars['SELECTED_MODULE'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('sourceModule'), null, 0);?><?php $_smarty_tpl->tpl_vars['SOURCE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('sourcefield'), null, 0);?><?php $_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['MAPPED_TARGET_PICKLIST_VALUES'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['MAPPING'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MAPPING']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MAPPED_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING']->key => $_smarty_tpl->tpl_vars['MAPPING']->value){
$_smarty_tpl->tpl_vars['MAPPING']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(array_push($_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES']->value,$_smarty_tpl->tpl_vars['MAPPING']->value['sourcevalue']), null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('MAPPED_TARGET_PICKLIST_VALUES', null, 0);
$_smarty_tpl->tpl_vars['MAPPED_TARGET_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['MAPPING']->value['sourcevalue']] = $_smarty_tpl->tpl_vars['MAPPING']->value['targetvalues'];?><?php } ?><?php $_smarty_tpl->tpl_vars['DECODED_MAPPED_SOURCE_PICKLIST_VALUES'] = new Smarty_variable(array_map('decode_html',$_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES']->value), null, 0);?><input type="hidden" class="allSourceValues" value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value));?>
' /><div class="row depandencyTable" style="padding-right: 10px;"><div class="col-sm-2 col-xs-2" style="padding-right: 0px;"><table class="listview-table table-bordered table-condensed" style="width: 100%; border-collapse:collapse;"><thead><tr class="blockHeader"><th><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getSourceFieldLabel();?>
</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['TARGET_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TARGET_VALUE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TARGET_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['targetValuesLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['TARGET_VALUE']->key => $_smarty_tpl->tpl_vars['TARGET_VALUE']->value){
$_smarty_tpl->tpl_vars['TARGET_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['targetValuesLoop']['index']++;
?><tr><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['targetValuesLoop']['index']==0){?><td class="tableHeading" style="border: none;"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getTargetFieldLabel();?>
</td></tr><?php }else{ ?><td style="border: none;">&nbsp;</td></tr><?php }?><?php } ?></tbody></table></div><div class="col-sm-10 col-xs-10 dependencyMapping"><table class="listview-table table-bordered pickListDependencyTable" style="width:auto;"><thead><tr class="blockHeader"><?php  $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value = $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->key;
?><th data-source-value="<?php echo $_smarty_tpl->tpl_vars['SAFEHTML_SOURCE_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value];?>
" style="width:160px;<?php if (!empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value)&&!in_array($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['DECODED_MAPPED_SOURCE_PICKLIST_VALUES']->value)){?> display: none; <?php }?>"><?php echo $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->value;?>
</th><?php } ?></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['TRANSLATED_TARGET_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TRANSLATED_TARGET_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['TARGET_VALUE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TARGET_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TRANSLATED_TARGET_VALUE']->key => $_smarty_tpl->tpl_vars['TRANSLATED_TARGET_VALUE']->value){
$_smarty_tpl->tpl_vars['TRANSLATED_TARGET_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['TARGET_VALUE']->value = $_smarty_tpl->tpl_vars['TRANSLATED_TARGET_VALUE']->key;
?><tr><?php  $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value = $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_PICKLIST_VALUE']->key;
?><?php $_smarty_tpl->tpl_vars['targetValues'] = new Smarty_variable($_smarty_tpl->tpl_vars['MAPPED_TARGET_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['SAFEHTML_SOURCE_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value]], null, 0);?><?php $_smarty_tpl->tpl_vars['IS_SELECTED'] = new Smarty_variable(false, null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['targetValues']->value)||in_array($_smarty_tpl->tpl_vars['TARGET_VALUE']->value,$_smarty_tpl->tpl_vars['targetValues']->value)){?><?php $_smarty_tpl->tpl_vars['IS_SELECTED'] = new Smarty_variable(true, null, 0);?><?php }?><td	data-source-value='<?php echo $_smarty_tpl->tpl_vars['SAFEHTML_SOURCE_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value];?>
' data-target-value='<?php echo $_smarty_tpl->tpl_vars['SAFEHTML_TARGET_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['TARGET_VALUE']->value];?>
'class="<?php if ($_smarty_tpl->tpl_vars['IS_SELECTED']->value){?>selectedCell <?php }else{ ?>unselectedCell <?php }?> targetValue picklistValueMapping cursorPointer"<?php if (!empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value)&&!in_array($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['DECODED_MAPPED_SOURCE_PICKLIST_VALUES']->value)){?>style="display: none;" <?php }?>><?php if ($_smarty_tpl->tpl_vars['IS_SELECTED']->value){?><i class="fa fa-check pull-left"></i><?php }?><?php echo $_smarty_tpl->tpl_vars['TRANSLATED_TARGET_VALUE']->value;?>
</td><?php } ?></tr><?php } ?></tbody></table></div></div><div class="modal-dialog modal-lg sourcePicklistValuesModal modalCloneCopy hide"><div class="modal-content"><?php ob_start();?><?php echo vtranslate('LBL_SELECT_SOURCE_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><table  class="table table-condensed table-borderless" cellspacing="0" cellpadding="5"><tr><?php  $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['SOURCE_VALUE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sourceValuesLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_VALUE']->key => $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_VALUE']->value){
$_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['SOURCE_VALUE']->value = $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_VALUE']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sourceValuesLoop']['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sourceValuesLoop']['index']%3==0){?></tr><tr><?php }?><td><label><input type="checkbox" class="sourceValue <?php echo $_smarty_tpl->tpl_vars['SAFEHTML_SOURCE_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['SOURCE_VALUE']->value];?>
"data-source-value="<?php echo $_smarty_tpl->tpl_vars['SAFEHTML_SOURCE_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['SOURCE_VALUE']->value];?>
" value="<?php echo $_smarty_tpl->tpl_vars['SAFEHTML_SOURCE_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['SOURCE_VALUE']->value];?>
"<?php if (empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value)||in_array($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value,$_smarty_tpl->tpl_vars['DECODED_MAPPED_SOURCE_PICKLIST_VALUES']->value)){?> checked <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_SOURCE_VALUE']->value;?>
</label></td><?php } ?></tr></table></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div>
<?php }} ?>
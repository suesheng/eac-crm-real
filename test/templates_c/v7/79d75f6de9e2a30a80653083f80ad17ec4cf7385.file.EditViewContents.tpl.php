<?php /* Smarty version Smarty-3.1.7, created on 2019-02-18 10:40:59
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/EmailTemplates/partials/EditViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6874703895c6a8bbb654c53-18159252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79d75f6de9e2a30a80653083f80ad17ec4cf7385' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/EmailTemplates/partials/EditViewContents.tpl',
      1 => 1536167403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6874703895c6a8bbb654c53-18159252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PICKIST_DEPENDENCY_DATASOURCE' => 0,
    'MODULE' => 0,
    'WIDTHTYPE' => 0,
    'RECORD' => 0,
    'ALL_FIELDS' => 0,
    'MODULENAME' => 0,
    'COMPANY_FIELDS' => 0,
    'COMPANY_FIELD' => 0,
    'GENERAL_FIELDS' => 0,
    'GENERAL_FIELD' => 0,
    'IS_SYSTEM_TEMPLATE_EDIT' => 0,
    'TEMPLATE_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6a8bbb67dd4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6a8bbb67dd4')) {function content_5c6a8bbb67dd4($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)){?><input type="hidden" name="picklistDependency" value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
' /><?php }?><div name='editContent'><div class='fieldBlockContainer'><span><h4 class='fieldBlockHeader' ><?php echo vtranslate('SINGLE_EmailTemplates',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4></span><hr><table class="table table-borderless"><tbody><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 alignMiddle"><?php echo vtranslate('LBL_TEMPLATE_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_templatename" type="text" class="inputElement" data-rule-required="true" name="templatename" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('templatename');?>
"></td></tr><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 alignMiddle"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><textarea class="inputElement col-lg-12" id="description" name="description"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('description');?>
</textarea></td></tr></tbody></table></div><div class='fieldBlockContainer'><span><h4 class='fieldBlockHeader'><?php echo vtranslate('LBL_EMAIL_TEMPLATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4></span><hr><table class="table table-borderless"><tbody><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo vtranslate('LBL_SELECT_FIELD_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="filterContainer" ><input type=hidden name="moduleFields" data-value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['ALL_FIELDS']->value);?>
' /><span class="col-sm-4 col-xs-4 conditionRow"><select class="inputElement select2" name="modulename" data-rule-required="true"><option value=""><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULENAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS']->key => $_smarty_tpl->tpl_vars['FIELDS']->value){
$_smarty_tpl->tpl_vars['FIELDS']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULENAME']->value = $_smarty_tpl->tpl_vars['FIELDS']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULENAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('module')==$_smarty_tpl->tpl_vars['MODULENAME']->value){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULENAME']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</option><?php } ?></select></span>&nbsp;&nbsp;<span class="col-sm-6 col-xs-6"><select class="inputElement select2 col-sm-5 col-xs-5" id="templateFields" name="templateFields"><option value=""><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></span></span></td></tr><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo vtranslate('LBL_GENERAL_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="col-sm-6 col-xs-6"><select class="inputElement select2 col-sm5 col-xs-5" id="generalFields" name="generalFields"><option value=""><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><optgroup label="<?php echo vtranslate('LBL_COMPANY_DETAILS','Settings:Vtiger');?>
"><?php  $_smarty_tpl->tpl_vars['COMPANY_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['COMPANY_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['COMPANY_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['COMPANY_FIELD']->key => $_smarty_tpl->tpl_vars['COMPANY_FIELD']->value){
$_smarty_tpl->tpl_vars['COMPANY_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['COMPANY_FIELD']->key;
?><option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['COMPANY_FIELD']->value[1];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
"><?php echo $_smarty_tpl->tpl_vars['COMPANY_FIELD']->value[0];?>
</option><?php } ?></optgroup><optgroup label="<?php echo vtranslate('LBL_GENERAL_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['GENERAL_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GENERAL_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GENERAL_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GENERAL_FIELD']->key => $_smarty_tpl->tpl_vars['GENERAL_FIELD']->value){
$_smarty_tpl->tpl_vars['GENERAL_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['GENERAL_FIELD']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['GENERAL_FIELD']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['GENERAL_FIELD']->value[0];?>
</option><?php } ?></optgroup></select></span></td></tr><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo vtranslate('LBL_SUBJECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="col-sm-6 col-xs-6"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_subject" type="text" <?php if ($_smarty_tpl->tpl_vars['IS_SYSTEM_TEMPLATE_EDIT']->value){?> disabled="disabled" <?php }?> class="inputElement col-lg-12" data-rule-required="true" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
"  spellcheck="true" /></div></td></tr></tbody></table><div class="row padding-bottom1per"><?php $_smarty_tpl->tpl_vars["TEMPLATE_CONTENT"] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->get('body'), null, 0);?><textarea id="templatecontent" name="templatecontent" <?php if ($_smarty_tpl->tpl_vars['IS_SYSTEM_TEMPLATE_EDIT']->value){?> data-rule-required="true" <?php }?> ><?php if (!empty($_smarty_tpl->tpl_vars['TEMPLATE_CONTENT']->value)){?><?php echo $_smarty_tpl->tpl_vars['TEMPLATE_CONTENT']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DefaultContentForTemplates.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></textarea></div></div></div><?php }} ?>
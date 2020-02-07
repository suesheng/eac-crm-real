<?php /* Smarty version Smarty-3.1.7, created on 2019-05-21 10:10:31
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/CustomerPortal/PortalFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5112534915ce3ce976f2cb0-46370341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '681c55877f91d816be4d440fb8742f11a25d2cff' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/CustomerPortal/PortalFields.tpl',
      1 => 1536167404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5112534915ce3ce976f2cb0-46370341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'ALLFIELDS' => 0,
    'SELECTED_FIELDS' => 0,
    'RELATED_MODULES' => 0,
    'RECORD_PERMISSIONS' => 0,
    'QUALIFIED_MODULE' => 0,
    'RECORD_VISIBLE' => 0,
    'VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ce3ce9777507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3ce9777507')) {function content_5ce3ce9777507($_smarty_tpl) {?>

<input type="hidden" name="availableFields_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['ALLFIELDS']->value);?>
' /><input type="hidden" name="selectedFields_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value);?>
' /><input type="hidden" name="relatedModules_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['RELATED_MODULES']->value[$_smarty_tpl->tpl_vars['MODULE']->value]);?>
' /><input type="hidden" name="recordPermissions_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['RECORD_PERMISSIONS']->value);?>
'/><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row" id="moduleData_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><h4 style="margin-top: 15px;"><?php echo vtranslate('LBL_PORTAL_FIELDS_PRIVILEGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><hr style="margin-top: 0px;"><div class="col-sm-6 col-xs-6 portal-fields-container-wrapper"><div class="col-sm-12 col-xs-12"><div class="col-sm-6 col-xs-6" style="padding-right:50px;"><label><?php echo vtranslate('LBL_READ_ONLY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="portal-fields-switch" id="readOnlySwitch" disabled></div></div><div class="col-sm-6 col-xs-6"><label><?php echo vtranslate('LBL_READ_AND_WRITE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="portal-fields-switch portal-fields-switchOn" id="readWriteSwitch" disabled></div></div><div class="col-sm-10 col-xs-10" style="padding:10px;"><span class="redColor">*</span>Mandatory Fields</div></div><div class="row"><div id="fieldRows_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" class="col-sm-12"></div></div><br><div class="row"><div class="col-sm-12 addFieldsBlock"><div class="col-sm-8"><select class="inputElement select2 addFields" name="addField_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" id="addField_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" multiple><option></option></select></div><div class="col-sm-4"><button title="<?php echo vtranslate('LBL_ADD_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="btn btn-default" id="addFieldButton_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><?php echo vtranslate('LBL_ADD_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></div><div class="col-sm-6 col-xs-6 portal-related-information"><h4 style="margin-top: 0px;"><?php echo vtranslate('LBL_RECORD_VISIBILITY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><div class="portal-record-privilege  radio-group"><div class="radio label-radio"><label><input type="radio"  id="all" name="recordvisible_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value="all" <?php if ($_smarty_tpl->tpl_vars['RECORD_VISIBLE']->value['all']==1||$_smarty_tpl->tpl_vars['MODULE']->value=='Faq'){?>checked<?php }?>/>&nbsp;<?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Products'||$_smarty_tpl->tpl_vars['MODULE']->value=='Services'){?><?php echo vtranslate('products_or_services',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
<?php }elseif($_smarty_tpl->tpl_vars['MODULE']->value=='Faq'){?><?php echo vtranslate('faq',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
<?php }else{ ?><?php echo vtranslate('all',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
<?php }?></label></div><?php if ($_smarty_tpl->tpl_vars['MODULE']->value!='Faq'){?><div class="radio label-radio"><label><input type="radio" id="onlymine" name="recordvisible_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value="onlymine" <?php if ($_smarty_tpl->tpl_vars['RECORD_VISIBLE']->value['onlymine']==1){?>checked<?php }?>/>&nbsp;<?php echo vtranslate('onlymine',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
</label></div><?php }?></div><br><?php if ($_smarty_tpl->tpl_vars['MODULE']->value!='Faq'){?><h4><?php echo vtranslate('LBL_RELATED_INFORMATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><div class="portal-record-privilege"><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULES']->value[$_smarty_tpl->tpl_vars['MODULE']->value]){?><?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value[$_smarty_tpl->tpl_vars['MODULE']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?><div class="checkbox label-checkbox"<?php if (!vtlib_isModuleActive($_smarty_tpl->tpl_vars['VALUE']->value['name'])&&$_smarty_tpl->tpl_vars['VALUE']->value['name']!='History'){?> hidden <?php }?>><label><input class="relmoduleinfo_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" data-relmodule ="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value['name'];?>
" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['VALUE']->value['value']){?>checked<?php }?>/> <?php echo vtranslate($_smarty_tpl->tpl_vars['VALUE']->value['name'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><br></div><?php } ?><?php }?></div><?php }?><br><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'||$_smarty_tpl->tpl_vars['MODULE']->value=='Assets'){?><h4><?php echo vtranslate('LBL_RECORD_PERMISSIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><div class="portal-record-privilege" id="recordPrivilege_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'){?><div class="checkbox label-checkbox"><label><input class="recordpermissions" name="create" id="create-permission" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_PERMISSIONS']->value['create'];?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_PERMISSIONS']->value['create']){?>checked<?php }?>/> <?php echo vtranslate('LBL_CREATE_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><br></div><?php }?><div class="checkbox label-checkbox"><label><input class="recordpermissions" name="edit" id="edit-permission" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_PERMISSIONS']->value['edit'];?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_PERMISSIONS']->value['edit']){?>checked<?php }?>/> <?php echo vtranslate('LBL_EDIT_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><br></div></div><?php }?></div></div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2018-12-18 15:25:56
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Inventory/partials/EditViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11416287485bcdce9b172ec8-72641664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07d871c83e504d17c018f2ca56830c702a15668c' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Inventory/partials/EditViewContents.tpl',
      1 => 1545145998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11416287485bcdce9b172ec8-72641664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdce9b1d575',
  'variables' => 
  array (
    'PICKIST_DEPENDENCY_DATASOURCE' => 0,
    'DUPLICATE_RECORDS' => 0,
    'MODULE' => 0,
    'RECORD_STRUCTURE' => 0,
    'BLOCK_LABEL' => 0,
    'BLOCK_FIELDS' => 0,
    'FIELD_MODEL' => 0,
    'refrenceList' => 0,
    'COUNTER' => 0,
    'isReferenceField' => 0,
    'refrenceListCount' => 0,
    'REFERENCED_MODULE_ID' => 0,
    'REFERENCED_MODULE_STRUCTURE' => 0,
    'value' => 0,
    'REFERENCED_MODULE_NAME' => 0,
    'RECORD_ID' => 0,
    'RECORD_STRUCTURE_MODEL' => 0,
    'CURRENTDATE_CUSTOM_TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdce9b1d575')) {function content_5bcdce9b1d575($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)){?><input type="hidden" name="picklistDependency" value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
' /><?php }?><div name='editContent'><?php if ($_smarty_tpl->tpl_vars['DUPLICATE_RECORDS']->value){?><div class="fieldBlockContainer duplicationMessageContainer"><div class="duplicationMessageHeader"><b><?php echo vtranslate('LBL_DUPLICATES_DETECTED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></div><div><?php echo getDuplicatesPreventionMessage($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['DUPLICATE_RECORDS']->value);?>
</div></div><?php }?><?php  $_smarty_tpl->tpl_vars['BLOCK_FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value){
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key;
?><?php if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value=='LBL_ITEM_DETAILS'){?><?php continue 1?><?php }?><?php if (count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value)>0){?><div class='fieldBlockContainer' data-block="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><h4 class='fieldBlockHeader'><?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4><hr><table class="table table-borderless <?php if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value=='LBL_ADDRESS_INFORMATION'){?> addressBlock<?php }?>"><?php if (($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value=='LBL_ADDRESS_INFORMATION')&&($_smarty_tpl->tpl_vars['MODULE']->value!='PurchaseOrder')){?><tr><td class="fieldLabel " name="copyHeader1"><label  name="togglingHeader"><?php echo vtranslate('LBL_BILLING_ADDRESS_FROM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue" name="copyAddress1"><div class="radio"><label><input type="radio" name="copyAddressFromRight" class="accountAddress" data-copy-address="billing" checked="checked">&nbsp;<?php echo vtranslate('SINGLE_Accounts',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="radio"><label><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Quotes'){?><input type="radio" name="copyAddressFromRight" class="contactAddress" data-copy-address="billing" checked="checked">&nbsp;<?php echo vtranslate('Related To',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }else{ ?><input type="radio" name="copyAddressFromRight" class="contactAddress" data-copy-address="billing" checked="checked">&nbsp;<?php echo vtranslate('SINGLE_Contacts',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></label></div><div class="radio" name="togglingAddressContainerRight"><label><input type="radio" name="copyAddressFromRight" class="shippingAddress" data-target="shipping" checked="checked">&nbsp;<?php echo vtranslate('Shipping Address',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="radio hide" name="togglingAddressContainerLeft"><label><input type="radio" name="copyAddressFromRight"  class="billingAddress" data-target="billing" checked="checked">&nbsp;<?php echo vtranslate('Billing Address',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div></td><td class="fieldLabel" name="copyHeader2"><label  name="togglingHeader"><?php echo vtranslate('LBL_SHIPPING_ADDRESS_FROM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue" name="copyAddress2"><div class="radio"><label><input type="radio" name="copyAddressFromLeft" class="accountAddress" data-copy-address="shipping" checked="checked">&nbsp;<?php echo vtranslate('SINGLE_Accounts',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="radio"><label><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Quotes'){?><input type="radio" name="copyAddressFromLeft" class="contactAddress" data-copy-address="shipping" checked="checked">&nbsp;<?php echo vtranslate('Related To',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }else{ ?><input type="radio" name="copyAddressFromLeft" class="contactAddress" data-copy-address="shipping" checked="checked">&nbsp;<?php echo vtranslate('SINGLE_Contacts',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></label></div><div class="radio" name="togglingAddressContainerLeft"><label><input type="radio" name="copyAddressFromLeft" class="billingAddress" data-target="billing" checked="checked">&nbsp;<?php echo vtranslate('Billing Address',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="radio hide" name="togglingAddressContainerRight"><label><input type="radio" name="copyAddressFromLeft" class="shippingAddress" data-target="shipping" checked="checked">&nbsp;<?php echo vtranslate('Shipping Address',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div></td></tr><?php }?><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars["isReferenceField"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php $_smarty_tpl->tpl_vars["refrenceList"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList(), null, 0);?><?php $_smarty_tpl->tpl_vars["refrenceListCount"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['refrenceList']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()==true){?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="19"){?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value=='1'){?><td></td><td></td></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }?><td class="fieldLabel alignMiddle"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> <span class="redColor">*</span> <?php }?><?php if ($_smarty_tpl->tpl_vars['isReferenceField']->value=="reference"){?><?php if ($_smarty_tpl->tpl_vars['refrenceListCount']->value>1){?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_ID"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_STRUCTURE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getReferenceModule($_smarty_tpl->tpl_vars['REFERENCED_MODULE_ID']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCTURE']->value)){?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCTURE']->value->get('name'), null, 0);?><?php }?><select style="width: 140px;" class="select2 referenceModulesList"><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['refrenceList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['value']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['value']->value);?>
</option><?php } ?></select><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?>&nbsp;&nbsp;</td><td class="fieldValue" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='boolean'){?> style="width:25%" <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='19'){?> colspan="3" <?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?> <?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='image'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='file'){?><div class='col-lg-4 col-md-4 redColor'><?php echo vtranslate('LBL_NOTE_EXISTING_ATTACHMENTS_WILL_BE_REPLACED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><?php }?><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value!=''){?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()=='subject'){?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Invoice'){?><input id="Invoice_editView_fieldName_subject" type="hidden" data-fieldname="subject" data-fieldtype="string" class="inputElement nameField" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getRecordName();?>
" data-rule-required="true" aria-required="true"><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Quotes'){?><input id="Quotes_editView_fieldName_subject" type="hidden" data-fieldname="subject" data-fieldtype="string" class="inputElement nameField" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getRecordName();?>
" data-rule-required="true" aria-required="true"><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='PurchaseOrder'){?><input id="PurchaseOrder_editView_fieldName_subject" type="hidden" data-fieldname="subject" data-fieldtype="string" class="inputElement nameField" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getRecordName();?>
" data-rule-required="true" aria-required="true"><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='SalesOrder'){?><input id="SalesOrder_editView_fieldName_subject" type="hidden" data-fieldname="subject" data-fieldtype="string" class="inputElement nameField" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getRecordName();?>
" data-rule-required="true" aria-required="true"><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()=='subject'&&($_smarty_tpl->tpl_vars['MODULE']->value=='PurchaseOrder'||$_smarty_tpl->tpl_vars['MODULE']->value=='Quotes'||$_smarty_tpl->tpl_vars['MODULE']->value=='Invoice'||$_smarty_tpl->tpl_vars['MODULE']->value=='SalesOrder')){?><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getRecordName();?>
" class="inputElement nameField" disabled><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()=='subject'){?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Invoice'){?><input id="Invoice_editView_fieldName_subject" type="hidden" data-fieldname="subject" data-fieldtype="string" class="inputElement nameField" name="subject" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CURRENTDATE_CUSTOM_TITLE']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
" data-rule-required="true" aria-required="true"><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Quotes'){?><input id="Quotes_editView_fieldName_subject" type="hidden" data-fieldname="subject" data-fieldtype="string" class="inputElement nameField" name="subject" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CURRENTDATE_CUSTOM_TITLE']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
" data-rule-required="true" aria-required="true"><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='PurchaseOrder'){?><input id="PurchaseOrder_editView_fieldName_subject" type="hidden" data-fieldname="subject" data-fieldtype="string" class="inputElement nameField" name="subject" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CURRENTDATE_CUSTOM_TITLE']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
" data-rule-required="true" aria-required="true"><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='SalesOrder'){?><input id="SalesOrder_editView_fieldName_subject" type="hidden" data-fieldname="subject" data-fieldtype="string" class="inputElement nameField" name="subject" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CURRENTDATE_CUSTOM_TITLE']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
" data-rule-required="true" aria-required="true"><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()=='subject'&&($_smarty_tpl->tpl_vars['MODULE']->value=='PurchaseOrder'||$_smarty_tpl->tpl_vars['MODULE']->value=='Quotes'||$_smarty_tpl->tpl_vars['MODULE']->value=='Invoice'||$_smarty_tpl->tpl_vars['MODULE']->value=='SalesOrder')){?><input type="text" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CURRENTDATE_CUSTOM_TITLE']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>
" class="inputElement nameField" disabled><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }?></td><?php }?><?php } ?><?php if ((1 & $_smarty_tpl->tpl_vars['COUNTER']->value)){?><td></td><td></td><?php }?></tr></table></div><?php }?><?php } ?></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/LineItemsEdit.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
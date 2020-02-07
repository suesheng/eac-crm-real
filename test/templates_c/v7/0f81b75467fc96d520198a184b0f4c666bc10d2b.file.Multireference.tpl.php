<?php /* Smarty version Smarty-3.1.7, created on 2018-12-04 08:09:59
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Events/uitypes/Multireference.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14435901625c0636572130d4-79184926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f81b75467fc96d520198a184b0f4c666bc10d2b' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Events/uitypes/Multireference.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14435901625c0636572130d4-79184926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'REFERENCE_LIST' => 0,
    'REFERENCE_LIST_COUNT' => 0,
    'DISPLAYID' => 0,
    'REFERENCED_MODULE_STRUCT' => 0,
    'REFERENCED_MODULE_NAME' => 0,
    'FIELD_NAME' => 0,
    'FIELD_INFO' => 0,
    'displayId' => 0,
    'MODULE' => 0,
    'RELATED_CONTACTS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c0636572399b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0636572399b')) {function content_5c0636572399b($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars["REFERENCE_LIST"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList(), null, 0);?><?php $_smarty_tpl->tpl_vars["REFERENCE_LIST_COUNT"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><div class="referencefield-wrapper"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?><input name="popupReferenceModule" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCE_LIST']->value[0];?>
" /><?php }?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2>1){?><?php $_smarty_tpl->tpl_vars["DISPLAYID"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_STRUCT"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getReferenceModule($_smarty_tpl->tpl_vars['DISPLAYID']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCT']->value)){?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCT']->value->get('name'), null, 0);?><?php }?><?php if (in_array($_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['REFERENCE_LIST']->value)){?><input name="popupReferenceModule" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value;?>
" /><?php }else{ ?><input name="popupReferenceModule" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCE_LIST']->value[0];?>
" /><?php }?><?php }?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
" class="sourceField" data-displayvalue='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' data-multiple='true'/><div class="input-group"><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldtype="reference" type="text"class="marginLeftZero autoComplete inputElement"value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['displayId']->value);?>
"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' data-fieldtype="multireference" placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?>/><span class="input-group-addon relatedPopup cursorPointer" title="<?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="height:auto;width: 30px;"><i id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="fa fa-search"></i></span><input type="hidden" name="relatedContactInfo" data-value='<?php echo json_encode($_smarty_tpl->tpl_vars['RELATED_CONTACTS']->value,@JSON_HEX_APOS);?>
' /></div><!-- Show the add button only if it is edit view  --><?php if ($_REQUEST['view']=='Edit'){?><span class="createReferenceRecord cursorPointer clearfix" title="<?php echo vtranslate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_create" class="fa fa-plus"></i></span><?php }?></div>
<?php }} ?>
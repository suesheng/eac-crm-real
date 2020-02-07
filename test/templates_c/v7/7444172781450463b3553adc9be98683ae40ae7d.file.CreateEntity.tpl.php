<?php /* Smarty version Smarty-3.1.7, created on 2018-10-30 13:31:58
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/CreateEntity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21224632845bd85d4e00aba2-26112485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7444172781450463b3553adc9be98683ae40ae7d' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/CreateEntity.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21224632845bd85d4e00aba2-26112485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TASK_OBJECT' => 0,
    'TASK_ID' => 0,
    'REFERENCE_FIELD_NAME' => 0,
    'RELATED_MODULE_MODEL_NAME' => 0,
    'QUALIFIED_MODULE' => 0,
    'FIELD_VALUE_MAPPING' => 0,
    'FIELD_MAP' => 0,
    'RELATED_MODULE_MODEL' => 0,
    'SELECTED_FIELD_MODEL' => 0,
    'DISABLE_ROW' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_INFO' => 0,
    'SOURCE_MODULE' => 0,
    'MANDATORY_FIELD' => 0,
    'MODULE_MODEL' => 0,
    'FIELD_EXPRESSIONS' => 0,
    'MANDATORY_FIELD_MODELS' => 0,
    'MANDATORY_FIELD_MODEL' => 0,
    'FIELD_TYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd85d4e062d3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd85d4e062d3')) {function content_5bd85d4e062d3($_smarty_tpl) {?>



<input type="hidden" id="fieldValueMapping" name="field_value_mapping" value='<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->field_value_mapping;?>
' />
<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['TASK_ID']->value){?><?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->reference_field;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['REFERENCE_FIELD_NAME']->value;?>
<?php }?>" name='reference_field' id='reference_field' />
<div class="conditionsContainer" id="save_fieldvaluemapping">
	<?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value!=''&&getTabid($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value)){?>
		<div>
			<button type="button" class="btn btn-default" id="addFieldBtn"><?php echo vtranslate('LBL_ADD_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
		</div><br>
		<?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->entity_type), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['FIELD_VALUE_MAPPING'] = new Smarty_variable(ZEND_JSON::decode($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->field_value_mapping), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['FIELD_MAP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MAP']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FIELD_VALUE_MAPPING']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MAP']->key => $_smarty_tpl->tpl_vars['FIELD_MAP']->value){
$_smarty_tpl->tpl_vars['FIELD_MAP']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['FIELD_MAP']->value['fieldname']), null, 0);?>
			<?php if (empty($_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value)){?>
				<?php continue 1?>
			<?php }?>
			<?php $_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL_FIELD_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value->getFieldDataType(), null, 0);?>
			<div class="row conditionRow form-group">
				<span class="col-lg-4">
					<select name="fieldname" class="select2" style="min-width: 250px" <?php if ($_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value->isMandatory()||($_smarty_tpl->tpl_vars['DISABLE_ROW']->value=='true')){?> disabled="" <?php }?> >
						<option value="none"></option>
						<?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAP']->value['fieldname']==$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')){?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()){?><?php $_smarty_tpl->tpl_vars['MANDATORY_FIELD'] = new Smarty_variable(true, null, 0);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['MANDATORY_FIELD'] = new Smarty_variable(false, null, 0);?> <?php }?><?php $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?> selected=""<?php }?> data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" data-fieldinfo='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
' >
								<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());?>
<?php if ($_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value->isMandatory()&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()!='assigned_user_id'){?><span class="redColor">*</span><?php }?>
							</option>	
						<?php } ?>
					</select>
				</span>
				<span>
					<input name="modulename" type="hidden"
						<?php if ($_smarty_tpl->tpl_vars['FIELD_MAP']->value['modulename']==$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value){?> value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" <?php }?>
						<?php if ($_smarty_tpl->tpl_vars['FIELD_MAP']->value['modulename']==$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value){?> value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value;?>
" <?php }?> 
					/>
				</span>
				<span class="fieldUiHolder col-lg-4">
					<input type="text" class="getPopupUi inputElement" <?php if (($_smarty_tpl->tpl_vars['DISABLE_ROW']->value=='true')){?> disabled=""<?php }?> readonly="" name="fieldValue" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MAP']->value['value'];?>
" />
					<input type="hidden" name="valuetype" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MAP']->value['valuetype'];?>
" />
				</span>
				<?php if ($_smarty_tpl->tpl_vars['MANDATORY_FIELD']->value!=true){?>
					<span class="cursorPointer col-lg-1">
						<i class="alignMiddle deleteCondition fa fa-trash"></i>
					</span>
				<?php }?>
			</div>
		<?php } ?>

		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("FieldExpressions.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RELATED_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value,'MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'FIELD_EXPRESSIONS'=>$_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS']->value), 0);?>

	<?php }else{ ?>
		<?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value){?>
			<div>
				<button type="button" class="btn btn-default" id="addFieldBtn"><?php echo vtranslate('LBL_ADD_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div><br>
			<?php $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODELS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getMandatoryFieldModels(), null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->_loop = true;
?>
				<?php if (in_array($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->getReferenceList())){?>
					<?php continue 1?>
				<?php }?>
				<div class="row conditionRow form-group">
					<span class="col-lg-4">
						<select name="fieldname" class="select2" disabled="" style="min-width: 250px">
							<option value="none"></option>
							<?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?>
								<?php $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')==$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->get('name')){?> <?php $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?> selected=""<?php }?> data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" data-fieldinfo='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
' >
									<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());?>
<span class="redColor">*</span>
								</option>	
							<?php } ?>
						</select>
					</span>
					<span>
						<?php if (($_smarty_tpl->tpl_vars['FIELD_TYPE']->value=='picklist'||$_smarty_tpl->tpl_vars['FIELD_TYPE']->value=='multipicklist')){?>
							<input type="hidden" name="modulename" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->get('name');?>
" />
						<?php }else{ ?>
							<input type="hidden" name="modulename" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" />
						<?php }?>
					</span>
					<span class="fieldUiHolder col-lg-4">
						<input type="text" class="getPopupUi inputElement" name="fieldValue" value="" />
						<input type="hidden" name="valuetype" value="rawtext" />
					</span>
				</div>
			<?php } ?>
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("FieldExpressions.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RELATED_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value,'MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'FIELD_EXPRESSIONS'=>$_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS']->value), 0);?>

		<?php }?>
	<?php }?>
</div><br>
<?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value){?>
	<div class="row form-group basicAddFieldContainer hide">
		<span class="col-lg-4">
			<select name="fieldname" style="min-width: 250px">
				<option value="none"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
				<?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?>
					<?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()){?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" data-fieldinfo='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
' >
						<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());?>

					</option>
					<?php }?>
				<?php } ?>
			</select>
		</span>
		<span>
			<input type="hidden" name="modulename" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" />
		</span>
		<span class="fieldUiHolder col-lg-4">
			<input type="text" class="inputElement" readonly="" name="fieldValue" value="" />
			<input type="hidden" name="valuetype" value="rawtext" />
		</span>
		<span class="cursorPointer col-lg-1">
			<i class="alignMiddle deleteCondition fa fa-trash"></i>
		</span>
	</div>
<?php }?>
<?php }} ?>
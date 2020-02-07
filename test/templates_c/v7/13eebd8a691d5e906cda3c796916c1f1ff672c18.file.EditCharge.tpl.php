<?php /* Smarty version Smarty-3.1.7, created on 2019-07-29 08:49:36
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/EditCharge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10492878835d3eb320538250-04428789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13eebd8a691d5e906cda3c796916c1f1ff672c18' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/EditCharge.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10492878835d3eb320538250-04428789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CHARGE_MODEL' => 0,
    'CURRENT_USER_MODEL' => 0,
    'CHARGE_FORMAT' => 0,
    'WIDTHTYPE' => 0,
    'CHARGE_ID' => 0,
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
    'TITLE' => 0,
    'IS_PERCENT_FORMAT' => 0,
    'CHARGE_VALUE' => 0,
    'i' => 0,
    'TAX_REGIONS' => 0,
    'TAX_REGION_MODEL' => 0,
    'TAX_REGION_ID' => 0,
    'REGIONS_INFO' => 0,
    'REGION_VALUE' => 0,
    'CHARGE_TAXES' => 0,
    'CHARGE_TAX_MODEL' => 0,
    'TAX_ID' => 0,
    'SELECTED_TAXES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d3eb3205df41',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d3eb3205df41')) {function content_5d3eb3205df41($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['CHARGE_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getId(), null, 0);?><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><?php $_smarty_tpl->tpl_vars['CHARGE_FORMAT'] = new Smarty_variable($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('format'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['CHARGE_FORMAT']->value=='Percent'){?><?php $_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT'] = new Smarty_variable(true, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT'] = new Smarty_variable(false, null, 0);?><?php }?><input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 id="widthHeight"><div class="chargeModalContainer modal-dialog modal-xs"><div class="modal-content"><form id="editCharge" class="form-horizontal"><?php if (!empty($_smarty_tpl->tpl_vars['CHARGE_ID']->value)){?><?php ob_start();?><?php echo vtranslate('LBL_EDIT_CHARGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php }else{ ?><?php ob_start();?><?php echo vtranslate('LBL_ADD_NEW_CHARGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TITLE'] = new Smarty_variable($_tmp2, null, 0);?><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0);?>
<input type="hidden" name="chargeid" value="<?php echo $_smarty_tpl->tpl_vars['CHARGE_ID']->value;?>
" /><div class="modal-body" id="scrollContainer"><div class=""><div class="block row nameContainer"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_CHARGE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-5"><input class="inputElement" type="text" name="name" placeholder="<?php echo vtranslate('LBL_ENTER_CHARGE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getName();?>
" data-rule-required="true" data-prompt-position="bottomLeft" /></div><div class="col-lg-3"></div></div><div class="row block formatContainer"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_CHARGE_FORMAT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-lg-5"><label class="span radio-group" id="flat"><input type="radio" name="format" class="input-medium" <?php if (!$_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value||!$_smarty_tpl->tpl_vars['CHARGE_ID']->value){?>checked<?php }?> value="Flat" />&nbsp;&nbsp;<span class="radio-label"><?php echo vtranslate('LBL_DIRECT_PRICE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label>&nbsp;&nbsp;<label class="span radio-group" id="percent"><input type="radio" name="format" class="input-medium" <?php if ($_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value){?>checked<?php }?> value="Percent" />&nbsp;&nbsp;<span class="radio-label"><?php echo vtranslate('LBL_PERCENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label>&nbsp;&nbsp;</div><div class="col-lg-3"></div></div><div class="row block typeContainer"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_CHARGE_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-lg-7"><label class="span radio-group" id="fixed"><input type="radio" name="type" class="input-medium" <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('type')=='Fixed'||!$_smarty_tpl->tpl_vars['CHARGE_ID']->value){?>checked<?php }?> value="Fixed" />&nbsp;&nbsp;<span class="radio-label"><?php echo vtranslate('LBL_FIXED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label>&nbsp;&nbsp;<label class="span radio-group" id="variable"><input type="radio" name="type" class="input-medium" <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('type')=='Variable'){?>checked<?php }?> value="Variable" />&nbsp;&nbsp;<span class="radio-label"><?php echo vtranslate('LBL_VARIABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label>&nbsp;&nbsp;</div><div class="col-lg-1"></div></div><div class="row block chargeValueContainer <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('type')=='Variable'){?>hide<?php }?>"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_CHARGE_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-5"><div class="input-group"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getValue();?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getValue()){?><?php echo number_format($_tmp3,getCurrencyDecimalPlaces(),'.','');?>
<?php }else{ ?><?php echo "0";?><?php }?><?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['CHARGE_VALUE'] = new Smarty_variable($_tmp4, null, 0);?><span style="height:30px;width:30px;" class="input-group-addon percentIcon pull-left <?php if (!$_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value){?>hide<?php }?>">%</span><input class="inputEle input-medium" type="text" name="value" placeholder="<?php echo vtranslate('LBL_ENTER_CHARGE_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['CHARGE_VALUE']->value;?>
" data-rule-required="true" <?php if ($_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value){?>data-rule-inventory_percentage="true"<?php }else{ ?>data-rule-PositiveNumber="true"<?php }?> /></div></div><div class="col-lg-3"></div></div><div class="row block regionsContainer <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('type')!='Variable'){?>hide<?php }?>" style="padding: 0px 70px 0px 40px;"><table class="table table-bordered regionsTable"><tr><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="width:60%;"><strong><?php echo vtranslate('LBL_REGIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="text-align: center; width:40%;"><strong><?php echo vtranslate('LBL_CHARGE_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="percentIcon <?php if (!$_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value){?>hide<?php }?>">&nbsp;(%)</span></strong></th></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label><?php echo vtranslate('LBL_DEFAULT_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="text-align: center;"><input class="inputElement input-medium" type="text" name="defaultValue" value="<?php echo $_smarty_tpl->tpl_vars['CHARGE_VALUE']->value;?>
" data-rule-required="true" <?php if ($_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value){?>data-rule-inventory_percentage="true"<?php }else{ ?>data-rule-PositiveNumber="true"<?php }?> /></td></tr><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['REGIONS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['REGIONS_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getSelectedRegions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['REGIONS_INFO']->key => $_smarty_tpl->tpl_vars['REGIONS_INFO']->value){
$_smarty_tpl->tpl_vars['REGIONS_INFO']->_loop = true;
?><tr><td class="regionsList <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="deleteRow close" style="float:left;">×</span>&nbsp;<select id="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-placeholder="<?php echo vtranslate('LBL_SELECT_REGIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" name="regions[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][list]" class="regions select2 columns span3" multiple="" data-rule-required="true" style="width:90%;">'<?php  $_smarty_tpl->tpl_vars['TAX_REGION_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TAX_REGIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->key => $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value){
$_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['TAX_REGION_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getId(), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_ID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['TAX_REGION_ID']->value,$_smarty_tpl->tpl_vars['REGIONS_INFO']->value['list'])){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getName();?>
</option><?php } ?></select></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="text-align: center;"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['REGIONS_INFO']->value['value'];?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getValue()){?><?php echo number_format($_tmp5,getCurrencyDecimalPlaces(),'.','');?>
<?php }else{ ?><?php echo "0";?><?php }?><?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['REGION_VALUE'] = new Smarty_variable($_tmp6, null, 0);?><input class="inputElement valuesList input-medium" type="text" name="regions[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][value]" value="<?php echo $_smarty_tpl->tpl_vars['REGION_VALUE']->value;?>
" data-rule-required="true" <?php if ($_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value){?>data-rule-inventory_percentage="true"<?php }else{ ?>data-rule-PositiveNumber="true"<?php }?> /></td></tr><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?><?php } ?><input type="hidden" class="regionsCount" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" /></table><span class="addNewTaxBracket"><a href="#"><u><?php echo vtranslate('LBL_ADD_TAX_BRACKET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</u></a><select class="taxRegionElements hide"><?php  $_smarty_tpl->tpl_vars['TAX_REGION_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TAX_REGIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->key => $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value){
$_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getName();?>
</option><?php } ?></select></span><br><br><div><i class="fa fa-info-circle"></i> <?php echo vtranslate('LBL_TAX_BRACKETS_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><br><br></div><div class="row block"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_IS_TAXABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-lg-7"><input type="hidden" name="istaxable" value="0" /><label><input type="checkbox" name="istaxable" value="1" class="isTaxable alignBottom" <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('istaxable')==1||!$_smarty_tpl->tpl_vars['CHARGE_ID']->value){?> checked <?php }?> />&nbsp;&nbsp;<span><?php echo vtranslate('LBL_ENABLE_TAXES_FOR_CHARGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label></div><div class="col-lg-1"></div></div><div class="row block taxContainer <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('istaxable')!=1&&$_smarty_tpl->tpl_vars['CHARGE_ID']->value){?>hide<?php }?>"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_SELECT_TAX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-7"><div class=""><select data-placeholder="<?php echo vtranslate('LBL_SELECT_TAXES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" id="selectTax" class="select2 columns inputEle" multiple="" name="taxes" data-rule-required="true"><?php  $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TAX_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CHARGE_TAXES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->key => $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value){
$_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TAX_ID']->value = $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->key;
?><?php if ($_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->isDeleted()==false){?><option value="<?php echo $_smarty_tpl->tpl_vars['TAX_ID']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SELECTED_TAXES']->value)&&in_array($_smarty_tpl->tpl_vars['TAX_ID']->value,$_smarty_tpl->tpl_vars['SELECTED_TAXES']->value)){?>selected=""<?php }?>><?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->getName();?>
 (<?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->getTax();?>
%)</option><?php }?><?php } ?></select></div><div class="">(<?php echo vtranslate('LBL_SELECT_TAX_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
)</div></div><div class="col-lg-1"></div></div><div style="padding: 0px 40px;"><i class="fa fa-info-circle"></i> <?php echo vtranslate('LBL_CHARGE_STORE_DISC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 (<?php echo Vtiger_Functions::getCurrencyName(CurrencyField::getDBCurrencyId());?>
)</div><br><br></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2019-05-07 08:42:49
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/ChargesAndItsTaxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20756797955cd14509777ff4-18412108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e378e013e0653c40c6b5ce7e719a72dacd5ce753' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/ChargesAndItsTaxes.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20756797955cd14509777ff4-18412108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_USER_MODEL' => 0,
    'TAX_RECORD_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'WIDTHTYPE' => 0,
    'CHARGE_MODELS_LIST' => 0,
    'CHARGE_MODEL' => 0,
    'TAXES' => 0,
    'TAX_MODEL' => 0,
    'MODULE' => 0,
    'CREATE_TAX_URL' => 0,
    'CHARGE_TAXES' => 0,
    'CHARGE_TAX_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd145097cb4e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd145097cb4e')) {function content_5cd145097cb4e($_smarty_tpl) {?>


<div class="chargesContainer"><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><?php $_smarty_tpl->tpl_vars['CREATE_TAX_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['TAX_RECORD_MODEL']->value->getCreateTaxUrl(), null, 0);?><div class="col-lg-6"><div class="marginBottom10px"><button type="button" class="btn btn-default addCharge addButton module-buttons" data-url="<?php echo Inventory_Charges_Model::getCreateChargeUrl();?>
" data-type="1"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD_NEW_CHARGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><table class="table table-bordered inventoryChargesTable"><tr><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><strong><?php echo vtranslate('LBL_CHARGE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><strong><?php echo vtranslate('LBL_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><strong><?php echo vtranslate('LBL_IS_TAXABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" colspan="2"><strong><?php echo vtranslate('LBL_TAXES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr><?php  $_smarty_tpl->tpl_vars['CHARGE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CHARGE_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CHARGE_MODELS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CHARGE_MODEL']->key => $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value){
$_smarty_tpl->tpl_vars['CHARGE_MODEL']->_loop = true;
?><tr class="opacity" data-charge-id="<?php echo $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getId();?>
"><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><span class="chargeName" style="width:100px;"><?php echo $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getName();?>
</span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><span class="chargeValue" style="width:105px;"><?php echo $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getDisplayValue();?>
</span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><span class="chargeIsTaxable"><?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->isTaxable()){?><?php echo vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><span class="chargeTaxes" style="width:100px;"><?php $_smarty_tpl->tpl_vars['TAXES'] = new Smarty_variable('', null, 0);?><?php  $_smarty_tpl->tpl_vars['TAX_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAX_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getSelectedTaxes(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAX_MODEL']->key => $_smarty_tpl->tpl_vars['TAX_MODEL']->value){
$_smarty_tpl->tpl_vars['TAX_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['TAXES'] = new Smarty_variable(($_smarty_tpl->tpl_vars['TAXES']->value).", ".($_smarty_tpl->tpl_vars['TAX_MODEL']->value->getName()), null, 0);?><?php } ?><?php echo trim($_smarty_tpl->tpl_vars['TAXES']->value,', ');?>
</span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><div class="pull-right actions"><a class="editCharge cursorPointer" data-url="<?php echo $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getEditChargeUrl();?>
"><i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-pencil alignMiddle"></i></a></div></td></tr><?php } ?></table></div><div class="col-lg-6"><div class="marginBottom10px"><button type="button" class="btn btn-default addChargeTax addButton module-buttons" data-url="<?php echo $_smarty_tpl->tpl_vars['CREATE_TAX_URL']->value;?>
" data-type="1"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD_NEW_TAX_FOR_CHARGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><table class="table table-bordered shippingTaxTable"><tr><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><strong><?php echo vtranslate('LBL_TAX_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><strong><?php echo vtranslate('LBL_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><strong><?php echo vtranslate('LBL_CALCULATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><strong><?php echo vtranslate('LBL_TAX_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" colspan="2"><strong><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr><?php  $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CHARGE_TAXES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->key => $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value){
$_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->_loop = true;
?><tr class="opacity" data-taxid="<?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->get('taxid');?>
" data-taxtype="<?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->getType();?>
"><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><span class="taxLabel" style="width:150px"><?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->getName();?>
</span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><span class="taxType"><?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->getTaxType();?>
</span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><span class="taxMethod"><?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->getTaxMethod();?>
</span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><span class="taxPercentage"><?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->getTax();?>
%</span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><input type="checkbox" class="editTaxStatus" <?php if (!$_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->isDeleted()){?>checked<?php }?> /></td><td style="border-left:none;border-right:none;" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="pull-right actions"><a class="editChargeTax cursorPointer" data-url="<?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->getEditTaxUrl();?>
"><i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-pencil alignMiddle"></i></a></div></td></tr><?php } ?></table></div></div>
<?php }} ?>
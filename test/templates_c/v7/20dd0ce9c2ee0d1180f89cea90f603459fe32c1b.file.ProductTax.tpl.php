<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 07:27:30
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ProductTax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5511690045cc161629854a4-67871498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20dd0ce9c2ee0d1180f89cea90f603459fe32c1b' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ProductTax.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5511690045cc161629854a4-67871498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAXCLASS_DETAILS' => 0,
    'tax' => 0,
    'tax_count' => 0,
    'PULL_RIGHT' => 0,
    'MODULE' => 0,
    'check_value' => 0,
    'show_value' => 0,
    'WIDTHTYPE' => 0,
    'QUALIFIED_MODULE' => 0,
    'REGIONS_INFO' => 0,
    'TAX_REGION_ID' => 0,
    'i' => 0,
    'TAX_REGION_MODEL' => 0,
    'COUNTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc161629ac63',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc161629ac63')) {function content_5cc161629ac63($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["tax_count"] = new Smarty_variable(1, null, 0);?><?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAXCLASS_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value){
$_smarty_tpl->tpl_vars['tax']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['tax']->key;
?><?php if ($_smarty_tpl->tpl_vars['tax']->value['check_value']==1){?><?php $_smarty_tpl->tpl_vars['check_value'] = new Smarty_variable("checked", null, 0);?><?php $_smarty_tpl->tpl_vars['show_value'] = new Smarty_variable("visible", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['check_value'] = new Smarty_variable('', null, 0);?><?php $_smarty_tpl->tpl_vars['show_value'] = new Smarty_variable("hidden", null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['tax_count']->value>1){?><td class="fieldLabel alignMiddle<?php if ($_smarty_tpl->tpl_vars['PULL_RIGHT']->value){?> pull-right<?php }?>"><label class=""><?php }?><span class="taxLabel alignBottom"><?php echo vtranslate($_smarty_tpl->tpl_vars['tax']->value['taxlabel'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="paddingLeft10px">(%)</span></span><span style="padding-left: 10px;"><input style="top: 3px;" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['tax']->value['check_name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['tax']->value['check_name'];?>
" class="taxes" data-tax-name=<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
 <?php echo $_smarty_tpl->tpl_vars['check_value']->value;?>
></span></label></td><td class="fieldValue"><?php if ($_smarty_tpl->tpl_vars['tax']->value['type']=='Fixed'){?><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
" class="inputElement<?php if ($_smarty_tpl->tpl_vars['show_value']->value=="hidden"){?> hide <?php }else{ ?> show <?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['percentage'];?>
" data-rule-required="true" data-rule-inventory_percentage="true" /><?php }else{ ?><div class="<?php if ($_smarty_tpl->tpl_vars['show_value']->value=="hidden"){?>hide<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
" style="width:70%;"><div class="regionsList"><table class="table table-bordered themeTableColor"><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="width:70%"><label><?php echo vtranslate('LBL_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="text-align: center; width:30%;"><input class="inputElement" type="text" name="<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
_defaultPercentage" value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['percentage'];?>
" data-rule-required="true" data-rule-inventory_percentage="true" style="width: 80px;" /></td></tr><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['REGIONS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['REGIONS_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tax']->value['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['REGIONS_INFO']->key => $_smarty_tpl->tpl_vars['REGIONS_INFO']->value){
$_smarty_tpl->tpl_vars['REGIONS_INFO']->_loop = true;
?><tr><td><?php  $_smarty_tpl->tpl_vars['TAX_REGION_ID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAX_REGION_ID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REGIONS_INFO']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAX_REGION_ID']->key => $_smarty_tpl->tpl_vars['TAX_REGION_ID']->value){
$_smarty_tpl->tpl_vars['TAX_REGION_ID']->_loop = true;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['TAX_REGION_ID']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TAX_REGION_MODEL'] = new Smarty_variable(Inventory_TaxRegion_Model::getRegionModel($_tmp1), null, 0);?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
_regions[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][list][]" value="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getId();?>
" /><span class="label label-info displayInlineBlock" style="margin: 2px 1px;"><?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getName();?>
</span><?php } ?></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="text-align: center;"><input class="inputElement" type="text" name="<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
_regions[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][value]" value="<?php echo $_smarty_tpl->tpl_vars['REGIONS_INFO']->value['value'];?>
" data-rule-required="true" data-rule-inventory_percentage="true" style="width: 80px;" /></td></tr><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?><?php } ?></table></div></div><?php }?></td><?php $_smarty_tpl->tpl_vars["tax_count"] = new Smarty_variable($_smarty_tpl->tpl_vars['tax_count']->value+1, null, 0);?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?></tr><tr><?php $_smarty_tpl->tpl_vars["COUNTER"] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["COUNTER"] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }?><?php } ?><?php }} ?>
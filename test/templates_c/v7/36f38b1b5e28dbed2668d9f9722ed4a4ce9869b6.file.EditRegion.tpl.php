<?php /* Smarty version Smarty-3.1.7, created on 2018-11-19 12:05:14
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/EditRegion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12599053225bf2a6faddb1b6-27328598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36f38b1b5e28dbed2668d9f9722ed4a4ce9869b6' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/EditRegion.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12599053225bf2a6faddb1b6-27328598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAX_REGION_MODEL' => 0,
    'TAX_REGION_ID' => 0,
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bf2a6fadee45',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf2a6fadee45')) {function content_5bf2a6fadee45($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['TAX_REGION_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getId(), null, 0);?><div class="taxRegionContainer modal-dialog modal-xs"><div class="modal-content"><form id="editTaxRegion" class="form-horizontal"><?php if ($_smarty_tpl->tpl_vars['TAX_REGION_ID']->value){?><?php ob_start();?><?php echo vtranslate('LBL_EDIT_REGION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_tmp1;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TITLE'] = new Smarty_variable($_tmp2, null, 0);?><?php }else{ ?><?php ob_start();?><?php echo vtranslate('LBL_ADD_NEW_REGION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_tmp3;?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TITLE'] = new Smarty_variable($_tmp4, null, 0);?><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0);?>
<input type="hidden" name="taxRegionId" value="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_ID']->value;?>
" /><div class="modal-body"><div class="row"><div class="nameBlock"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_REGION_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-lg-5"><input class="inputElement" type="text" name="name" placeholder="<?php echo vtranslate('LBL_ENTER_REGION_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getName();?>
" data-rule-required="true" /></div><div class="col-lg-3"></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div><?php }} ?>
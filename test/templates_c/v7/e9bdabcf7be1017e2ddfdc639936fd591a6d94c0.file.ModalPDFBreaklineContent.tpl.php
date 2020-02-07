<?php /* Smarty version Smarty-3.1.7, created on 2018-11-20 13:22:19
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PDFMaker/ModalPDFBreaklineContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4688457735bf40a8b20d1d0-23545923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9bdabcf7be1017e2ddfdc639936fd591a6d94c0' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PDFMaker/ModalPDFBreaklineContent.tpl',
      1 => 1542712691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4688457735bf40a8b20d1d0-23545923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'RECORD' => 0,
    'HEADER_CHECKED' => 0,
    'SUBTOTAL_CHECKED' => 0,
    'PRODUCTS' => 0,
    'PRODUCT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bf40a8b2293e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf40a8b2293e')) {function content_5bf40a8b2293e($_smarty_tpl) {?>
<div class="modal-dialog modelContainer"><div class="modal-content" style="width:675px;"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate('LBL_PRODUCT_BREAKLINE',$_tmp1);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp2, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><div class="container-fluid"><div><form id="SavePDFBreaklineForm" class="form-horizontal" name="upload" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="SavePDFBreakline" /><input type="hidden" name="return_id" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
" /><h4 class="fieldBlockHeader"><?php echo vtranslate('LBL_GLOBAL_SETTINGS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4><table class="table no-border"><tr><td class="" style="width: 1%"><input type="checkbox" class="settingsCheckbox" name="show_header" value="1" <?php echo $_smarty_tpl->tpl_vars['HEADER_CHECKED']->value;?>
/></td><td class=""><?php echo vtranslate('LBL_SHOW_HEADER',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td></tr><tr><td class="lineItemFieldName" style="width: 1%"><input type="checkbox" class="settingsCheckbox" name="show_subtotal" value="1" <?php echo $_smarty_tpl->tpl_vars['SUBTOTAL_CHECKED']->value;?>
/></td><td class="lineItemFieldName"><?php echo vtranslate('LBL_SHOW_SUBTOTAL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td></tr></table><h4 class="fieldBlockHeader"><?php echo vtranslate('LBL_ITEM_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4><table class="table table-bordered lineItemsTable" style = "margin-top:15px"><thead><th class="lineItemBlockHeader"></th><th class="lineItemBlockHeader"><?php echo vtranslate('LBL_ITEM_NAME',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</th></thead><tbody><?php  $_smarty_tpl->tpl_vars['PRODUCT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PRODUCT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRODUCTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT']->key => $_smarty_tpl->tpl_vars['PRODUCT']->value){
$_smarty_tpl->tpl_vars['PRODUCT']->_loop = true;
?><tr><td class="lineItemFieldName" style="width: 1%"><input type="checkbox" class="LineItemCheckbox" value="1" name="ItemPageBreak_<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['uid'];?>
" <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['checked']=="yes"){?>checked<?php }?>/></td><td class="lineItemFieldName"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
</td></tr><?php } ?></tbody></table></form></div></div></div><?php ob_start();?><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['BUTTON_NAME'] = new Smarty_variable($_tmp3, null, 0);?><?php $_smarty_tpl->tpl_vars['BUTTON_ID'] = new Smarty_variable("js-save-button", null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div>
<?php }} ?>
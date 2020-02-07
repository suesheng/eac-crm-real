<?php /* Smarty version Smarty-3.1.7, created on 2018-11-22 11:34:45
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PDFMaker/ModalImageSelectContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5598528545bf69455aacfb1-55676868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3561828c71db8d1a103625afbbadbec345e5c0cc' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PDFMaker/ModalImageSelectContent.tpl',
      1 => 1542712691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5598528545bf69455aacfb1-55676868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'MODULE_NAME' => 0,
    'RECORD' => 0,
    'IMG_HTML' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bf69455ac617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf69455ac617')) {function content_5bf69455ac617($_smarty_tpl) {?>
<div class="modal-dialog modelContainer"><div class="modal-content" style="width:675px;"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate('LBL_PRODUCT_IMAGE',$_tmp1);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp2, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><div class="container-fluid"><div><form id="SaveProductImagesForm" class="form-horizontal" name="upload" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="SavePDFImages" /><input type="hidden" name="return_id" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
" /><table class="table table-bordered"><tbody><?php echo $_smarty_tpl->tpl_vars['IMG_HTML']->value;?>
</tbody></table></form></div></div></div><?php ob_start();?><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['BUTTON_NAME'] = new Smarty_variable($_tmp3, null, 0);?><?php $_smarty_tpl->tpl_vars['BUTTON_ID'] = new Smarty_variable("js-save-button", null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div>
<?php }} ?>
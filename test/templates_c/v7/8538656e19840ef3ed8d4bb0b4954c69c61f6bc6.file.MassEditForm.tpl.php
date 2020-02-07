<?php /* Smarty version Smarty-3.1.7, created on 2019-05-28 06:58:02
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/MassEditForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12720227745cecdbfaa55de2-40307760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8538656e19840ef3ed8d4bb0b4954c69c61f6bc6' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/MassEditForm.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12720227745cecdbfaa55de2-40307760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'CVID' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'SEARCH_PARAMS' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cecdbfaab621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cecdbfaab621')) {function content_5cecdbfaab621($_smarty_tpl) {?>
<div id="massEditContainer" class='fc-overlay-modal modal-content'><form class="form-horizontal" id="massEdit" name="MassEdit" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="MassSave" /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" /><input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
><input type="hidden" name="excluded_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
><input type="hidden" name="search_params" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value);?>
' /><div><header class="overlayHeader" style='flex:0 0 auto;'><?php ob_start();?><?php echo vtranslate('LBL_MASS_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0);?>
</header><div class='modal-body' style="margin-bottom:60px"><div class='datacontent editViewContents'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/EditViewContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><footer class='modal-footer overlayFooter'><center><button type='submit' class='btn btn-success saveButton'><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<a class='cancelLink' data-dismiss="modal" href="#"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></center></footer></div></form></div><?php }} ?>
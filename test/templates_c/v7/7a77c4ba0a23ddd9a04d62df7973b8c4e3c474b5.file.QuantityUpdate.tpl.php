<?php /* Smarty version Smarty-3.1.7, created on 2018-11-19 12:34:09
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Products/QuantityUpdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18547634385bf2adc1422757-11619105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a77c4ba0a23ddd9a04d62df7973b8c4e3c474b5' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Products/QuantityUpdate.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18547634385bf2adc1422757-11619105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'RECORD_ID' => 0,
    'REL_ID' => 0,
    'CURRENT_QTY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bf2adc143154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf2adc143154')) {function content_5bf2adc143154($_smarty_tpl) {?>


<div id="quantityUpdateContainer" class="modal-dialog modal-sm">
	<div class="modal-content">
		<?php ob_start();?><?php echo vtranslate('LBL_EDIT_QUANTITY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_tmp1), 0);?>

		<form class="form-horizontal" id="quantityUpdate" method="post" action="index.php">
			<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" />
			<input type="hidden" name="action" value="RelationAjax" />
			<input type="hidden" name="src_record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" />
			<input type="hidden" name="relid" value="<?php echo $_smarty_tpl->tpl_vars['REL_ID']->value;?>
"/> 
			<div class="modal-body">
				<div class="row">
					<span class="col-lg-6"><label for="quantityEdit" class="pull-right" style="margin-top: 5px;"><?php echo vtranslate('LBL_EDIT_QUANTITY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></span>
					<span class="col-lg-6">
						<input id="quantityEdit" data-rule-positiveExcludingZero=true data-rule-positive=true class="form-control" type="text" name="quantity" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_QTY']->value;?>
">
					</span>
				</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</form>	
	</div>
</div><?php }} ?>
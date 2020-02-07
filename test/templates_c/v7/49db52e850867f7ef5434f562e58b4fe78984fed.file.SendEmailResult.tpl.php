<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 14:03:24
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Emails/SendEmailResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11737858795cc1be2c77f830-79177541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49db52e850867f7ef5434f562e58b4fe78984fed' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Emails/SendEmailResult.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11737858795cc1be2c77f830-79177541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SUCCESS' => 0,
    'RELATED_LOAD' => 0,
    'FLAG' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1be2c78972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1be2c78972')) {function content_5cc1be2c78972($_smarty_tpl) {?>




<div class="modal-dialog">
	<div class="modal-content">
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>"Result"), 0);?>
 
		<div class="modal-body">
			<?php if ($_smarty_tpl->tpl_vars['SUCCESS']->value){?>
				<div class="mailSentSuccessfully" data-relatedload="<?php echo $_smarty_tpl->tpl_vars['RELATED_LOAD']->value;?>
">
					<?php echo vtranslate('LBL_MAIL_SENT_SUCCESSFULLY');?>

				</div>
				<?php if ($_smarty_tpl->tpl_vars['FLAG']->value){?>
					<input type="hidden" id="flag" value="<?php echo $_smarty_tpl->tpl_vars['FLAG']->value;?>
">
				<?php }?>
			<?php }else{ ?>
				<div class="failedToSend" data-relatedload="false">
					<?php echo vtranslate('LBL_FAILED_TO_SEND');?>

					<br>
					<?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

				</div>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>
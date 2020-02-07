<?php /* Smarty version Smarty-3.1.7, created on 2019-04-22 10:06:34
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/OperationNotPermitted.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12428364675cbd922a5dd573-30681689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '350b7e5cee16040fa45904586378cb145294ab01' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/OperationNotPermitted.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12428364675cbd922a5dd573-30681689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbd922a5e61f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbd922a5e61f')) {function content_5cbd922a5e61f($_smarty_tpl) {?>
<div style="margin:0 auto;width: 50em;">
	<table border='0' cellpadding='5' cellspacing='0' height='600px' width="700px">
	<tr><td align='center'>
		<div style='border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 80%; position: relative; z-index: 100000020;'>

		<table border='0' cellpadding='5' cellspacing='0' width='98%'>
		<tr>
			<td rowspan='2' width='11%'><img src="<?php echo vimage_path('denied.gif');?>
" ></td>
			<td style='border-bottom: 1px solid rgb(204, 204, 204);' nowrap='nowrap' width='70%'>
				<span class='genHeaderSmall'><?php echo vtranslate($_smarty_tpl->tpl_vars['MESSAGE']->value);?>
</span></td>
		</tr>
		<tr>
			<td class='small' align='right' nowrap='nowrap'>
				<a href='javascript:window.history.back();'><?php echo vtranslate('LBL_GO_BACK');?>
</a><br>
			</td>
		</tr>
		</table>
		</div>
	</td></tr>
	</table>
</div><?php }} ?>
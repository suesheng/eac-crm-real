<?php /* Smarty version Smarty-3.1.7, created on 2019-01-28 11:59:17
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/RecurrenceDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2655921175c4eee951b9dc9-93209188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '183af8ac2c9adb26075f1553930d5ffa927392f8' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/RecurrenceDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2655921175c4eee951b9dc9-93209188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECURRING_INFORMATION' => 0,
    'MODULE_NAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c4eee951c67b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4eee951c67b')) {function content_5c4eee951c67b($_smarty_tpl) {?>
<div id="addEventRepeatUI" data-recurring-enabled="<?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringcheck']=='Yes'){?>true<?php }else{ ?>false<?php }?>">
	<div><span><?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringcheck'];?>
</span></div>
	<?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringcheck']=='Yes'){?>
	<div>
		<span><?php echo vtranslate('LBL_REPEATEVENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['repeat_frequency'];?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringtype'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>
	</div>
	<div>
		<span><?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['repeat_str'];?>
</span>
	</div>
	<div><?php echo vtranslate('LBL_UNTIL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringenddate'];?>
</div>
	<?php }?>
</div><?php }} ?>
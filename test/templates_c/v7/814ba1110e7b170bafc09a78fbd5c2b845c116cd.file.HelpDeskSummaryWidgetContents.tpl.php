<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 13:18:50
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/HelpDeskSummaryWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1138571605bcdce3addba35-71441585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '814ba1110e7b170bafc09a78fbd5c2b845c116cd' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/HelpDeskSummaryWidgetContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1138571605bcdce3addba35-71441585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RELATED_RECORDS' => 0,
    'MODULE' => 0,
    'RELATED_RECORD' => 0,
    'RELATED_MODULE' => 0,
    'DESCRIPTION' => 0,
    'NUMBER_OF_RECORDS' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdce3adf4f0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdce3adf4f0')) {function content_5bcdce3adf4f0($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['RELATED_RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->key => $_smarty_tpl->tpl_vars['RELATED_RECORD']->value){
$_smarty_tpl->tpl_vars['RELATED_RECORD']->_loop = true;
?><div class="recentActivitiesContainer"><ul class="unstyled"><li><div><div class="textOverflowEllipsis width27em"><?php echo vtranslate('Title',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 :<span><a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('ticket_title');?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
_Related_Record_<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('id');?>
"><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('ticket_title');?>
</a></span></div><div><?php echo vtranslate('LBL_TICKET_PRIORITY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <strong> <?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('ticketpriorities');?>
</strong> </div><?php $_smarty_tpl->tpl_vars['DESCRIPTION'] = new Smarty_variable(($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDescriptionValue()), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['DESCRIPTION']->value)){?><div class="row"><span class="col-lg-8 textOverflowEllipsis width27em"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
</span><span class="col-lg-3"><a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span></div><?php }?></div></li></ul></div><?php } ?><?php $_smarty_tpl->tpl_vars['NUMBER_OF_RECORDS'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['RELATED_RECORDS']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['NUMBER_OF_RECORDS']->value==5){?><div class="row"><div class="pull-right"><a class="moreRecentTickets cursorPointer"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></div></div><?php }?><?php }} ?>
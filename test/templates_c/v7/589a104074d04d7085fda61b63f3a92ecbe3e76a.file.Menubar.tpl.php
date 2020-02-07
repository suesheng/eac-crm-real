<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 14:01:51
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/MailManager/partials/Menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8013066525cc1bdcf62d6c4-74375371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '589a104074d04d7085fda61b63f3a92ecbe3e76a' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/MailManager/partials/Menubar.tpl',
      1 => 1536167399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8013066525cc1bdcf62d6c4-74375371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1bdcf633a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1bdcf633a2')) {function content_5cc1bdcf633a2($_smarty_tpl) {?>
<div id="modules-menu" class="modules-menu mmModulesMenu" style="width: 100%;"><div><span><?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->username();?>
</span><span class="pull-right"><span class="cursorPointer mailbox_refresh" title="<?php echo vtranslate('LBL_Refresh',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-refresh"></i></span>&nbsp;<span class="cursorPointer mailbox_setting" title="<?php echo vtranslate('JSLBL_Settings',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-cog"></i></span></span></div><div id="mail_compose" class="cursorPointer"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo vtranslate('LBL_Compose',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div id='folders_list'></div></div><?php }} ?>
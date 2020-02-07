<?php /* Smarty version Smarty-3.1.7, created on 2018-10-16 10:03:27
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/SettingsShortCut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16564598985bc5b76fc5c856-64301059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f6fb99433564af8122553468fa6da17402960e0' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/SettingsShortCut.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16564598985bc5b76fc5c856-64301059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SETTINGS_SHORTCUT' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bc5b76fc65c4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc5b76fc65c4')) {function content_5bc5b76fc65c4($_smarty_tpl) {?>
<span id="shortcut_<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" data-actionurl="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getPinUnpinActionUrl();?>
" class="col-lg-3 contentsBackground well cursorPointer moduleBlock" data-url="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getUrl();?>
" style="height: 100px; width: 23.5%;"><div><span><b class="themeTextColor"><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></span><span class="pull-right"><button data-id="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" title="<?php echo vtranslate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" class="unpin close hiden"><i class="fa fa-close"></i></button></span></div><div><?php if ($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description')&&$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description')!='NULL'){?><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></div></span>
<?php }} ?>
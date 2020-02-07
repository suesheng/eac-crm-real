<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 10:56:09
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Accounts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3559259335bcdacc926bab1-08257535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2801e6ef737de14dc876c8a8e014b54f3ff9cbfe' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Accounts/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3559259335bcdacc926bab1-08257535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdacc926ff3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdacc926ff3')) {function content_5bcdacc926ff3($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
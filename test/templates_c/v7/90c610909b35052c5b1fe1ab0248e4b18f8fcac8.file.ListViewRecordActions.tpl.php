<?php /* Smarty version Smarty-3.1.7, created on 2019-05-10 07:58:34
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17081987235cd52f2aecc4f2-49559571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90c610909b35052c5b1fe1ab0248e4b18f8fcac8' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/ListViewRecordActions.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17081987235cd52f2aecc4f2-49559571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LISTVIEW_ENTRY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd52f2aed465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd52f2aed465')) {function content_5cd52f2aed465($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div style="width:80px ;"><a class="deleteRecordButton" style=" opacity: 0; padding: 0 5px;"><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i></a><input style="opacity: 0;" <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status')){?> checked value="on" <?php }else{ ?> value="off"<?php }?> data-on-color="success"  data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" type="checkbox" name="workflowstatus" id="workflowstatus"></div><?php }} ?>
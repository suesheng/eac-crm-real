<?php /* Smarty version Smarty-3.1.7, created on 2019-09-25 08:34:32
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/AddNotePad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3124845375d8b2698b3c712-66407386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '567014276ee88f7dae40b5a141382dcab69f8253' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/AddNotePad.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3124845375d8b2698b3c712-66407386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d8b2698b5cfa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8b2698b5cfa')) {function content_5d8b2698b5cfa($_smarty_tpl) {?>

 <div id="addNotePadWidgetContainer" class='modal-dialog'><div class="modal-content"><?php ob_start();?><?php echo vtranslate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate('LBL_NOTEPAD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable((($_tmp1).(" ")).($_tmp2), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<form class="form-horizontal" method="POST"><div class="row" style="padding:10px;"><label class="fieldLabel col-lg-4"><label class="pull-right"><?php echo vtranslate('LBL_NOTEPAD_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span> </label></label><div class="fieldValue col-lg-6"><input type="text" name="notePadName" class="inputElement" data-rule-required="true" /></div></div><div class="row" style="padding:10px;"><label class="fieldLabel col-lg-4"><label class="pull-right"><?php echo vtranslate('LBL_NOTEPAD_CONTENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></label><div class="fieldValue col-lg-6"><textarea type="text" name="notePadContent" style="min-height: 100px;resize: none;width:100%"></textarea></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div><?php }} ?>
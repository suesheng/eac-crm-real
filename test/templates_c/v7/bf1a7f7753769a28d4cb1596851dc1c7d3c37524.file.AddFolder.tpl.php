<?php /* Smarty version Smarty-3.1.7, created on 2018-10-23 13:16:21
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Documents/AddFolder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16970281765bcf1f255bc7f1-41120316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf1a7f7753769a28d4cb1596851dc1c7d3c37524' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Documents/AddFolder.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16970281765bcf1f255bc7f1-41120316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'FOLDER_ID' => 0,
    'FOLDER_NAME' => 0,
    'HEADER_TITLE' => 0,
    'SAVE_MODE' => 0,
    'FOLDER_DESC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcf1f255d204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcf1f255d204')) {function content_5bcf1f255d204($_smarty_tpl) {?>

<div class="modal-dialog modelContainer"><div class = "modal-content"><?php ob_start();?><?php echo vtranslate('LBL_ADD_NEW_FOLDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php if ($_smarty_tpl->tpl_vars['FOLDER_ID']->value){?><?php ob_start();?><?php echo vtranslate('LBL_EDIT_FOLDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp2.": ".($_smarty_tpl->tpl_vars['FOLDER_NAME']->value), null, 0);?><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<form class="form-horizontal" id="addDocumentsFolder" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="Folder" /><input type="hidden" name="mode" value="save" /><?php if ($_smarty_tpl->tpl_vars['FOLDER_ID']->value!=null){?><input type="hidden" name="folderid" value="<?php echo $_smarty_tpl->tpl_vars['FOLDER_ID']->value;?>
" /><input type="hidden" name="savemode" value="<?php echo $_smarty_tpl->tpl_vars['SAVE_MODE']->value;?>
" /><?php }?><div class="modal-body"><div class="container-fluid"><div class="form-group"><label class="control-label fieldLabel col-sm-3"><span class="redColor">*</span><?php echo vtranslate('LBL_FOLDER_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls col-sm-9"><input class="inputElement" id="documentsFolderName" data-rule-required="true" name="foldername" type="text" value="<?php if ($_smarty_tpl->tpl_vars['FOLDER_NAME']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['FOLDER_NAME']->value;?>
<?php }?>"/></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-3"><?php echo vtranslate('LBL_FOLDER_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls col-sm-9"><textarea rows="3" class="inputElement form-control" name="folderdesc" id="description" style="resize: vertical;"><?php if ($_smarty_tpl->tpl_vars['FOLDER_DESC']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['FOLDER_DESC']->value;?>
<?php }?></textarea></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>

<?php }} ?>
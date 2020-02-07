<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 11:30:30
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Project/SummaryWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2269312405bcdb4d63a8f32-18094390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0dbbbb39b705ea3a9aa5b0f254bd2b62b80ec65' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Project/SummaryWidgets.tpl',
      1 => 1536167405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2269312405bcdb4d63a8f32-18094390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGING_MODEL' => 0,
    'RELATED_MODULE' => 0,
    'RELATED_RECORDS' => 0,
    'FILENAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcdb4d63b574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdb4d63b574')) {function content_5bcdb4d63b574($_smarty_tpl) {?>
<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('page');?>
" /><input type="hidden" name="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('limit');?>
" /><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
" /><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value&&$_smarty_tpl->tpl_vars['RELATED_RECORDS']->value){?><?php $_smarty_tpl->tpl_vars['FILENAME'] = new Smarty_variable(($_smarty_tpl->tpl_vars['RELATED_MODULE']->value).("SummaryWidgetContents.tpl"), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FILENAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RELATED_RECORDS'=>$_smarty_tpl->tpl_vars['RELATED_RECORDS']->value), 0);?>
<?php }else{ ?><div class="summaryWidgetContainer noContent"><p class="textAlignCenter"><?php echo vtranslate('LBL_NO_RELATED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
</p></div><?php }?><?php }} ?>
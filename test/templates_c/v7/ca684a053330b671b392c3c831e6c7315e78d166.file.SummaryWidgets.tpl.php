<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 10:56:09
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/SummaryWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:821757525bcdacc9e81cd0-42396994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca684a053330b671b392c3c831e6c7315e78d166' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/SummaryWidgets.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '821757525bcdacc9e81cd0-42396994',
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
  'unifunc' => 'content_5bcdacc9e915d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcdacc9e915d')) {function content_5bcdacc9e915d($_smarty_tpl) {?>



<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('page');?>
" /><input type="hidden" name="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('limit');?>
" /><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value&&$_smarty_tpl->tpl_vars['RELATED_RECORDS']->value){?><?php $_smarty_tpl->tpl_vars['FILENAME'] = new Smarty_variable(($_smarty_tpl->tpl_vars['RELATED_MODULE']->value).("SummaryWidgetContents.tpl"), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FILENAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RELATED_RECORDS'=>$_smarty_tpl->tpl_vars['RELATED_RECORDS']->value), 0);?>
<?php }else{ ?><div class="summaryWidgetContainer noContent"><p class="textAlignCenter"><?php echo vtranslate('LBL_NO_RELATED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
</p></div><?php }?><?php }} ?>
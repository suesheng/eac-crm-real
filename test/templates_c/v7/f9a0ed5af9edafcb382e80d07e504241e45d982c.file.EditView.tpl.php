<?php /* Smarty version Smarty-3.1.7, created on 2019-02-18 10:40:59
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/EmailTemplates/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10915932085c6a8bbb62b2b9-59333136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a0ed5af9edafcb382e80d07e504241e45d982c' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/EmailTemplates/EditView.tpl',
      1 => 1536167403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10915932085c6a8bbb62b2b9-59333136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'RECORD_ID' => 0,
    'SINGLE_MODULE_NAME' => 0,
    'RECORD' => 0,
    'USER_MODEL' => 0,
    'SYSTEM_TEMPLATE' => 0,
    'MODE' => 0,
    'IS_SYSTEM_TEMPLATE_EDIT' => 0,
    'RETURN_VIEW' => 0,
    'RETURN_MODULE' => 0,
    'RETURN_RECORD' => 0,
    'RETURN_PAGE' => 0,
    'RETURN_SEARCH_PARAMS' => 0,
    'RETURN_SEARCH_KEY' => 0,
    'RETURN_SEARCH_VALUE' => 0,
    'RETURN_SEARCH_OPERATOR' => 0,
    'RETURN_SORTBY' => 0,
    'RETURN_ORDERBY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6a8bbb650a0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6a8bbb650a0')) {function content_5c6a8bbb650a0($_smarty_tpl) {?>

<div class="main-container clearfix"><div id="modnavigator" class="module-nav editViewModNavigator"><div class="hidden-xs hidden-sm mod-switcher-container"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><div class="editViewPageDiv viewContent"><div class="col-sm-12 col-xs-12 content-area"><form id="EditView" class="form-horizontal recordEditView" name="EditView" method="post" action="index.php"><div class="editViewHeader"><div class='row'><div class="col-lg-12 col-md-12 col-lg-pull-0"><?php $_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME'] = new Smarty_variable(('SINGLE_').($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value!=''){?><h4 class="editHeader" title="<?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</h4><?php }else{ ?><h4 class="editHeader" ><?php echo vtranslate('LBL_CREATING_NEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4><?php }?></div></div></div><div class="editViewBody"><div class="editViewContents"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME'] = new Smarty_variable($_tmp1, null, 0);?><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?><?php $_smarty_tpl->tpl_vars["IS_SYSTEM_TEMPLATE_EDIT"] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars["SYSTEM_TEMPLATE"] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->isSystemTemplate(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['SYSTEM_TEMPLATE']->value&&$_smarty_tpl->tpl_vars['MODE']->value!=''){?><?php $_smarty_tpl->tpl_vars["IS_SYSTEM_TEMPLATE_EDIT"] = new Smarty_variable($_smarty_tpl->tpl_vars['SYSTEM_TEMPLATE']->value, null, 0);?><?php }?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" class="isSystemTemplate" value="<?php echo $_smarty_tpl->tpl_vars['IS_SYSTEM_TEMPLATE_EDIT']->value;?>
" /><?php if ($_smarty_tpl->tpl_vars['IS_SYSTEM_TEMPLATE_EDIT']->value){?><input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
"/><input type="hidden" name="systemtemplate" value="<?php echo $_smarty_tpl->tpl_vars['SYSTEM_TEMPLATE']->value;?>
" /><?php }?><?php if ($_smarty_tpl->tpl_vars['RETURN_VIEW']->value){?><input type="hidden" name="returnmodule" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_MODULE']->value;?>
" /><input type="hidden" name="returnview" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_VIEW']->value;?>
" /><input type="hidden" name="returnrecord" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_RECORD']->value;?>
" /><input type="hidden" name="returnpage" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_PAGE']->value;?>
" /><input type="hidden" name="returnsearch_params" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['RETURN_SEARCH_PARAMS']->value);?>
' /><input type="hidden" name="returnsearch_key" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SEARCH_KEY']->value;?>
 /><input type="hidden" name="returnsearch_value" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SEARCH_VALUE']->value;?>
 /><input type="hidden" name="returnoperator" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SEARCH_OPERATOR']->value;?>
 /><input type="hidden" name="returnsortorder" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SORTBY']->value;?>
 /><input type="hidden" name="returnorderby" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_ORDERBY']->value;?>
 /><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/EditViewContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="modal-overlay-footer clearfix" style="border-left-width: 0px;"><div class="row clearfix"><div class=' textAlignCenter col-lg-12 col-md-12 col-sm-12 '><button type='submit' class='btn btn-success saveButton'><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<a class='cancelLink' href="javascript:history.back()" type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></div></div></form></div></div></div><?php }} ?>
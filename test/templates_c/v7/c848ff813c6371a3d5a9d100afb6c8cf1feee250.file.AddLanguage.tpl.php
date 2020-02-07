<?php /* Smarty version Smarty-3.1.7, created on 2019-04-10 06:57:38
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/LangManagement/AddLanguage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2351300805cad93e28a2827-43414586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c848ff813c6371a3d5a9d100afb6c8cf1feee250' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/LangManagement/AddLanguage.tpl',
      1 => 1554879415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2351300805cad93e28a2827-43414586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cad93e28ab17',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cad93e28ab17')) {function content_5cad93e28ab17($_smarty_tpl) {?>
<div id="AddNewLangMondal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="modal-title"><?php echo vtranslate('LBL_ADD_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3>
			</div>
			<div class="modal-body form-horizontal">
				<div class="form-group">
					<label class="control-label col-md-3"><?php echo vtranslate('LBL_Lang_label',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label>
					<div class="col-md-7"><input name="label" class="form-control" type="text" /></div>
				</div><br />
				<div class="form-group">
					<label class="control-label col-md-3"><?php echo vtranslate('LBL_Lang_name',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label>
					<div class="col-md-7"><input name="name" class="form-control" type="text" /></div>
				</div><br />
				<div class="form-group">
					<label class="control-label col-md-3"><?php echo vtranslate('LBL_Lang_prefix',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label>
					<div class="col-md-7"><input name="prefix" class="form-control" type="text" /></div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><?php echo vtranslate('LBL_Cancel',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
				<button class="btn btn-primary"><?php echo vtranslate('LBL_AddLanguage',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
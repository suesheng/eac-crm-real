<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 10:49:00
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/LangManagement/AddTranslation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141755335cc1909cd0eb18-68595295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9e44a245c3990013aaae86cfcc1da9f7b82b840' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/LangManagement/AddTranslation.tpl',
      1 => 1554879415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141755335cc1909cd0eb18-68595295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1909cd1b78',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1909cd1b78')) {function content_5cc1909cd1b78($_smarty_tpl) {?>
<div id="AddNewTranslationMondal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="AddTranslation" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">	
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="AddTranslation" class="modal-title"><?php echo vtranslate('LBL_ADD_Translate',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3>
			</div>
			<div class="modal-body">
				<form id="AddTranslationForm" class="form-horizontal">	
					<input type="hidden" name="langs" value="" />
					<div class="form-group">
						<label for="translation_type" class="col-sm-4 control-label"><?php echo vtranslate('LBL_TranslationType',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label>
						<div class="col-sm-8">
							<select name="type" class="form-control" id="translation_type">
								<option value="php"><?php echo vtranslate('LBL_LangPHP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
								<option value="js"><?php echo vtranslate('LBL_LangJS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
							</select>
						</div>
					</div>
					<br />
					<div class="form-group">
						<label for="variable" class="col-sm-4 control-label"><?php echo vtranslate('LBL_variable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label>
						<div class="col-sm-8">
							<input id="variable" name="variable" class="form-control" type="text" placeholder="<?php echo vtranslate('LBL_variable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/>
						</div>
					</div>
					<br />
					<div class="add_translation_block">
					</div>
				</form>	
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal" aria-hidden="true"><?php echo vtranslate('LBL_Cancel',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
				<button class="btn btn-primary"><?php echo vtranslate('LBL_AddLanguage',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
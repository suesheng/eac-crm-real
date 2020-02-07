<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 11:58:10
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/LangManagement/Edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18919502765cc1a0d2a14087-12146998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab1527edc8245dde70e2a7da2cbdec159bc2afc0' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/LangManagement/Edit.tpl',
      1 => 1554879415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18919502765cc1a0d2a14087-12146998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'LANGS' => 0,
    'LANG' => 0,
    'REQUEST' => 0,
    'MODULE_MODEL' => 0,
    'MODS' => 0,
    'ID' => 0,
    'MOD' => 0,
    'SD' => 0,
    'DATA' => 0,
    'item' => 0,
    'langs' => 0,
    'TEMPDATA' => 0,
    'lang_key' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1a0d2a53b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1a0d2a53b8')) {function content_5cc1a0d2a53b8($_smarty_tpl) {?>
<div class="row-fluid">
	<div>
		<button class="btn btn-primary add_translation pull-right"><?php echo vtranslate('LBL_ADD_Translate',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
	</div>
	<div>
		<div class="pull-left pushDown2per marginLeftZero" >
			<label class="muted textOverflowEllipsis" title="Assegnato a ">
				<?php echo vtranslate('Language',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

			 </label>
		</div>
		<div class="pull-left" style="">
			<select multiple="multiple" class="chzn-select span4" id="langs_list" style="margin-left: 10px;margin-right: 10px;width: 180px;">
				<?php  $_smarty_tpl->tpl_vars['LANG'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LANG']->key => $_smarty_tpl->tpl_vars['LANG']->value){
$_smarty_tpl->tpl_vars['LANG']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['LANG']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['prefix'];?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->parse_data($_smarty_tpl->tpl_vars['LANG']->value['prefix'],$_smarty_tpl->tpl_vars['REQUEST']->value->get('lang'))){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['label'];?>
</option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div>
		<div class="pull-left marginRight10px pushDown2per"><?php echo vtranslate('Module',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div class="pull-left">
			<select class="chzn-select mods_list" id="mods_list" style="width:180px">
				<optgroup label="<?php echo vtranslate('Modules',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">
					<?php  $_smarty_tpl->tpl_vars['MOD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MOD']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODS']->value['mods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MOD']->key => $_smarty_tpl->tpl_vars['MOD']->value){
$_smarty_tpl->tpl_vars['MOD']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['MOD']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ID']->value==$_smarty_tpl->tpl_vars['REQUEST']->value->get('mod')){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MOD']->value,$_smarty_tpl->tpl_vars['MOD']->value);?>
</option>
					<?php } ?>
				</optgroup>
				<optgroup label="<?php echo vtranslate('LBL_SYSTEM_SETTINGS','Vtiger');?>
">
					<?php  $_smarty_tpl->tpl_vars['MOD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MOD']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODS']->value['settings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MOD']->key => $_smarty_tpl->tpl_vars['MOD']->value){
$_smarty_tpl->tpl_vars['MOD']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['MOD']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ID']->value==$_smarty_tpl->tpl_vars['REQUEST']->value->get('mod')){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MOD']->value,$_smarty_tpl->tpl_vars['MOD']->value);?>
</option>
					<?php } ?>
				</optgroup>
			</select>
		</div>
	</div>
	<div>
		<input type="checkbox" class="show_differences" name="show_differences" <?php if ($_smarty_tpl->tpl_vars['SD']->value==1){?>checked<?php }?> value="1" style="margin-left:10px;margin-right: 5px;"><?php echo vtranslate('LBL_SHOW_MISSING_TRANSLATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</input>
	</div>

</div>
<?php if ($_smarty_tpl->tpl_vars['DATA']->value){?>
<div>
	<table class="table table-bordered table-condensed listViewEntriesTable" >
		<thead>
			<tr class="blockHeader">
				<th><strong><?php echo vtranslate('LBL_variable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DATA']->value['langs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<th><strong><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</strong></th>
				<?php } ?>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php if ($_smarty_tpl->tpl_vars['DATA']->value['php']){?>
			<?php  $_smarty_tpl->tpl_vars['langs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langs']->_loop = false;
 $_smarty_tpl->tpl_vars['lang_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DATA']->value['php']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langs']->key => $_smarty_tpl->tpl_vars['langs']->value){
$_smarty_tpl->tpl_vars['langs']->_loop = true;
 $_smarty_tpl->tpl_vars['lang_key']->value = $_smarty_tpl->tpl_vars['langs']->key;
?>
				<?php $_smarty_tpl->tpl_vars['TEMPDATA'] = new Smarty_variable(1, null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['SD']->value==1){?>
					<?php $_smarty_tpl->tpl_vars['TEMPDATA'] = new Smarty_variable(0, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value==null){?>
							<?php $_smarty_tpl->tpl_vars['TEMPDATA'] = new Smarty_variable(1, null, 0);?>
						<?php }?>
					<?php } ?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['TEMPDATA']->value==1){?>
					<tr data-langkey="<?php echo $_smarty_tpl->tpl_vars['lang_key']->value;?>
">
						<td><?php echo $_smarty_tpl->tpl_vars['lang_key']->value;?>
</td>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<td><input 
								data-lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"
								data-type="php"
								name="<?php echo $_smarty_tpl->tpl_vars['lang_key']->value;?>
" 
								class="translation inputElement <?php if ($_smarty_tpl->tpl_vars['item']->value==null){?>empty_value<?php }?>" 
								<?php if ($_smarty_tpl->tpl_vars['item']->value==null){?> placeholder="<?php echo vtranslate('LBL_NoTranslation',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" <?php }?> 
								type="text" 
								value ="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" />
							</td>
						<?php } ?>
						<td>
							<a href="#" class="pull-right marginRight10px delete_translation">
								<i class="fa fa-trash alignMiddle"></i>
							</a>
						</td>
					</tr>
				<?php }?>
			<?php } ?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['DATA']->value['js']){?>
			<?php  $_smarty_tpl->tpl_vars['langs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langs']->_loop = false;
 $_smarty_tpl->tpl_vars['lang_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DATA']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langs']->key => $_smarty_tpl->tpl_vars['langs']->value){
$_smarty_tpl->tpl_vars['langs']->_loop = true;
 $_smarty_tpl->tpl_vars['lang_key']->value = $_smarty_tpl->tpl_vars['langs']->key;
?>
				<?php $_smarty_tpl->tpl_vars['TEMPDATA'] = new Smarty_variable(1, null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['SD']->value==1){?>
					<?php $_smarty_tpl->tpl_vars['TEMPDATA'] = new Smarty_variable(0, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value==null){?>
							<?php $_smarty_tpl->tpl_vars['TEMPDATA'] = new Smarty_variable(1, null, 0);?>
						<?php }?>
					<?php } ?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['TEMPDATA']->value==1){?>
					<tr data-langkey="<?php echo $_smarty_tpl->tpl_vars['lang_key']->value;?>
">
						<td><?php echo $_smarty_tpl->tpl_vars['lang_key']->value;?>
</td>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<td><input 
								data-lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"
								data-type="js"
								name="<?php echo $_smarty_tpl->tpl_vars['lang_key']->value;?>
" 
								class="translation inputElement <?php if ($_smarty_tpl->tpl_vars['item']->value==null){?>empty_value<?php }?>" 
								<?php if ($_smarty_tpl->tpl_vars['item']->value==null){?> placeholder="<?php echo vtranslate('LBL_NoTranslation',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" <?php }?> 
								type="text" 
								value ="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" />
							</td>
						<?php } ?>
						<td>
							<a href="#" class="pull-right marginRight10px delete_translation">
								<i class="fa fa-trash alignMiddle"></i>
							</a>
						</td>
					</tr>
				<?php }?>
			<?php } ?>
			<?php }?>
		</tbody>
	</table>
</div>
<?php }?><?php }} ?>
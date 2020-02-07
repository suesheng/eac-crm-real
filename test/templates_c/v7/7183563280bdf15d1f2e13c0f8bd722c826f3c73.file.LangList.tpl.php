<?php /* Smarty version Smarty-3.1.7, created on 2019-04-10 06:57:38
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/LangManagement/LangList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14682693665cad93e287d796-76333536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7183563280bdf15d1f2e13c0f8bd722c826f3c73' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/LangManagement/LangList.tpl',
      1 => 1554879415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14682693665cad93e287d796-76333536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE_MODEL' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cad93e289be2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cad93e289be2')) {function content_5cad93e289be2($_smarty_tpl) {?>
<!-- <button class="btn btn-primary add_lang btn-sm pull-right marginBottom10px"><?php echo vtranslate('LBL_ADD_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button> -->
<table class="table table-bordered table-condensed listViewEntriesTable">
	<thead>
		<tr class="blockHeader">
			<th><strong><?php echo vtranslate('LBL_Lang_label',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
			<th><strong><?php echo vtranslate('LBL_Lang_name',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
			<th><strong><?php echo vtranslate('LBL_Lang_prefix',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
			
			<th class="textAlignCenter"><strong><?php echo vtranslate('LBL_Lang_action',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
		</tr>
		
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['LANG'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getLang(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LANG']->key => $_smarty_tpl->tpl_vars['LANG']->value){
$_smarty_tpl->tpl_vars['LANG']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['LANG']->key;
?>
			<tr data-prefix="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['prefix'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['label'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['prefix'];?>
</td>
				
				<td class="textAlignCenter">
					<?php if ($_smarty_tpl->tpl_vars['LANG']->value['isdefault']!='1'){?>
						<button class="btn btn-danger" data-toggle="confirmation" data-original-title="" id="deleteItemC"><?php echo vtranslate('LBL_Delete',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
						<button class="btn btn-primary" data-toggle="confirmation" id="setAsDefault"><?php echo vtranslate('LBL_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
					<?php }?>
					<a href="index.php?module=LangManagement&parent=Settings&action=Export&lang=<?php echo $_smarty_tpl->tpl_vars['LANG']->value['prefix'];?>
" class="btn btn-primary"><?php echo vtranslate('Export',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php }} ?>
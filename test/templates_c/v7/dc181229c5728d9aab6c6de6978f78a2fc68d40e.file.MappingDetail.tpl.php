<?php /* Smarty version Smarty-3.1.7, created on 2018-10-30 09:28:43
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Potentials/MappingDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11626007545bd8244b6af852-41701395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc181229c5728d9aab6c6de6978f78a2fc68d40e' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Potentials/MappingDetail.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11626007545bd8244b6af852-41701395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'LINK_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'LABEL' => 0,
    'MAPPING_ID' => 0,
    'MAPPING' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd8244b6ce10',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd8244b6ce10')) {function content_5bd8244b6ce10($_smarty_tpl) {?>


<div class="potentialsFieldMappingListPageDiv"><div class="col-sm-12 col-xs-12"><div class="row settingsHeader"><span class="col-sm-12"><span class="pull-right"><?php  $_smarty_tpl->tpl_vars['LINK_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDetailViewLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINK_MODEL']->key => $_smarty_tpl->tpl_vars['LINK_MODEL']->value){
$_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = true;
?><button type="button" class="btn btn-default" onclick=<?php echo $_smarty_tpl->tpl_vars['LINK_MODEL']->value->getUrl();?>
><?php echo vtranslate($_smarty_tpl->tpl_vars['LINK_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php } ?></span></span></div><div class="contents table-container" id="detailView"><table class="table listview-table" id="listview-table"><thead><tr><th></th><th><?php echo vtranslate('LBL_FIELD_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_MAPPING_WITH_OTHER_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr><tr><th width="10%"><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><?php  $_smarty_tpl->tpl_vars['LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getHeaders(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->key => $_smarty_tpl->tpl_vars['LABEL']->value){
$_smarty_tpl->tpl_vars['LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['LABEL']->key;
?><th width="30%"><?php echo vtranslate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['LABEL']->value);?>
</th><?php } ?></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['MAPPING'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MAPPING']->_loop = false;
 $_smarty_tpl->tpl_vars['MAPPING_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMapping(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING']->key => $_smarty_tpl->tpl_vars['MAPPING']->value){
$_smarty_tpl->tpl_vars['MAPPING']->_loop = true;
 $_smarty_tpl->tpl_vars['MAPPING_ID']->value = $_smarty_tpl->tpl_vars['MAPPING']->key;
?><tr class="listViewEntries" data-cfmid="<?php echo $_smarty_tpl->tpl_vars['MAPPING_ID']->value;?>
"><td><?php if ($_smarty_tpl->tpl_vars['MAPPING']->value['editable']==1){?><?php  $_smarty_tpl->tpl_vars['LINK_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMappingLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINK_MODEL']->key => $_smarty_tpl->tpl_vars['LINK_MODEL']->value){
$_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = true;
?><div class="table-actions"><span class="actionImages"><a onclick=<?php echo $_smarty_tpl->tpl_vars['LINK_MODEL']->value->getUrl();?>
><i title="<?php echo vtranslate($_smarty_tpl->tpl_vars['LINK_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i></a></span></div><?php } ?><?php }?></td><td><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MAPPING']->value['Potentials']['label'];?>
<?php $_tmp1=ob_get_clean();?><?php echo vtranslate($_tmp1,'Potentials');?>
</td><td><?php echo vtranslate($_smarty_tpl->tpl_vars['MAPPING']->value['Potentials']['fieldDataType'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MAPPING']->value['Project']['label'];?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_tmp2,'Project');?>
</td></tr><?php } ?></tbody></table></div></div><div id="scroller_wrapper" class="bottom-fixed-scroll"><div id="scroller" class="scroller-div"></div></div></div><?php }} ?>
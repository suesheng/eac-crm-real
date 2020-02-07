<?php /* Smarty version Smarty-3.1.7, created on 2018-10-23 13:24:27
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/MenuEditor/AddModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8362659135bcf210bd64315-61938320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dd5f6d81259bb7b8d4e276d723840956552ae33' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/MenuEditor/AddModule.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8362659135bcf210bd64315-61938320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_APP_NAME' => 0,
    'APP_SELECTED_LABEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'APP_ARRAY' => 0,
    'APP_NAME' => 0,
    'HIDDEN_MODULES' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcf210bd7a72',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcf210bd7a72')) {function content_5bcf210bd7a72($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_ARRAY'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppMenuList(), null, 0);?><div class="modal-dialog modal-lg addModuleContainer"><div class="modal-content"><input id="appname" type="hidden" name="appname" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_APP_NAME']->value;?>
" /><div class="modal-header" ><div class="clearfix"><div class="pull-right"><button type="button" class="close" aria-label="Close" data-dismiss="modal" style="color: inherit;"><span aria-hidden="true" class='fa fa-close'></span></button></div><div class="btn-group"><?php $_smarty_tpl->tpl_vars['APP_SELECTED_LABEL'] = new Smarty_variable("LBL_SELECT_".($_smarty_tpl->tpl_vars['SELECTED_APP_NAME']->value)."_MODULES", null, 0);?><h4 class="pull-left textOverflowEllipsis" style="word-break: break-all;max-width: 95%;"><?php echo vtranslate($_smarty_tpl->tpl_vars['APP_SELECTED_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;&nbsp;</h4></div></div></div><div class="modal-body form-horizontal"><?php  $_smarty_tpl->tpl_vars['APP_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['APP_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['APP_ARRAY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['APP_NAME']->key => $_smarty_tpl->tpl_vars['APP_NAME']->value){
$_smarty_tpl->tpl_vars['APP_NAME']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['HIDDEN_MODULES'] = new Smarty_variable(Settings_MenuEditor_Module_Model::getHiddenModulesForApp($_smarty_tpl->tpl_vars['APP_NAME']->value), null, 0);?><div class="row modulesContainer <?php if ($_smarty_tpl->tpl_vars['APP_NAME']->value!=$_smarty_tpl->tpl_vars['SELECTED_APP_NAME']->value){?> hide <?php }?>" data-appname="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
"><div class="col-lg-12 col-md-12 col-sm-12"><?php if (count($_smarty_tpl->tpl_vars['HIDDEN_MODULES']->value)>0){?><?php  $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HIDDEN_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->key => $_smarty_tpl->tpl_vars['MODULE_NAME']->value){
$_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = true;
?><span class="btn-group" style="margin-bottom: 10px; margin-left: 25px; margin-right: -15px;"><buttton class="btn addButton btn-default module-buttons addModule" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" style="text-transform: inherit;margin-right:15px"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;&nbsp;<i class="fa fa-plus"></i></buttton></span><?php } ?><?php }else{ ?><h5><center><?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo vtranslate('LBL_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo vtranslate('LBL_FOUND',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
.</h4></center></h5><?php }?></div></div><?php } ?></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }} ?>
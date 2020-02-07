<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 10:49:00
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/LangManagement/Settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17265410245cc1909ccc6256-54760572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '353588b89eee1574ad6c4dc91f2135b337fac0a2' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Settings/LangManagement/Settings.tpl',
      1 => 1554879415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17265410245cc1909ccc6256-54760572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1909ccde0b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1909ccde0b')) {function content_5cc1909ccde0b($_smarty_tpl) {?>
<div class="container-fluid"><div class="widget_header row-fluid"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3>&nbsp;<?php echo vtranslate('LBL_Module_desc',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="btn-group pull-right"><button class="btn btn-default UpdateCheckModule" data-module="LangManagement" name="add_action" on>Check for updates</button><a id="deactivate_license_btn" type="button" class="btn btn-danger pull-right"><?php echo vtranslate('LBL_DEACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></div><hr><div class="clearfix"></div><div class="summaryWidgetContainer LangManagement" style="padding:10px !important"><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="active"><a data-toggle="tab" href="#lang_list"><strong><?php echo vtranslate('LBL_TAB_LIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="edit_lang"><a data-toggle="tab" href="#edit_lang" data-mode="editLang"><strong><?php echo vtranslate('LBL_TAB_EDITLANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><!--<li class="editHelpIcon"><a data-toggle="tab" href="#editHelpIcon" data-mode="editHelpIcon"><strong></strong></a></li>--></ul><div class="tab-content layoutContent padding10 themeTableColor overflowVisible" style="padding-bottom: 10px !important"><div class="tab-pane active" id="lang_list"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LangList.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="tab-pane" id="edit_lang" data-mode="editLang"></div><div class="tab-pane" id="editHelpIcon" data-mode="editHelpIcon"></div></div></div></div><div class="clearfix"></div><!-- <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AddLanguage.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 --><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AddTranslation.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }} ?>
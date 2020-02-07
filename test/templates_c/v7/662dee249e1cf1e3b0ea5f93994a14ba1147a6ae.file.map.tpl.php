<?php /* Smarty version Smarty-3.1.7, created on 2019-05-31 13:07:38
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Google/map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7388306315cf1271a576c13-80783512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '662dee249e1cf1e3b0ea5f93994a14ba1147a6ae' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Google/map.tpl',
      1 => 1536167403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7388306315cf1271a576c13-80783512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SOURCE_MODULE' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cf1271a5c486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf1271a5c486')) {function content_5cf1271a5c486($_smarty_tpl) {?>

<script type="text/javascript" src="layouts/v7/modules/Google/resources/Map.js"></script><div class="modal-dialog modal-lg mapcontainer"><div class="modal-content"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>vtranslate('LBL_GOOGLE_MAP',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value)), 0);?>
<div class="modal-body"><input type='hidden' id='record' value='<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
' /><input type='hidden' id='source_module' value='<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
' /><input type="hidden" id="record_label" /><div id='mapCanvas'><span id='address' class='hide'></span>&nbsp;&nbsp;<i id = 'mapLink' class="fa fa-external-link cursorPointer"></i><br><br><div id="map_canvas" style="min-height: 400px;"></div></div></div></div></div><?php }} ?>
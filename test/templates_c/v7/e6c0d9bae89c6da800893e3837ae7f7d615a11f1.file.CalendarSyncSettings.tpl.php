<?php /* Smarty version Smarty-3.1.7, created on 2019-07-24 11:12:29
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Google/CalendarSyncSettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19823584995d383d1db03704-58323889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6c0d9bae89c6da800893e3837ae7f7d615a11f1' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Google/CalendarSyncSettings.tpl',
      1 => 1536167403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19823584995d383d1db03704-58323889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'MODULENAME' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d383d1db2220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d383d1db2220')) {function content_5d383d1db2220($_smarty_tpl) {?>
<div class="modal-dialog modal-lg googleSettings" style="min-width: 800px;"><div class="modal-content" ><?php ob_start();?><?php echo vtranslate('LBL_FIELD_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<form class="form-horizontal" name="calendarsyncsettings"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULENAME']->value;?>
" /><input type="hidden" name="action" value="SaveSettings" /><input type="hidden" name="sourcemodule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><div class="modal-body"><div id="mappingTable"><table  class="table table-bordered"><thead><tr><td><b><?php echo vtranslate('APPTITLE',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</b></td><td><b><?php echo vtranslate('EXTENTIONNAME',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</b></td></tr></thead><tbody><tr><td><?php echo vtranslate('Subject',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</td><td><?php echo vtranslate('Event Title',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</td></tr><tr><td><?php echo vtranslate('Start Date & Time',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</td><td><?php echo vtranslate('From Date & Time',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</td></tr><tr><td><?php echo vtranslate('End Date & Time',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</td><td><?php echo vtranslate('Until Date & Time',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</td></tr><tr><td><?php echo vtranslate('Description',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</td><td><?php echo vtranslate('Description',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</td></tr><tr><td><?php echo vtranslate('Location',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</td><td><?php echo vtranslate('Where',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</td></tr><tr><td><?php echo vtranslate('Status',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</td><td><?php echo vtranslate('Planned',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</td></tr><tr><td><?php echo vtranslate('Activity Type',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</td><td><?php echo vtranslate('Meeting',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</td></tr><tr><td><?php echo vtranslate('Visibility',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</td><td><?php echo vtranslate('Privacy',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</td></tr></tbody></table></div></div></form><div class="modal-footer "><center><a href="#" class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></center></div></div></div><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2018-12-04 08:09:59
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Events/partials/EditViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:517596595c063657155b29-44223517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0db661cd8417ac2164802e64443ad67de67d551a' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Events/partials/EditViewContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '517596595c063657155b29-44223517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCK_LABEL' => 0,
    'MODULE' => 0,
    'ACCESSIBLE_USERS' => 0,
    'USER_ID' => 0,
    'CURRENT_USER' => 0,
    'INVITIES_SELECTED' => 0,
    'USER_NAME' => 0,
    'HEADER_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c06365717e1d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c06365717e1d')) {function content_5c06365717e1d($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/EditViewContents.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div name='editContent'><div class='fieldBlockContainer' data-block="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><h4 class='fieldBlockHeader'><?php echo vtranslate('LBL_INVITE_USER_BLOCK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4><hr><table class="table table-borderless"><tr><td class="fieldLabel alignMiddle"><?php echo vtranslate('LBL_INVITE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td class="fieldValue"><select id="selectedUsers" class="select2 inputElement" multiple name="selectedusers[]"><?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACCESSIBLE_USERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['USER_ID']->value==$_smarty_tpl->tpl_vars['CURRENT_USER']->value->getId()){?><?php continue 1?><?php }?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['USER_ID']->value,$_smarty_tpl->tpl_vars['INVITIES_SELECTED']->value)){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</option><?php } ?></select></td><td></td><td></td></tr></table><input type="hidden" name="recurringEditMode" value="" /><!--Confirmation modal for updating Recurring Events--><?php $_smarty_tpl->tpl_vars['MODULE'] = new Smarty_variable("Calendar", null, 0);?><div class="modal-dialog modelContainer recurringEventsUpdation modal-content hide" style='min-width:350px;'><?php ob_start();?><?php echo vtranslate('LBL_EDIT_RECURRING_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><div class="container-fluid"><div class="row" style="padding: 1%;padding-left: 3%;"><?php echo vtranslate('LBL_EDIT_RECURRING_EVENTS_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="row" style="padding: 1%;"><span class="col-sm-12"><span class="col-sm-4"><button class="btn btn-default onlyThisEvent" style="width : 150px"><?php echo vtranslate('LBL_ONLY_THIS_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></span><span class="col-sm-8"><?php echo vtranslate('LBL_ONLY_THIS_EVENT_EDIT_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span></div><div class="row" style="padding: 1%;"><span class="col-sm-12"><span class="col-sm-4"><button class="btn btn-default futureEvents" style="width : 150px"><?php echo vtranslate('LBL_FUTURE_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></span><span class="col-sm-8"><?php echo vtranslate('LBL_FUTURE_EVENTS_EDIT_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span></div><div class="row" style="padding: 1%;"><span class="col-sm-12"><span class="col-sm-4"><button class="btn btn-default allEvents" style="width : 150px"><?php echo vtranslate('LBL_ALL_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></span><span class="col-sm-8"><?php echo vtranslate('LBL_ALL_EVENTS_EDIT_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span></div></div></div></div><!--Confirmation modal for updating Recurring Events--></div></div><?php }} ?>
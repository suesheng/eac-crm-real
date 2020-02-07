<?php /* Smarty version Smarty-3.1.7, created on 2019-02-18 09:46:38
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/EmailPreview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11381311665c6a7efe0a0b06-67957823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e3d8bc338a6aeb3e8bd9e3d214de024c17562a2' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/EmailPreview.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11381311665c6a7efe0a0b06-67957823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PARENT_RECORD' => 0,
    'RECORD_ID' => 0,
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'FROM' => 0,
    'TO' => 0,
    'TO_EMAILS' => 0,
    'TO_ADDRESS' => 0,
    'RECORD' => 0,
    'CC' => 0,
    'BCC' => 0,
    'ATTACHMENT_DETAILS' => 0,
    'SEND_TIME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6a7efe0e965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6a7efe0e965')) {function content_5c6a7efe0e965($_smarty_tpl) {?>

<div class="SendEmailFormStep2 modal-dialog modal-lg" name="emailPreview"><div class="modal-content"><input type="hidden" name="parentRecord" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value;?>
"/><input type="hidden" name="recordId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"/><form class="form-horizontal" id="massEmailForm" method="post" action="index.php" enctype="multipart/form-data" name="massEmailForm"><?php ob_start();?><?php echo vtranslate('SINGLE_Emails',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate('LBL_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable((($_tmp1).(" ")).($_tmp2), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body" id='emailPreviewScroll'><div class="row"><div class="col-lg-6"><div class="row email-info-row"><span class="col-lg-12"><span class="col-lg-4"><span class="pull-right"><?php echo vtranslate('LBL_FROM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span><span class="col-lg-8"><span class="row-fluid"><?php echo $_smarty_tpl->tpl_vars['FROM']->value;?>
</span></span></span></div><div class="row email-info-row"><span class="col-lg-12"><span class="col-lg-4"><span class="pull-right"><?php echo vtranslate('LBL_TO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span><span class="col-lg-8"><?php if (empty($_smarty_tpl->tpl_vars['TO']->value)){?><?php $_smarty_tpl->tpl_vars['TO'] = new Smarty_variable(array(), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['TO_EMAILS'] = new Smarty_variable(implode(",",$_smarty_tpl->tpl_vars['TO']->value), null, 0);?><span class="row-fluid"><span class="col-sm-10 paddingLeft0"><p class="textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['TO_EMAILS']->value;?>
</p></span><?php if (count($_smarty_tpl->tpl_vars['TO']->value)>1){?><span class="col-sm-2"><a href="#" data-toggle="dropdown" style="text-transform: lowercase;"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a><ul class="dropdown-menu" style="padding:3px 6px; max-height:200px;" id="toAddressesDropdown"><?php  $_smarty_tpl->tpl_vars['TO_ADDRESS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TO_ADDRESS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TO_ADDRESS']->key => $_smarty_tpl->tpl_vars['TO_ADDRESS']->value){
$_smarty_tpl->tpl_vars['TO_ADDRESS']->_loop = true;
?><li><?php echo $_smarty_tpl->tpl_vars['TO_ADDRESS']->value;?>
</li><?php } ?></ul></span><?php }?></span></span></span></div></div><div class="col-lg-6"><div class="email-preview-toolbar pull-right"><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getEmailFlag()!='SAVED'){?><button type="button" name="previewReply" class="btn btn-sm btn-default" data-mode="emailReply"><?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><?php if (count($_smarty_tpl->tpl_vars['TO']->value)>1||!empty($_smarty_tpl->tpl_vars['CC']->value)||!empty($_smarty_tpl->tpl_vars['BCC']->value)){?><button type="button" name="previewReplyAll" class="btn btn-sm btn-default" data-mode="emailReplyAll"><?php echo vtranslate('LBL_REPLY_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><?php }?><?php }?><button type="button" name="previewForward" class="btn btn-sm btn-default" data-mode="emailForward"><?php echo vtranslate('LBL_FORWARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getEmailFlag()=='SAVED'){?><button type="button" name="previewEdit" class="btn btn-sm btn-default" data-mode="emailEdit"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><?php }?><button type="button" name="previewPrint" class="btn btn-sm btn-default" data-mode="previewPrint"><?php echo vtranslate('LBL_PRINT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div><div class="row"><div class="col-lg-8"><?php if (!empty($_smarty_tpl->tpl_vars['CC']->value)){?><div class="row email-info-row"><span class="col-lg-12"><span class="col-lg-3"><span class="pull-right"><?php echo vtranslate('LBL_CC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span><span class="col-lg-9"><span class="row-fluid"><?php echo $_smarty_tpl->tpl_vars['CC']->value;?>
</span></span></span></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['BCC']->value)){?><div class="row hide email-info-row"><span class="col-lg-12"><span class="col-lg-3"><span class="pull-right"><?php echo vtranslate('LBL_BCC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span><span class="col-lg-9"><span class="row-fluid"><?php echo $_smarty_tpl->tpl_vars['BCC']->value;?>
</span></span></span></div><?php }?><div class="row email-info-row"><span class="col-lg-12"><span class="col-lg-3"><span class="pull-right"><?php echo vtranslate('LBL_SUBJECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span><span class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
</span></span></div><div class="row email-info-row"><span class="col-lg-12"><span class="col-lg-3"><span class="pull-right"><?php echo vtranslate('LBL_ATTACHMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span><span class="col-lg-9"><?php if (count($_smarty_tpl->tpl_vars['RECORD']->value->getAttachmentDetails())<=0){?><?php echo vtranslate('LBL_NO_ATTACHMENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }else{ ?><?php  $_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RECORD']->value->getAttachmentDetails(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->key => $_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->value){
$_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->_loop = true;
?><i class="fa fa-download"></i>&nbsp;<a	<?php if (array_key_exists('docid',$_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->value)){?>href="index.php?module=Documents&action=DownloadFile&record=<?php echo $_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->value['docid'];?>
&fileid=<?php echo $_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->value['fileid'];?>
"<?php }else{ ?>href="index.php?module=Emails&action=DownloadFile&attachment_id=<?php echo $_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->value['fileid'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->value['attachment'];?>
</a>&nbsp;&nbsp;<?php } ?><?php }?></span></span></div></div></div><textarea style="display:none;" id="iframeDescription"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('description');?>
</textarea><div class="row email-info-row"><div class="col-lg-2" style="padding-right:10px;"><div class="pull-right"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class="col-lg-10"><div class="email-body-preview"><iframe frameBorder="0" scrolling='yes' id="emailPreviewIframe" style='width: 100%; overflow-y:visible; height:100%;'></iframe></div></div></div><hr><div class="row"><span class="col-lg-12" style="text-align: center;"><span class="muted"><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('email_flag')=="SAVED"){?><small><em><?php echo vtranslate('LBL_DRAFTED_ON',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</em></small><span><small><em>&nbsp;<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['RECORD']->value->get('createdtime'));?>
</em></small></span><?php }else{ ?><small><em><?php echo vtranslate('LBL_SENT_ON',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</em></small><?php $_smarty_tpl->tpl_vars["SEND_TIME"] = new Smarty_variable((($_smarty_tpl->tpl_vars['RECORD']->value->get('date_start')).(' ')).($_smarty_tpl->tpl_vars['RECORD']->value->get('time_start')), null, 0);?><span><small><em>&nbsp;<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['SEND_TIME']->value);?>
</em></small></span><?php }?></span></span></div><div class="row"><span class="col-lg-12" style="text-align: center;"><span><strong> <?php echo vtranslate('LBL_OWNER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo getOwnerName($_smarty_tpl->tpl_vars['RECORD']->value->get('assigned_user_id'));?>
</strong></span></span></div></div></form></div></div>
<?php }} ?>
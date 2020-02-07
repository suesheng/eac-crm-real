<?php /* Smarty version Smarty-3.1.7, created on 2018-10-24 14:10:06
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Potentials/SummaryViewWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6611618045bd07d3eea0c09-22194313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef15f3ff76383244889affc34ff43f7a11dc07f3' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Potentials/SummaryViewWidgets.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6611618045bd07d3eea0c09-22194313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DETAILVIEW_LINKS' => 0,
    'DETAIL_VIEW_WIDGET' => 0,
    'MODULE_NAME' => 0,
    'MODULE_SUMMARY' => 0,
    'DOCUMENT_WIDGET_MODEL' => 0,
    'RECORD' => 0,
    'PARENT_ID' => 0,
    'RELATED_ACTIVITIES' => 0,
    'COMMENTS_WIDGET_MODEL' => 0,
    'PRODUCT_WIDGET_MODEL' => 0,
    'CONTACT_WIDGET_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd07d3eed7db',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd07d3eed7db')) {function content_5bd07d3eed7db($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWWIDGET']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = true;
?><?php if (($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel()=='Documents')){?><?php $_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value, null, 0);?><?php }elseif(($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel()=='LBL_RELATED_CONTACTS')){?><?php $_smarty_tpl->tpl_vars['CONTACT_WIDGET_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value, null, 0);?><?php }elseif(($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel()=='LBL_RELATED_PRODUCTS')){?><?php $_smarty_tpl->tpl_vars['PRODUCT_WIDGET_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value, null, 0);?><?php }elseif(($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel()=='ModComments')){?><?php $_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value, null, 0);?><?php }elseif(($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel()=='LBL_UPDATES')){?><?php $_smarty_tpl->tpl_vars['UPDATES_WIDGET_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value, null, 0);?><?php }?><?php } ?><div class="left-block col-lg-4 col-md-4 col-sm-4"><div class="summaryView"><div class="summaryViewHeader"><h4 class="display-inline-block"><?php echo vtranslate('LBL_KEY_FIELDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></div><div class="summaryViewFields"><?php echo $_smarty_tpl->tpl_vars['MODULE_SUMMARY']->value;?>
</div></div><?php if ($_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value){?><div class="summaryWidgetContainer"><div class="widgetContainer_documents" data-url="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value->getLabel();?>
"><div class="widget_header clearfix"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value->get('linkName');?>
" /><span class="toggleButton pull-left"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;</span><h4 class="display-inline-block pull-left"><?php echo vtranslate($_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4><?php if ($_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value->get('action')){?><?php $_smarty_tpl->tpl_vars['PARENT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->getId(), null, 0);?><div class="pull-right"><div class="dropdown"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="fa fa-plus" title="<?php echo vtranslate('LBL_NEW_DOCUMENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span>&nbsp;<?php echo vtranslate('LBL_NEW_DOCUMENT','Documents');?>
&nbsp; <span class="caret"></span></button><ul class="dropdown-menu"><li class="dropdown-header"><i class="fa fa-upload"></i> <?php echo vtranslate('LBL_FILE_UPLOAD','Documents');?>
</li><li id="VtigerAction"><a href="javascript:Documents_Index_Js.uploadTo('Vtiger',<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
')"><img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="layouts/v7/skins//images/Vtiger.png"><?php ob_start();?><?php echo vtranslate('LBL_VTIGER','Documents');?>
<?php $_tmp1=ob_get_clean();?><?php echo vtranslate('LBL_TO_SERVICE','Documents',$_tmp1);?>
</a></li><li role="separator" class="divider"></li><li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E',<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; <?php ob_start();?><?php echo vtranslate('LBL_FILE_URL','Documents');?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate('LBL_FROM_SERVICE','Documents',$_tmp2);?>
</a></li><li role="separator" class="divider"></li><li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W',<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
')"><i class="fa fa-file-text"></i> <?php ob_start();?><?php echo vtranslate('SINGLE_Documents','Documents');?>
<?php $_tmp3=ob_get_clean();?><?php echo vtranslate('LBL_CREATE_NEW','Documents',$_tmp3);?>
</a></li></ul></div></div><?php }?></div><div class="widget_contents"></div></div></div><?php }?></div><div class="middle-block col-lg-4 col-md-4 col-sm-4"><div id="relatedActivities"><?php echo $_smarty_tpl->tpl_vars['RELATED_ACTIVITIES']->value;?>
</div><?php if ($_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL']->value){?><div class="summaryWidgetContainer"><div class="widgetContainer_comments" data-url="<?php echo $_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL']->value->getLabel();?>
"><div class="widget_header clearfix"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL']->value->get('linkName');?>
" /><h4 class="display-inline-block"><?php echo vtranslate($_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></div><div class="widget_contents"></div></div></div><?php }?></div><div class="right-block col-lg-4 col-sm-4 col-md-4"><?php if ($_smarty_tpl->tpl_vars['PRODUCT_WIDGET_MODEL']->value){?><div class="summaryWidgetContainer"><div class="widgetContainer_products" data-url="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_WIDGET_MODEL']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_WIDGET_MODEL']->value->getLabel();?>
"><div class="widget_header clearfix"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_WIDGET_MODEL']->value->get('linkName');?>
" /><span class="toggleButton pull-left"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;</span><h4 class="display-inline-block pull-left"><?php echo vtranslate($_smarty_tpl->tpl_vars['PRODUCT_WIDGET_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4><?php if ($_smarty_tpl->tpl_vars['PRODUCT_WIDGET_MODEL']->value->get('action')){?><div class="pull-right"><button class="btn addButton btn-sm btn-default createRecord" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_WIDGET_MODEL']->value->get('actionURL');?>
"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div><?php }?></div><div class="widget_contents"></div></div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['CONTACT_WIDGET_MODEL']->value){?><div class="summaryWidgetContainer"><div class="widgetContainer_contacts" data-url="<?php echo $_smarty_tpl->tpl_vars['CONTACT_WIDGET_MODEL']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['CONTACT_WIDGET_MODEL']->value->getLabel();?>
"><div class="widget_header clearfix"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['CONTACT_WIDGET_MODEL']->value->get('linkName');?>
" /><span class="toggleButton pull-left"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;</span><h4 class="display-inline-block pull-left"><?php echo vtranslate($_smarty_tpl->tpl_vars['CONTACT_WIDGET_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4><?php if ($_smarty_tpl->tpl_vars['CONTACT_WIDGET_MODEL']->value->get('action')){?><div class="pull-right"><button class="btn addButton btn-sm btn-default createRecord" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['CONTACT_WIDGET_MODEL']->value->get('actionURL');?>
"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div><?php }?></div><div class="widget_contents"></div></div></div><?php }?></div>
<?php }} ?>
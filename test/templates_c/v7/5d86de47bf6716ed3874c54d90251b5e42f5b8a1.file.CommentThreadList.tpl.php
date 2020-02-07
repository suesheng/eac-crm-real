<?php /* Smarty version Smarty-3.1.7, created on 2019-02-19 09:19:28
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/CommentThreadList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17882694355c6bca201beee7-09529885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d86de47bf6716ed3874c54d90251b5e42f5b8a1' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/CommentThreadList.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17882694355c6bca201beee7-09529885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COMMENTS_MODULE_MODEL' => 0,
    'COMMENT' => 0,
    'IMAGE_PATH' => 0,
    'CREATOR_NAME' => 0,
    'CHILDS_ROOT_PARENT_MODEL' => 0,
    'CHILD_COMMENTS_MODEL' => 0,
    'CHILDS_ROOT_PARENT_ID' => 0,
    'PARENT_COMMENT_ID' => 0,
    'CHILD_COMMENTS_COUNT' => 0,
    'MODULE_NAME' => 0,
    'IS_CREATABLE' => 0,
    'CURRENTUSER' => 0,
    'IS_EDITABLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6bca201f6e2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6bca201f6e2')) {function content_5c6bca201f6e2($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['IS_CREATABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('CreateView'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['IS_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('EditView'), null, 0);?>

<div class="commentDiv cursorPointer">
	<div class="singleComment">
		<input type="hidden" name="is_private" value="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('is_private');?>
">
		<div class="commentInfoHeader" data-commentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getId();?>
" data-parentcommentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('parent_comments');?>
">
			<?php $_smarty_tpl->tpl_vars['PARENT_COMMENT_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getParentCommentModel(), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['CHILD_COMMENTS_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getChildComments(), null, 0);?>
			<div class="col-lg-12">
				<div class="media" <?php if ($_smarty_tpl->tpl_vars['COMMENT']->value->get('is_private')){?>style="background: #fff9ea;"<?php }?>>
					<div class="media-left title" id="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getId();?>
">
						<?php $_smarty_tpl->tpl_vars['CREATOR_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedByName(), null, 0);?>
						<div class="col-lg-2 recordImage commentInfoHeader" style ="width:50px; height:50px; font-size: 30px;" data-commentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getId();?>
" data-parentcommentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('parent_comments');?>
" data-relatedto = "<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('related_to');?>
">
							<?php $_smarty_tpl->tpl_vars['IMAGE_PATH'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getImagePath(), null, 0);?>
							<?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_PATH']->value)){?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
" width="100%" height="100%" align="left">
							<?php }else{ ?>
								<div class="name" style="font-size: 30px;"><span><strong> <?php echo htmlspecialchars(mb_substr($_smarty_tpl->tpl_vars['CREATOR_NAME']->value,0,2), ENT_QUOTES, 'UTF-8', true);?>
 </strong></span></div>
							<?php }?>
						</div>
					</div>
					<div class="media-body">
						<div class="comment" style="line-height:1;">
							<span class="creatorName" >
								<?php echo $_smarty_tpl->tpl_vars['CREATOR_NAME']->value;?>

							</span>&nbsp; 
							<span class="commentTime text-muted cursorDefault">
								<small title="<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedTime());?>
"><?php echo Vtiger_Util_Helper::formatDateDiffInStrings($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedTime());?>
</small>
							</span>
							<div class="">
								<span class="commentInfoContent">
									<?php echo nl2br($_smarty_tpl->tpl_vars['COMMENT']->value->get('commentcontent'));?>

								</span>
							</div>
							<br>
							<div class="commentActionsContainer">
								<span class="commentActions">
									<?php if ($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value){?>
										<?php $_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value->getId(), null, 0);?>
									<?php }?>
									<?php $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getChildCommentsCount(), null, 0);?>
									<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_MODEL']->value!=null&&($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID']->value!=$_smarty_tpl->tpl_vars['PARENT_COMMENT_ID']->value)){?>
										<span class="viewThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
">
											<a href="javascript:void(0)" class="cursorPointer viewThread">
												<span class="childCommentsCount"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value==1){?><?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }?>&nbsp;
											</a>
										</span>
										<span class="hideThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
" style="display:none;">
											<a href="javascript:void(0)" class="cursorPointer hideThread">
												<span class="childCommentsCount"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value==1){?><?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }?>&nbsp;
											</a>
										</span>
									<?php }elseif($_smarty_tpl->tpl_vars['CHILD_COMMENTS_MODEL']->value!=null&&($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID']->value==$_smarty_tpl->tpl_vars['PARENT_COMMENT_ID']->value)){?>
										<span class="viewThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
" style="display:none;">
											<a href="javascript:void(0)" class="cursorPointer viewThread">
												<span class="childCommentsCount"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value==1){?><?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }?>&nbsp;
											</a>
										</span>
										<span class="hideThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
">
											<a href="javascript:void(0)" class="cursorPointer hideThread">
												<span class="childCommentsCount"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value==1){?><?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }?>&nbsp;
												<img class="alignMiddle" src="<?php echo vimage_path('arrowdown.png');?>
" />
											</a>
										</span>
									<?php }?>
									<span class="commemntActionsubblock" >
										<?php if ($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value){?>
											<?php $_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value->getId(), null, 0);?>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['IS_CREATABLE']->value){?>
											<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value){?><span>&nbsp;|&nbsp;</span><?php }?>
											<a href="javascript:void(0);" class="cursorPointer replyComment feedback" style="color: blue;">
												<?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

											</a>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId()==$_smarty_tpl->tpl_vars['COMMENT']->value->get('userid')&&$_smarty_tpl->tpl_vars['IS_EDITABLE']->value){?>
											<?php if ($_smarty_tpl->tpl_vars['IS_CREATABLE']->value){?>&nbsp;&nbsp;&nbsp;<?php }?>
											<a href="javascript:void(0);" class="cursorPointer editComment feedback" style="color: blue;">
												<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

											</a>
										<?php }?>
									</span>
								</span>
							</div>
						</div>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
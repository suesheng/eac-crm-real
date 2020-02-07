<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 14:01:51
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/MailManager/FolderList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10796381315cc1bdcfb7b847-77006319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b068a45cd46a0bf893853b52fb6dade8d958319' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/MailManager/FolderList.tpl',
      1 => 1536167399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10796381315cc1bdcfb7b847-77006319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOLDERS' => 0,
    'FOLDER' => 0,
    'INBOX_ADDED' => 0,
    'MODULE' => 0,
    'TRASH_ADDED' => 0,
    'INBOX_FOLDER' => 0,
    'SENT_FOLDER' => 0,
    'TRASH_FOLDER' => 0,
    'IGNORE_FOLDERS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1bdcfbbdcc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1bdcfbbdcc')) {function content_5cc1bdcfbbdcc($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['FOLDERS']->value){?>
    <?php $_smarty_tpl->tpl_vars['INBOX_ADDED'] = new Smarty_variable(0, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['TRASH_ADDED'] = new Smarty_variable(0, null, 0);?>
    <ul>
        <?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?>
            <?php if (stripos($_smarty_tpl->tpl_vars['FOLDER']->value->name(),'inbox')!==false&&$_smarty_tpl->tpl_vars['INBOX_ADDED']->value==0){?>
                <?php $_smarty_tpl->tpl_vars['INBOX_ADDED'] = new Smarty_variable(1, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['INBOX_FOLDER'] = new Smarty_variable($_smarty_tpl->tpl_vars['FOLDER']->value->name(), null, 0);?>
                <li class="cursorPointer mm_folder mmMainFolder active" data-foldername="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
">
                    <i class="fa fa-inbox fontSize20px"></i>&nbsp;&nbsp;
                    <b><?php echo vtranslate('LBL_INBOX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b>
                    <span class="pull-right mmUnreadCountBadge <?php if (!$_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount()){?>hide<?php }?>">
                       <?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount();?>
 
                    </span>
                </li>
                <li class="cursorPointer mm_folder mmMainFolder" data-foldername="vt_drafts">
                    <i class="fa fa-floppy-o fontSize20px"></i>&nbsp;&nbsp;
                    <b><?php echo vtranslate('LBL_Drafts',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b>
                </li>
            <?php }?>
        <?php } ?>
        
        <?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->isSentFolder()){?>
                <?php $_smarty_tpl->tpl_vars['SENT_FOLDER'] = new Smarty_variable($_smarty_tpl->tpl_vars['FOLDER']->value->name(), null, 0);?>
                <li class="cursorPointer mm_folder mmMainFolder" data-foldername="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
">
                    <i class="fa fa-paper-plane fontSize20px"></i>&nbsp;&nbsp;
                    <b><?php echo vtranslate('LBL_SENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b>
                    <span class="pull-right mmUnreadCountBadge <?php if (!$_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount()){?>hide<?php }?>">
                       <?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount();?>
 
                    </span>
                </li>
            <?php }?>
        <?php } ?>
        
        <?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?>
            <?php if (stripos($_smarty_tpl->tpl_vars['FOLDER']->value->name(),'trash')!==false&&$_smarty_tpl->tpl_vars['TRASH_ADDED']->value==0){?>
                <?php $_smarty_tpl->tpl_vars['TRASH_ADDED'] = new Smarty_variable(1, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['TRASH_FOLDER'] = new Smarty_variable($_smarty_tpl->tpl_vars['FOLDER']->value->name(), null, 0);?>
                <li class="cursorPointer mm_folder mmMainFolder" data-foldername="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
">
                    <i class="fa fa-trash-o fontSize20px"></i>&nbsp;&nbsp;
                    <b><?php echo vtranslate('LBL_TRASH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b>
                    <span class="pull-right mmUnreadCountBadge <?php if (!$_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount()){?>hide<?php }?>">
                       <?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount();?>
 
                    </span>
                </li>
            <?php }?>
        <?php } ?>
        <br>
        <span class="padding15px"><b><?php echo vtranslate('LBL_Folders',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></span>
        
        <?php $_smarty_tpl->tpl_vars['IGNORE_FOLDERS'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['INBOX_FOLDER']->value,$_smarty_tpl->tpl_vars['SENT_FOLDER']->value,$_smarty_tpl->tpl_vars['TRASH_FOLDER']->value), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?>
            <?php if (!in_array($_smarty_tpl->tpl_vars['FOLDER']->value->name(),$_smarty_tpl->tpl_vars['IGNORE_FOLDERS']->value)){?>
            <li class="cursorPointer mm_folder mmOtherFolder" data-foldername="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
">
                <b><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
</b>
                <span class="pull-right mmUnreadCountBadge <?php if (!$_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount()){?>hide<?php }?>">
                   <?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount();?>
 
                </span>
            </li>
            <?php }?>
        <?php } ?>
    </ul>
<?php }?><?php }} ?>
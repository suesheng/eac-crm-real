<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 13:52:20
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/OverlayEditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8061204095cc1bb94823695-91661136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20ed9af25cb8aba69c5f928daac9d9c84340adee' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Vtiger/OverlayEditView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8061204095cc1bb94823695-91661136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SCRIPTS' => 0,
    'jsModel' => 0,
    'MODULE' => 0,
    'SINGLE_MODULE_NAME' => 0,
    'RECORD_STRUCTURE_MODEL' => 0,
    'USER_MODEL' => 0,
    'IS_PARENT_EXISTS' => 0,
    'SPLITTED_MODULE' => 0,
    'RECORD_ID' => 0,
    'IS_RELATION_OPERATION' => 0,
    'SOURCE_MODULE' => 0,
    'SOURCE_RECORD' => 0,
    'RETURN_VIEW' => 0,
    'RETURN_MODULE' => 0,
    'RETURN_RECORD' => 0,
    'RETURN_RELATED_TAB' => 0,
    'RETURN_RELATED_MODULE' => 0,
    'RETURN_PAGE' => 0,
    'RETURN_VIEW_NAME' => 0,
    'RETURN_SEARCH_PARAMS' => 0,
    'RETURN_SEARCH_KEY' => 0,
    'RETURN_SEARCH_VALUE' => 0,
    'RETURN_SEARCH_OPERATOR' => 0,
    'RETURN_SORTBY' => 0,
    'RETURN_ORDERBY' => 0,
    'RETURN_MODE' => 0,
    'RETURN_RELATION_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1bb9484af5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1bb9484af5')) {function content_5cc1bb9484af5($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['jsModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SCRIPTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsModel']->key => $_smarty_tpl->tpl_vars['jsModel']->value){
$_smarty_tpl->tpl_vars['jsModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['jsModel']->key;
?>
    <script type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"></script>
<?php } ?>

<div class='fc-overlay-modal modal-content overlayEdit'>
    <div class="overlayHeader">
        <?php ob_start();?><?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TITLE'] = new Smarty_variable($_tmp1." ".$_tmp2." - ".($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getRecordName()), null, 0);?> 
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <form class="form-horizontal recordEditView" id="EditView" name="edit" method="post" action="index.php" enctype="multipart/form-data">
        <div class='modal-body editViewBody'>
            <div class="editViewContents">
                <?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME'] = new Smarty_variable($_tmp3, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['IS_PARENT_EXISTS'] = new Smarty_variable(strpos($_smarty_tpl->tpl_vars['MODULE']->value,":"), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['IS_PARENT_EXISTS']->value){?>
                    <?php $_smarty_tpl->tpl_vars['SPLITTED_MODULE'] = new Smarty_variable(explode(":",$_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?>
                    <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['SPLITTED_MODULE']->value[1];?>
" />
                    <input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['SPLITTED_MODULE']->value[0];?>
" />
                <?php }else{ ?>
                    <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" />
                <?php }?>
                <input type="hidden" name="action" value="Save" />
                <input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" />
                <input type="hidden" name="defaultCallDuration" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('callduration');?>
" />
                <input type="hidden" name="defaultOtherEventDuration" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('othereventduration');?>
" />
                <?php if ($_smarty_tpl->tpl_vars['IS_RELATION_OPERATION']->value){?>
                    <input type="hidden" name="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" />
                    <input type="hidden" name="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
" />
                    <input type="hidden" name="relationOperation" value="<?php echo $_smarty_tpl->tpl_vars['IS_RELATION_OPERATION']->value;?>
" />
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['RETURN_VIEW']->value){?>
                    <input type="hidden" name="returnmodule" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_MODULE']->value;?>
" />
                    <input type="hidden" name="returnview" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_VIEW']->value;?>
" />
                    <input type="hidden" name="returnrecord" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_RECORD']->value;?>
" />
                    <input type="hidden" name="returntab_label" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_RELATED_TAB']->value;?>
" />
                    <input type="hidden" name="returnrelatedModule" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_RELATED_MODULE']->value;?>
" />
                    <input type="hidden" name="returnpage" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_PAGE']->value;?>
" />
                    <input type="hidden" name="returnviewname" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_VIEW_NAME']->value;?>
" />
                    <input type="hidden" name="returnsearch_params" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['RETURN_SEARCH_PARAMS']->value);?>
' />
                    <input type="hidden" name="returnsearch_key" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SEARCH_KEY']->value;?>
 />
                    <input type="hidden" name="returnsearch_value" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SEARCH_VALUE']->value;?>
 />
                    <input type="hidden" name="returnoperator" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SEARCH_OPERATOR']->value;?>
 />
                    <input type="hidden" name="returnsortorder" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SORTBY']->value;?>
 />
                    <input type="hidden" name="returnorderby" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ORDERBY']->value;?>
" />
                    <input type="hidden" name="returnmode" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_MODE']->value;?>
 />
                    <input type="hidden" name="returnrelationId" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_RELATION_ID']->value;?>
" />
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/EditViewContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
        </div>
        <div class='modal-footer overlayFooter'>
            <center>
                <footer>
                    <button class="btn btn-success saveButton" type="submit">Save</button>
                    <a class="cancelLink" data-dismiss="modal" type="reset">Cancel</a>
                </footer>
            </center>
        </div>
    </form>
</div><?php }} ?>
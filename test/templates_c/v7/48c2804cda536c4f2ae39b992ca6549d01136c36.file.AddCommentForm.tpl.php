<?php /* Smarty version Smarty-3.1.7, created on 2019-01-14 08:07:35
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/AddCommentForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6603938225c3c43474c8105-99128363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48c2804cda536c4f2ae39b992ca6549d01136c36' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/AddCommentForm.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6603938225c3c43474c8105-99128363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SOURCE_MODULE' => 0,
    'CVID' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'SEARCH_KEY' => 0,
    'OPERATOR' => 0,
    'ALPHABET_VALUE' => 0,
    'SEARCH_PARAMS' => 0,
    'HEADER_TITLE' => 0,
    'COMMENT_TEXTAREA_DEFAULT_ROWS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c3c4347510e8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3c4347510e8')) {function content_5c3c4347510e8($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars["COMMENT_TEXTAREA_DEFAULT_ROWS"] = new Smarty_variable("2", null, 0);?>
<div class="modal-dialog">
    <div class="modal-content">
        <form class="form-horizontal" id="massSave" method="post" action="index.php">
            <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" />
            <input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" />
            <input type="hidden" name="action" value="MassSaveAjax" />
            <input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" />
            <input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
>
            <input type="hidden" name="excluded_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
>
            <input type="hidden" name="search_key" value= "<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" />
            <input type="hidden" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" />
            <input type="hidden" name="search_value" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" />
            <input type="hidden" name="search_params" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value);?>
' />

            <?php ob_start();?><?php echo vtranslate('LBL_ADDING_COMMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>


            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row commentTextArea" id="mass_action_add_comment">
                        <textarea class="col-lg-12" name="commentcontent" id="commentcontent" rows="<?php echo $_smarty_tpl->tpl_vars['COMMENT_TEXTAREA_DEFAULT_ROWS']->value;?>
" placeholder="<?php echo vtranslate('LBL_WRITE_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." data-rule-required="true"></textarea>
                    </div>
                </div>
            </div>
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AddCommentFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

       </form>
    </div>
</div>

<?php }} ?>
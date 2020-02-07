<?php /* Smarty version Smarty-3.1.7, created on 2018-11-20 12:30:00
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PDFMaker/GetPDFButtons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20921069895bf3fe4808ff79-75250154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c300ffdcd96085ee2f3fd890d5d1a9786466f28f' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/PDFMaker/GetPDFButtons.tpl',
      1 => 1542712691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20921069895bf3fe4808ff79-75250154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ENABLE_PDFMAKER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bf3fe4809bf6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf3fe4809bf6')) {function content_5bf3fe4809bf6($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['ENABLE_PDFMAKER']->value=='true'){?>

     <div class="col-sm-4 pull-right" id="PDFMakerContentDiv">
        <div class="row clearfix">
                <div class="col-sm-6 padding0px pull-right">
                    <div class="btn-group pull-right">
                        <button class="btn btn-default selectPDFTemplates"><?php echo vtranslate('LBL_EXPORT_TO_PDF','PDFMaker');?>
</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split PDFMoreAction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo vtranslate('LBL_MORE','PDFMaker');?>
&nbsp;&nbsp;<span class="caret"></span></button>
                        </button>
                            <ul class="dropdown-menu">
                                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("GetPDFActions.tpl",'PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php }?><?php }} ?>
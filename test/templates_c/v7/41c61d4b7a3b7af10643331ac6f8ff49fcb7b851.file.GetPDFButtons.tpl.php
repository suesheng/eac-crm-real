<?php /* Smarty version Smarty-3.1.7, created on 2019-04-22 10:06:38
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/PDFMaker/GetPDFButtons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11307828015cbd922edd40a0-47290409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41c61d4b7a3b7af10643331ac6f8ff49fcb7b851' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/PDFMaker/GetPDFButtons.tpl',
      1 => 1542712691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11307828015cbd922edd40a0-47290409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ENABLE_PDFMAKER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbd922eddb59',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbd922eddb59')) {function content_5cbd922eddb59($_smarty_tpl) {?>

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
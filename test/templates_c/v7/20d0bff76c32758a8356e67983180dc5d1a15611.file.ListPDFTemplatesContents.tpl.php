<?php /* Smarty version Smarty-3.1.7, created on 2019-05-06 10:33:20
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/PDFMaker/ListPDFTemplatesContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4643640445cd00d70abf319-06175630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20d0bff76c32758a8356e67983180dc5d1a15611' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/PDFMaker/ListPDFTemplatesContents.tpl',
      1 => 1542712691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4643640445cd00d70abf319-06175630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_ENTRIES_COUNT' => 0,
    'module_dir' => 0,
    'MODULE' => 0,
    'description_dir' => 0,
    'PDFTEMPLATES' => 0,
    'template' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd00d70ad21d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd00d70ad21d')) {function content_5cd00d70ad21d($_smarty_tpl) {?>

<div class="col-sm-12 col-xs-12 ">

    <input type="hidden" name="idlist" >
    <input type="hidden" name="module" value="PDFMaker">
    <input type="hidden" name="parenttab" value="Tools">
    <input type="hidden" name="view" value="List">
    <div id="table-content" class="table-container">

        <form name='list' id='listedit' action='' onsubmit="return false;">
            <table id="listview-table" class="table <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value=='0'){?>listview-table-norecords <?php }?> listview-table">
                <thead>
                <tr class="listViewContentHeader">
                    <th></th>
                    <th nowrap="nowrap"><a href="#" data-columnname="module" data-nextsortorderval="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
" class="listViewContentHeaderValues">&nbsp;<?php echo vtranslate("LBL_MODULENAMES",$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</a></th>
                    <th nowrap="nowrap"><a href="#" data-columnname="description" data-nextsortorderval="<?php echo $_smarty_tpl->tpl_vars['description_dir']->value;?>
" class="listViewContentHeaderValues"><?php echo vtranslate("LBL_DESCRIPTION",$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</a></th>
                </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PDFTEMPLATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
                    <tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['template']->value['templateid'];?>
" data-recordurl="index.php?module=PDFMaker&view=DetailFree&templateid=<?php echo $_smarty_tpl->tpl_vars['template']->value['templateid'];?>
" id="PDFMaker_listView_row_<?php echo $_smarty_tpl->tpl_vars['template']->value['templateid'];?>
">
                        <td class="listViewRecordActions">
                            <div class="table-actions">
                                   <span class="more dropdown action">
                                            <span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v icon"></i></span>
                                                <ul class="dropdown-menu">
                                                    <li><a data-id="<?php echo $_smarty_tpl->tpl_vars['template']->value['templateid'];?>
" href="index.php?module=PDFMaker&view=DetailFree&templateid=<?php echo $_smarty_tpl->tpl_vars['template']->value['templateid'];?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"><?php echo vtranslate('LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li>
                                                    <?php echo $_smarty_tpl->tpl_vars['template']->value['edit'];?>

                                                </ul>
                                        </span>
                            </div>
                        </td>
                        <td class="listViewEntryValue"><?php echo $_smarty_tpl->tpl_vars['template']->value['module'];?>
</a></td>
                        <td class="listViewEntryValue"><?php echo $_smarty_tpl->tpl_vars['template']->value['description'];?>
&nbsp;</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </form>
    </div>
</div>
<br>
<div align="center" class="small" style="color: rgb(153, 153, 153);"><?php echo vtranslate("PDF_MAKER",$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
 <?php echo vtranslate("COPYRIGHT",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><?php }} ?>
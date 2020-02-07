<?php /* Smarty version Smarty-3.1.7, created on 2019-01-28 12:03:02
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/History.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10927496635c4eef760894c2-65389072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26c8bee44965ab6ba4ca6d79299a78cdd48a7ab7' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/History.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10927496635c4eef760894c2-65389072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
    'CURRENT_USER' => 0,
    'ACCESSIBLE_USERS' => 0,
    'USER_ID' => 0,
    'CURRENT_USER_ID' => 0,
    'USER_NAME' => 0,
    'COMMENTS_MODULE_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c4eef760b072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4eef760b072')) {function content_5c4eef760b072($_smarty_tpl) {?>
<div class="dashboardWidgetHeader clearfix">
    <div class="title">
        <div class="dashboardTitle" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><b>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle());?>
</b></div>
    </div>
    <div class="userList">
        <?php $_smarty_tpl->tpl_vars['CURRENT_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER']->value->getId(), null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['ACCESSIBLE_USERS']->value)>1){?>
            <select class="select2 widgetFilter col-lg-3 reloadOnChange" name="type">
                <option value="all"  selected><?php echo vtranslate('All',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                <?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACCESSIBLE_USERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
">
                    <?php if ($_smarty_tpl->tpl_vars['USER_ID']->value==$_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value){?> 
                        <?php echo vtranslate('LBL_MINE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>

                    <?php }?>
                    </option>
                <?php } ?>
            </select>
            <?php }else{ ?>
                <center><?php echo vtranslate('LBL_MY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('History',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</center>
        <?php }?>
    </div>
</div>
<div class="dashboardWidgetContent" style="padding-top:15px;">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/HistoryContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div class="widgeticons dashBoardWidgetFooter">
    <div class="filterContainer boxSizingBorderBox">
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-sm-12">
                <div class="col-lg-4">
                    <span><strong><?php echo vtranslate('LBL_SHOW',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></span>
                </div>
                <div class="col-lg-7">
                        <?php if ($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('DetailView')){?>
                            <label class="radio-group cursorPointer">
                                <input type="radio" name="historyType" class="widgetFilter reloadOnChange cursorPointer" value="comments" /> <?php echo vtranslate('LBL_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

                            </label><br>
                        <?php }?>
                        <label class="radio-group cursorPointer">
                            <input type="radio" name="historyType" class="widgetFilter reloadOnChange cursorPointer" value="updates" /> 
                            <span><?php echo vtranslate('LBL_UPDATES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>
                        </label><br>
                        <label class="radio-group cursorPointer">
                            <input type="radio" name="historyType" class="widgetFilter reloadOnChange cursorPointer" value="all" checked="" /> <?php echo vtranslate('LBL_BOTH',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

                        </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <span class="col-lg-4">
                        <span>
                            <strong><?php echo vtranslate('LBL_SELECT_DATE_RANGE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong>
                        </span>
                </span>
                <span class="col-lg-7">
                    <div class="input-daterange input-group dateRange widgetFilter" id="datepicker" name="modifiedtime">
                        <input type="text" class="input-sm form-control" name="start" style="height:30px;"/>
                        <span class="input-group-addon">to</span>
                        <input type="text" class="input-sm form-control" name="end" style="height:30px;"/>
                    </div>
                </span>
            </div>
        </div>
    </div>
    <div class="footerIcons pull-right">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SETTING_EXIST'=>true), 0);?>

    </div>
</div><?php }} ?>
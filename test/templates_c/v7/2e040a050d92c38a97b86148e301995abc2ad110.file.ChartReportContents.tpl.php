<?php /* Smarty version Smarty-3.1.7, created on 2019-01-31 09:16:19
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/ChartReportContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9753638725c52bce37f9f21-27021976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e040a050d92c38a97b86148e301995abc2ad110' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/ChartReportContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9753638725c52bce37f9f21-27021976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CHART_TYPE' => 0,
    'DATA' => 0,
    'CLICK_THROUGH' => 0,
    'YAXIS_FIELD_TYPE' => 0,
    'MODULE' => 0,
    'REPORT_MODEL' => 0,
    'BASE_CURRENCY_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c52bce380560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c52bce380560')) {function content_5c52bce380560($_smarty_tpl) {?>

<input type='hidden' name='charttype' value="<?php echo $_smarty_tpl->tpl_vars['CHART_TYPE']->value;?>
" />
<input type='hidden' name='data' value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['DATA']->value);?>
' />
<input type='hidden' name='clickthrough' value="<?php echo $_smarty_tpl->tpl_vars['CLICK_THROUGH']->value;?>
" />

<br>
<div class="dashboardWidgetContent">
    <input type="hidden" class="yAxisFieldType" value="<?php echo $_smarty_tpl->tpl_vars['YAXIS_FIELD_TYPE']->value;?>
" />
    <div class='border1px filterConditionContainer' style="padding:30px;">
        <div id='chartcontent' name='chartcontent' style="min-height:400px;" data-mode='Reports'></div>
        <br>
        <?php if ($_smarty_tpl->tpl_vars['CLICK_THROUGH']->value!='true'){?>
            <div class='row-fluid alert-info'>
                <span class='col-lg-4 offset4'> &nbsp;</span>
                <span class='span alert-info'>
                    <i class="icon-info-sign"></i>
                    <?php echo vtranslate('LBL_CLICK_THROUGH_NOT_AVAILABLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                </span>
            </div>
            <br>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['REPORT_MODEL']->value->isInventoryModuleSelected()){?>
            <div class="alert alert-info">
                <?php $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO'] = new Smarty_variable(Vtiger_Util_Helper::getUserCurrencyInfo(), null, 0);?>
                <i class="icon-info-sign" style="margin-top: 1px;"></i>&nbsp;&nbsp;
                <?php echo vtranslate('LBL_CALCULATION_CONVERSION_MESSAGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO']->value['currency_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO']->value['currency_code'];?>
)
            </div>
        <?php }?>
    </div>
</div>
<br>

<?php }} ?>
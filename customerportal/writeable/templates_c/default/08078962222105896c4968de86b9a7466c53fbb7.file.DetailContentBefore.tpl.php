<?php /* Smarty version Smarty-3.1.19, created on 2019-02-15 15:35:59
         compiled from "/var/www/html/vtigercrm/customerportal/layouts/default/templates/ProjectTask/partials/DetailContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8741194375c66c03fcc23e5-32337512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08078962222105896c4968de86b9a7466c53fbb7' => 
    array (
      0 => '/var/www/html/vtigercrm/customerportal/layouts/default/templates/ProjectTask/partials/DetailContentBefore.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8741194375c66c03fcc23e5-32337512',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c66c03fcc6408_38192060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c66c03fcc6408_38192060')) {function content_5c66c03fcc6408_38192060($_smarty_tpl) {?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ticket-detail-header-row ">
  <h3 class="fsmall">
    <detail-navigator>
      <span>
        <a ng-click="navigateBack(module)" style="font-size:small;">{{ptitle}}
        </a>
      </span>
      </detail-navigator>
      {{record[header]}}
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<?php }} ?>

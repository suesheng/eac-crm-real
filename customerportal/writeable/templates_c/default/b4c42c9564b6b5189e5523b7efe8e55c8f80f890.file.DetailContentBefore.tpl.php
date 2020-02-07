<?php /* Smarty version Smarty-3.1.19, created on 2019-06-11 15:50:00
         compiled from "/var/www/html/eac-crm/customerportal/layouts/default/templates/Portal/partials/DetailContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18341481525cffa3787a4864-34719498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4c42c9564b6b5189e5523b7efe8e55c8f80f890' => 
    array (
      0 => '/var/www/html/eac-crm/customerportal/layouts/default/templates/Portal/partials/DetailContentBefore.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18341481525cffa3787a4864-34719498',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cffa3787a6563_19594213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cffa3787a6563_19594213')) {function content_5cffa3787a6563_19594213($_smarty_tpl) {?>


    <div class="col-lg-12 col-md-12 col-sm-7 col-xs-7 detail-header detail-header-row">
      <h3 class="fsmall">
        <detail-navigator>
          <span>
            <a ng-click="navigateBack(module)" style="font-size:small;">{{ptitle}}
            </a>
            </span>
        </detail-navigator>{{record[header]}}
        <button ng-if="isEditable" class="btn btn-primary attach-files-ticket" ng-click="editRecord(module,id)">{{'Edit'|translate}} {{ptitle}}</button>
      </h3>
    </div>
</div>

<hr class="hrHeader">
<div class="container-fluid">

<?php }} ?>

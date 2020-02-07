<?php /* Smarty version Smarty-3.1.19, created on 2019-02-15 15:15:17
         compiled from "/var/www/html/vtigercrm/customerportal/layouts/default/templates/Portal/partials/DetailContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17274113415c66bb65dcc921-26544149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a9ec1d1f2226620ab09327b06fbc311183084e7' => 
    array (
      0 => '/var/www/html/vtigercrm/customerportal/layouts/default/templates/Portal/partials/DetailContentBefore.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17274113415c66bb65dcc921-26544149',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c66bb65dd5485_20212065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c66bb65dd5485_20212065')) {function content_5c66bb65dd5485_20212065($_smarty_tpl) {?>


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

<?php /* Smarty version Smarty-3.1.19, created on 2019-06-11 15:49:08
         compiled from "/var/www/html/eac-crm/customerportal/layouts/default/templates/Portal/partials/DetailContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3010923555cffa344a5ca78-18653059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d6e53734494feca6e8c194682745c0e256bad6b' => 
    array (
      0 => '/var/www/html/eac-crm/customerportal/layouts/default/templates/Portal/partials/DetailContent.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3010923555cffa344a5ca78-18653059',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cffa344a5dca5_68231617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cffa344a5dca5_68231617')) {function content_5cffa344a5dca5_68231617($_smarty_tpl) {?>


    <div ng-class="{'col-lg-5 col-md-5 col-sm-12 col-xs-12 leftEditContent':splitContentView, 'col-lg-12 col-md-12 col-sm-12 col-xs-12 leftEditContent nosplit':!splitContentView}">
        <div class="container-fluid">
            <div class="row">
                <div class="row detailRow" ng-hide="fieldname=='id' || fieldname=='identifierName' || fieldname=='{{header}}' || fieldname=='documentExists' || fieldname=='referenceFields'"  ng-repeat="(fieldname, value) in record">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <label class="fieldLabel" translate="{{fieldname}}"> {{fieldname}} </label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <!-- <span class="label label-default">{{value}}</span> -->
                        <span style="white-space: pre-line;" class="value detail-break">{{value}}</span>
                    </div>
                </div>
                <div class="row detailRow" ng-if="module == 'Documents'">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <label ng-if="module=='Documents'" class="fieldLabel" translate="Attachments">Attachments</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" ng-if="documentExists">

                        <button class="btn btn-primary" ng-click="downloadFile(module,id,parentId)" title="Download {{record[header]}}">Download</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php }} ?>

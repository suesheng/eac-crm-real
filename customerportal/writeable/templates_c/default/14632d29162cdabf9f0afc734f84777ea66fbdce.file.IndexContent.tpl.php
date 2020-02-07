<?php /* Smarty version Smarty-3.1.19, created on 2019-02-15 15:14:18
         compiled from "/var/www/html/vtigercrm/customerportal/layouts/default/templates/Portal/partials/IndexContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12762091835c66bb2aa6ed35-89604012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14632d29162cdabf9f0afc734f84777ea66fbdce' => 
    array (
      0 => '/var/www/html/vtigercrm/customerportal/layouts/default/templates/Portal/partials/IndexContent.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12762091835c66bb2aa6ed35-89604012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c66bb2aa70796_23983986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c66bb2aa70796_23983986')) {function content_5c66bb2aa70796_23983986($_smarty_tpl) {?>


<div class="cp-table-container" ng-hide="!pageInitialized || records.length" style="padding: 5px;">
  <div class="alert alert-warning" style="margin: 2px 0;" ng-show="pageInitialized">
    {{'No records found.'|translate}}
  </div>
</div>
<div class="cp-table-container" ng-show="records">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
      <div class="panel panel-transparent">
        <div class="panel-table-body">
          <div class="table-responsive">
            <div class="dataTables_wrapper form-inline no-footer">
              <table class="table table-hover table-condensed table-detailed dataTable no-footer" id="detailedTable" role="grid">
                <thead>
                  <thead>
                    <tr class="listViewHeaders">
                      <th ng-repeat="header in headers|limitTo:10" ng-hide="header=='id'" rowspan="1" colspan="1">
                        <a href="javascript:void(0);"  class="listViewHeaderValues" ng-click="setSortOrder(header)" data-nextsortorderval="ASC" data-columnname="{{header}}">{{header}}&nbsp;</a>
                        <span class="text-primary" ng-class="{'glyphicon glyphicon-chevron-down':header==OrderBy && !reverse,'glyphicon glyphicon-chevron-up':header==OrderBy && reverse}"></span>
                      </th>
                      <th ng-if="module == 'Documents'" rowspan="1" colspan="1">
                        <a ng-if="module == 'Documents'" href="javascript:void(0);" translate="Actions" class="listViewHeaderValues" ng-click="sortOrder(Subject)" data-nextsortorderval="ASC" data-columnname="{{header}}">Actions</a>
                      </th>
                    </tr>
                  </thead>
                </thead>
                <tbody>
                  <tr class="listViewEntries" ng-repeat="record in records" total-items="totalPages" current-page="currentPage">
                    <td ng-repeat="header in headers|limitTo:10" ng-hide="header=='id'" class="v-align-middle medium" nowrap = " " ng-click="ChangeLocation(record) ">
                                <ng-switch on="record[header].type">
                                    <a ng-href="index.php?module={{module}}&view=Detail&id={{record.id}} "></a>
                                    <span title="{{record[header]}}" ng-switch-default>{{record[header]|limitTo:25}}{{record[header].length > 25 ? '...' :''}}</span>
                                </ng-switch>
                                </td>
                                <td ng-if="module=='Documents'">
                                    <button ng-if=" module='Documents' && record.Type!=='' && record.documentExists " ng-click="downloadFile(record.id) "class="btn btn-primary ">{{'Download'|translate}}</button>
                                </td>
                                </tr>
                                </tbody>
                            </table></div>
                    </div>
                </div>
            </div>
        </div></div>
</div>

<?php }} ?>

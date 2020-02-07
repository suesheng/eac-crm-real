<?php /* Smarty version Smarty-3.1.19, created on 2019-02-15 15:15:17
         compiled from "/var/www/html/vtigercrm/customerportal/layouts/default/templates/Project/partials/ProjectTaskContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280088215c66bb65df84e8-07715786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47272d557dd8bd28c24d1d1d5099eb70f190fb92' => 
    array (
      0 => '/var/www/html/vtigercrm/customerportal/layouts/default/templates/Project/partials/ProjectTaskContent.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280088215c66bb65df84e8-07715786',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c66bb65e042b2_20589344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c66bb65e042b2_20589344')) {function content_5c66bb65e042b2_20589344($_smarty_tpl) {?>


    <div class="cp-table-container" ng-show="projecttaskrecords">
        <div class="table-responsive">
            <table class="table table-hover table-condensed table-detailed dataTable no-footer">
                <thead>
                    <tr class="listViewHeaders">
                        <th ng-hide="header=='id'" ng-repeat="header in projecttaskheaders" nowrap="" class="medium">
                            <a href="javascript:void(0);" class="listViewHeaderValues" data-nextsortorderval="ASC" data-columnname="{{header}}" translate="{{header}}">{{header}}&nbsp;&nbsp;</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="listViewEntries" ng-repeat="record in projecttaskrecords">
                        <td ng-hide="header=='id'" ng-repeat="header in projecttaskheaders" class="listViewEntryValue medium" nowrap="" style='cursor: pointer;' ng-mousedown="ChangeLocation(record, 'ProjectTask')">
                <ng-switch on="record[header].type">
                    <a ng-href="index.php?module=ProjectTask&view=Detail&id={{record.id}}"></a>
                    <span ng-switch-default>{{record[header]}}</span>
                </ng-switch>
                </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a ng-if="!tasksLoaded && !noTasks" ng-click="loadProjectTaskPage(projectTaskPageNo)">{{'more'|translate}}...</a>
    <p ng-if="tasksLoaded" class="text-muted">{{'No Tasks'|translate}}</p>
    <p ng-if="!tasksLoaded && noTasks" class="text-muted">{{'No more Tasks'|translate}}</p>

<?php }} ?>

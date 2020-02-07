<?php /* Smarty version Smarty-3.1.19, created on 2019-06-11 15:49:08
         compiled from "/var/www/html/eac-crm/customerportal/layouts/default/templates/Project/partials/ProjectMilestoneContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8043695085cffa344a714a0-81287360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edc04046e0f439993b3e1fc54c61abf576ff9b07' => 
    array (
      0 => '/var/www/html/eac-crm/customerportal/layouts/default/templates/Project/partials/ProjectMilestoneContent.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8043695085cffa344a714a0-81287360',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cffa344a724e0_25441167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cffa344a724e0_25441167')) {function content_5cffa344a724e0_25441167($_smarty_tpl) {?>


    <div class="cp-table-container" ng-show="projectmilestonerecords">
        <div class="table-responsive">
            <table class="table table-hover table-condensed table-detailed dataTable no-footer">
                <thead>
                    <tr class="listViewHeaders">
                        <th ng-hide="header=='id'" ng-repeat="header in projectmilestoneheaders" nowrap="" class="medium">
                            <a href="javascript:void(0);" class="listViewHeaderValues" data-nextsortorderval="ASC" data-columnname="{{header}}" translate="{{header}}">{{header}}&nbsp;&nbsp;</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="listViewEntries" ng-repeat="record in projectmilestonerecords">
                        <td ng-hide="header=='id'" ng-repeat="header in projectmilestoneheaders" class="listViewEntryValue medium" nowrap="" style='cursor: pointer;' ng-mousedown="ChangeLocation(record, 'ProjectMilestone')">
                <ng-switch on="record[header].type">
                    <a ng-href="index.php?module=ProjectMilestone&view=Detail&id={{record.id}}"></a>
                    <span ng-switch-default>{{record[header]}}</span>
                </ng-switch>
                </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a href="" ng-if="!milestonesLoaded && !noMilestones" ng-click="loadProjectMilestonePage(projectMilestonePageNo)">{{'more'|translate}}...</a>
    <p ng-if="milestonesLoaded" class="text-muted">{{'No Milestones'|translate}}</p>
    <p ng-if="!milestonesLoaded && noMilestones" class="text-muted">{{'No more Milestones'|translate}}</p>

<?php }} ?>

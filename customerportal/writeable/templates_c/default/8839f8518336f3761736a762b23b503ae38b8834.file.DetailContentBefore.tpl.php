<?php /* Smarty version Smarty-3.1.19, created on 2019-06-11 15:49:08
         compiled from "/var/www/html/eac-crm/customerportal/layouts/default/templates/Project/partials/DetailContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14333524705cffa344a550c3-77924739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8839f8518336f3761736a762b23b503ae38b8834' => 
    array (
      0 => '/var/www/html/eac-crm/customerportal/layouts/default/templates/Project/partials/DetailContentBefore.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14333524705cffa344a550c3-77924739',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cffa344a59f70_77944136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cffa344a59f70_77944136')) {function content_5cffa344a59f70_77944136($_smarty_tpl) {?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ticket-detail-header-row ">
  <h3 class="fsmall">
    <detail-navigator>
      <span>
        <a ng-click="navigateBack(module)" style="font-size:small;">{{ptitle}}
        </a>
      </span>
    </detail-navigator>
    {{record[header]}}
  <button ng-if="documentsEnabled" translate="Attach document to this project" class="btn btn-primary attach-files-ticket" ng-click="attachDocument('Documents','LBL_ADD_DOCUMENT')"></button></h3>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<script type="text/javascript" src="<?php echo portal_componentjs_file('Documents');?>
"></script>
<?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve('Documents',"partials/IndexContentAfter.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>

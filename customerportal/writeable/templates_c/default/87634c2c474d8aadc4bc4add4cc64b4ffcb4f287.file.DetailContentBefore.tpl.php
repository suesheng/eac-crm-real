<?php /* Smarty version Smarty-3.1.19, created on 2019-02-15 15:35:51
         compiled from "/var/www/html/vtigercrm/customerportal/layouts/default/templates/Project/partials/DetailContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6953388325c66c037946091-31491334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87634c2c474d8aadc4bc4add4cc64b4ffcb4f287' => 
    array (
      0 => '/var/www/html/vtigercrm/customerportal/layouts/default/templates/Project/partials/DetailContentBefore.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6953388325c66c037946091-31491334',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c66c037953982_15389773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c66c037953982_15389773')) {function content_5c66c037953982_15389773($_smarty_tpl) {?>


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

<?php /* Smarty version Smarty-3.1.19, created on 2019-02-15 15:15:40
         compiled from "/var/www/html/vtigercrm/customerportal/layouts/default/templates/Quotes/partials/DetailContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2886290575c66bb7c687528-65412103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '424a2b695ed74ffab36e97795a48c928267bc23b' => 
    array (
      0 => '/var/www/html/vtigercrm/customerportal/layouts/default/templates/Quotes/partials/DetailContentBefore.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2886290575c66bb7c687528-65412103',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c66bb7c690ac4_47856734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c66bb7c690ac4_47856734')) {function content_5c66bb7c690ac4_47856734($_smarty_tpl) {?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ticket-detail-header-row ">
  <h3 class="fsmall">
    <detail-navigator>
      <span>
        <a ng-click="navigateBack(module)" style="font-size:small;">{{ptitle}}</a>
      </span>
    </detail-navigator>
      {{record[header]}}
    <button ng-if="quoteAccepted" translate="Accept Quote" class="btn btn-success close-ticket" ng-click="acceptQuote();"></button>
  </h3>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  
  <script type="text/javascript" src="<?php echo portal_componentjs_file('Documents');?>
"></script>
  <?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve('Documents',"partials/IndexContentAfter.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>

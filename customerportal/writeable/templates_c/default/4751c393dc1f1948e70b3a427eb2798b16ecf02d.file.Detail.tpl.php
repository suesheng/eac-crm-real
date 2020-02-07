<?php /* Smarty version Smarty-3.1.19, created on 2019-02-15 15:15:17
         compiled from "/var/www/html/vtigercrm/customerportal/layouts/default/templates/Portal/Detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4898202345c66bb65dc0098-44513664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4751c393dc1f1948e70b3a427eb2798b16ecf02d' => 
    array (
      0 => '/var/www/html/vtigercrm/customerportal/layouts/default/templates/Portal/Detail.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4898202345c66bb65dc0098-44513664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c66bb65dc9e23_47078368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c66bb65dc9e23_47078368')) {function content_5c66bb65dc9e23_47078368($_smarty_tpl) {?>

<div class="container-fluid" ng-controller="<?php echo portal_componentjs_class($_smarty_tpl->tpl_vars['MODULE']->value,'DetailView_Component');?>
">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve($_smarty_tpl->tpl_vars['MODULE']->value,"partials/DetailContentBefore.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve($_smarty_tpl->tpl_vars['MODULE']->value,"partials/DetailContent.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve($_smarty_tpl->tpl_vars['MODULE']->value,"partials/DetailRelatedContent.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve($_smarty_tpl->tpl_vars['MODULE']->value,"partials/DetailContentAfter.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
</div>
<hr>
<?php }} ?>

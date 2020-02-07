<?php /* Smarty version Smarty-3.1.19, created on 2019-02-15 15:15:14
         compiled from "/var/www/html/vtigercrm/customerportal/layouts/default/templates/Faq/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7915364665c66bb62a279a5-30391259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39e2f7cb8a7f33f2ab66873a364d821c2ed686be' => 
    array (
      0 => '/var/www/html/vtigercrm/customerportal/layouts/default/templates/Faq/Index.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7915364665c66bb62a279a5-30391259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c66bb62a311f6_03965700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c66bb62a311f6_03965700')) {function content_5c66bb62a311f6_03965700($_smarty_tpl) {?>

<div class="container-fluid"  ng-controller="<?php echo portal_componentjs_class($_smarty_tpl->tpl_vars['MODULE']->value,'IndexView_Component');?>
">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve($_smarty_tpl->tpl_vars['MODULE']->value,"partials/IndexContent.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
</div>
<?php }} ?>

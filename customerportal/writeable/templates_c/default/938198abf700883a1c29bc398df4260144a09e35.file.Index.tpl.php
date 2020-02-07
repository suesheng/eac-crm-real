<?php /* Smarty version Smarty-3.1.19, created on 2019-06-11 14:19:04
         compiled from "/var/www/html/eac-crm/customerportal/layouts/default/templates/Portal/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13418336395cff8e283b5fb0-05694760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '938198abf700883a1c29bc398df4260144a09e35' => 
    array (
      0 => '/var/www/html/eac-crm/customerportal/layouts/default/templates/Portal/Index.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13418336395cff8e283b5fb0-05694760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cff8e28417642_37729825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cff8e28417642_37729825')) {function content_5cff8e28417642_37729825($_smarty_tpl) {?>

<div class="container-fluid"  ng-controller="<?php echo portal_componentjs_class($_smarty_tpl->tpl_vars['MODULE']->value,'IndexView_Component');?>
">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve($_smarty_tpl->tpl_vars['MODULE']->value,"partials/IndexContentBefore.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve($_smarty_tpl->tpl_vars['MODULE']->value,"partials/IndexContent.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve($_smarty_tpl->tpl_vars['MODULE']->value,"partials/IndexContentAfter.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
</div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2019-02-15 15:16:41
         compiled from "/var/www/html/vtigercrm/customerportal/layouts/default/templates/Services/partials/DetailRelatedContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17350665795c66bbb9d1e6e2-26130694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '043ac0290ce0dea135c18e30255f8842d66608da' => 
    array (
      0 => '/var/www/html/vtigercrm/customerportal/layouts/default/templates/Services/partials/DetailRelatedContent.tpl',
      1 => 1520231416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17350665795c66bbb9d1e6e2-26130694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c66bbb9d27664_08591249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c66bbb9d27664_08591249')) {function content_5c66bbb9d27664_08591249($_smarty_tpl) {?>

<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 rightEditContent">
    
        <ul class="nav nav-tabs" ng-init="tab = 1">
            <li ng-class="{active:tab===1}">
                <a href ng-click="tab = 1"><strong>Updates </strong></a>
            </li>
        </ul>
        
    <br>
    <div class="tab-content">
        <div  ng-show="tab === 1"> 
            <?php echo $_smarty_tpl->getSubTemplate ("Portal/partials/UpdatesContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
</div><?php }} ?>

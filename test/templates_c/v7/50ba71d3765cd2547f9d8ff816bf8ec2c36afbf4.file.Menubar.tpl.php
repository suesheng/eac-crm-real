<?php /* Smarty version Smarty-3.1.7, created on 2019-04-25 14:01:57
         compiled from "/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Documents/partials/Menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14667004965cc1bdd59401a9-57042453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50ba71d3765cd2547f9d8ff816bf8ec2c36afbf4' => 
    array (
      0 => '/var/www/html/eac-crm/includes/runtime/../../layouts/v7/modules/Documents/partials/Menubar.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14667004965cc1bdd59401a9-57042453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc1bdd5947fd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc1bdd5947fd')) {function content_5cc1bdd5947fd($_smarty_tpl) {?>

<?php if ($_REQUEST['view']=='Detail'){?>
<div id="modules-menu" class="modules-menu">    
    <ul>
        <li class="active">
            <a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl();?>
">
				<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModuleIcon();?>

                <span><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
</span>
            </a>
        </li>
    </ul>
</div>
<?php }?><?php }} ?>
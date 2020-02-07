<?php /* Smarty version Smarty-3.1.7, created on 2018-09-05 18:10:16
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Install/Step7.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4882429145b900df8b441b0-83410827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09520deb4baa29a0ad89f4d2dbe930b6df3ed83f' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Install/Step7.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4882429145b900df8b441b0-83410827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'APPUNIQUEKEY' => 0,
    'CURRENT_VERSION' => 0,
    'INDUSTRY' => 0,
    'PASSWORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b900df8b4c1f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b900df8b4c1f')) {function content_5b900df8b4c1f($_smarty_tpl) {?>

<center><?php echo vtranslate('LBL_LOADING_PLEASE_WAIT');?>
...</center>

<form class="form-horizontal" name="step7" method="post" action="?module=Users&action=Login">
	<img src="//stats.vtiger.com/stats.php?uid=<?php echo $_smarty_tpl->tpl_vars['APPUNIQUEKEY']->value;?>
&v=<?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
&type=I&industry=<?php echo urlencode($_smarty_tpl->tpl_vars['INDUSTRY']->value);?>
" alt='' title='' border=0 width='1px' height='1px'>
	<input type=hidden name="username" value="admin" >
	<input type=hidden name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" >
</form>
<script type="text/javascript">
	jQuery(function () { /* Delay to let page load complete */
		setTimeout(function () {
			jQuery('form[name="step7"]').submit();
		}, 150);
	});
</script>
<?php }} ?>
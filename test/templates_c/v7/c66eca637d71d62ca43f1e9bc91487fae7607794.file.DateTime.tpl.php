<?php /* Smarty version Smarty-3.1.7, created on 2018-10-30 11:50:48
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Events/uitypes/DateTime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20300397955bd84598737d22-25031551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c66eca637d71d62ca43f1e9bc91487fae7607794' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Events/uitypes/DateTime.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20300397955bd84598737d22-25031551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD_STRUCTURE_MODEL' => 0,
    'MODULE_MODEL' => 0,
    'DATE_TIME_VALUE' => 0,
    'DATE_TIME_COMPONENTS' => 0,
    'TIME_FIELD' => 0,
    'DATE_TIME_CONVERTED_VALUE' => 0,
    'DATE_FIELD' => 0,
    'MODULE' => 0,
    'BLOCK_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd84598751df',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd84598751df')) {function content_5bd84598751df($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='date_start'){?><?php $_smarty_tpl->tpl_vars['DATE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value, null, 0);?><?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getModule(), null, 0);?><?php $_smarty_tpl->tpl_vars['TIME_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('time_start'), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='due_date'){?><?php $_smarty_tpl->tpl_vars['DATE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value, null, 0);?><?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getModule(), null, 0);?><?php $_smarty_tpl->tpl_vars['TIME_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('time_end'), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['DATE_TIME_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS'] = new Smarty_variable(explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['TIME_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['TIME_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[1]), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_TIME_CONVERTED_VALUE'] = new Smarty_variable(DateTimeField::convertToUserTimeZone($_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value)->format('Y-m-d H:i:s'), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS'] = new Smarty_variable(explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_CONVERTED_VALUE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['DATE_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[0]), null, 0);?><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('uitypes/Date.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['DATE_FIELD']->value), 0);?>
</div><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('uitypes/Time.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['TIME_FIELD']->value,'FIELD_NAME'=>$_smarty_tpl->tpl_vars['TIME_FIELD']->value->getFieldName()), 0);?>
</div><?php }} ?>
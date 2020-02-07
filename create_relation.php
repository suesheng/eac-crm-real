<?php
/*
create_relation.php
Create this file into your root directory of vtiger i.e. vtigercrm/
and then run this file directly using your browser 
for example localhost/vtigercrm/create_relation.php
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('vtlib/Vtiger/Module.php');

$moduleInstance = Vtiger_Module::getInstance('Project');
$accountsModule = Vtiger_Module::getInstance('Accounts');
$relationLabel  = 'AccountsProjectsMulti'; 

$moduleInstance->setRelatedList(
      $accountsModule, $relationLabel, Array('ADD') //you can do select also Array('ADD','SELECT')
);

echo "done";
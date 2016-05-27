<?php
//php版本要求

if(version_compare(PHP_VERSION,'5.4.0','<')){
    die('require PHP > 5.4.0 !');
}
use Jobmanage\Mage;

define('JOBMANAGE_ROOT', getcwd());

require_once("./Jobmanage/Autoloader.php");

$mage = new Mage();

Mage::run();

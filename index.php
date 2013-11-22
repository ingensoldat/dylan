<?php
//
// PHASE: BOOTSTRAP
//
define('DYLAN_INSTALL_PATH', dirname(__FILE__));
define('DYLAN_SITE_PATH', DYLAN_INSTALL_PATH . '/site');

require(DYLAN_INSTALL_PATH.'/src/CDylan/bootstrap.php');

$dyl = CDylan::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$dyl->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$dyl->ThemeEngineRender();


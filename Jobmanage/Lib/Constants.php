<?php
/**
 * 常量设置
 */
//定义时区
if (!ini_get('date.timezone')) {
    date_default_timezone_set('Asia/Shanghai');
}

// Display errors.
ini_set('display_errors', 'on');

// Reporting all.
error_reporting(E_ALL);


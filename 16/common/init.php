<?php
date_default_timezone_set('Asia/Shanghai');
session_set_cookie_params(0, null, null, null, true);
mb_internal_encoding('UTF-8');
require './common/function.php';
require './common/library/Db.php';
new SessionDb(Db::getInstance());
session_start();
// 为项目创建Session，统一保存到fun中
if(!isset($_SESSION['fun'])){
	$_SESSION = ['fun' => []];
}

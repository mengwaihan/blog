<?php
$config = require './config.php';
$home_config = array(
	//'配置项'=>'配置值'
	'Url'=>'/blog/Home/Tpl/Resource/',
	'Url1'=>'/test1/Home/Tpl/Resource/',
);
return array_merge($config,$home_config);
?>
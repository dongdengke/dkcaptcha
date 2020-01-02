<?php
require_once 'vendor/autoload.php';
//使用方法
$captcha  = new ddk\captcha\Captcha(['width'=>140,'height'=>70,'len'=>6]);
 
$captcha->entry();
?>


<?php
session_start();
$dbuser="root";
$dbpswd="";
$dbname="zukhruf-mart";
$dbserver="localhost";
$con=mysqli_connect("$dbserver","$dbuser","$dbpswd","$dbname");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
define('SITE_PATH','https://localhost/phpProject/zukhruf_mart/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
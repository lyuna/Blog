<?php
require_once '../inc/session.php';
require_once '../inc/common.php';

//var_dump($_POST['name']);
//var_dump($_POST['password']);

// login($_POST['name'] , $_POST['password'])
if( login($_POST['name'] , $_POST['password']) ){
	redirect_to('/Git/Blog/session/onload.php');
}else{
	redirect_back();
 }

?>

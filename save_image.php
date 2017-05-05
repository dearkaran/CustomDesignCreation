<?php
	$imagedata = base64_decode($_POST['imgdata']);
	$filename = md5(uniqid(rand(), true));
	//path where you want to upload image
	$file = 'uploads/'.$filename.'.png';
	//$imageurl  = 'http://example.com/uploads/'.$filename.'.png';
	$imageurl  = 'uploads/'.$filename.'.png';
	file_put_contents($file,$imagedata);
	echo $imageurl;
?>
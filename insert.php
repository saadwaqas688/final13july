<?php
$con=mysqli_connect("localhost","root","","directory");

	session_start();
	$categories_id=$_POST['categories_id'];
	$sub_categories_id=$_POST['sub_categories_id'];
	$name=$_POST['name'];
	$url=$_POST['url'];
	$description=$_POST['description'];
	$captcha=$_POST['captcha'];
	
	
	         if($_SESSION['CODE']==$captcha){
			mysqli_query($con,"insert into link(categories_id,name,url,description,status,sub_categories_id) values('$categories_id','$name','$url','$description',1,'$sub_categories_id')");
		     echo "Thank you";
              }else{
	          echo "Please enter valid captcha code";
              }
		

?>
	

























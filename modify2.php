<meta charset="UTF-8"/>
<?php
session_start();
if($_SESSION['admin']=="ok"){
 $conn=mysql_connect("localhost","root","");
	mysql_select_db("guest_book",$conn);
	mysql_query("set names utf8");
	$myContent=$_POST['post_contents'];
	$myId=$_POST['id'];
	//$exec="select * from contents where id=".$_GET['id']+";";
	$exec="update contents set content='".$myContent."' where id='".$myId."';";
	echo $exec;
	echo "<br>";
	$result=mysql_query($exec);
	echo "<br>";
	
	echo mysql_error();
	
}
mysql_close();
header("location:admin_index.php");
?>
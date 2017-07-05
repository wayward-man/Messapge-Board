<head>
   <meta charset="UTF-8"/>	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,user-scalable=no"/>
   
</head>

<body style="background: burlywood;">
	
<?php


 session_start();
 $admin_name=$_POST['admin_name'];
 $admin_password=$_POST['admin_password'];
 $conn=mysql_connect("localhost","root","");
 mysql_select_db("guest_book");
 $exec="select * from admin where admin_name='".$admin_name."'";
 
 $result=mysql_query($exec);
 echo mysql_error();
 if($rs=mysql_fetch_object($result)){
 	if($rs->admin_password==$admin_password){
 		$_SESSION['admin']="ok";
		header("location:admin_index.php");
 	}
	else echo "<h1 class='text-center' >密码不正确</h1>";
 }
 else echo"<h1 class='text-center' >用户名不正确</h1>";
 mysql_close();
 
?>
</body>
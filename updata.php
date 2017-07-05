<html><head>
	<meta charset="UTF-8"/>
	  <meta name="viewport" content="width=device-width,user-scalable=no"/>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	  
	<meta http-equiv="refresh" content='2;URL=index.php'/>
</head>	<body><h1 class="text-center"> 谢谢你对本站的支持，三秒后将自动返回、、</h1>	</body></html>




<?php
		$name=$_POST['user'];
		$content=$_POST['post_contents'];
		 $conn=mysql_connect("localhost","root","");
		mysql_query("set names utf8");
		mysql_select_db("guest_book");
		$exec="insert into contents(name,content) values('".$_POST['user']."','".$_POST['post_contents']."' ) ";
		$result=mysql_query($exec);
		if($result>0)
		    echo '<h1 class="text-center">添加留言成功</h1>';
		else{
			echo mysql_error();
			echo  '<h1 class="text-center">添加留言成功 </h1>';
		}
			
		
		echo  '<h1 class="text-center"><a href="index.php">返回主页</a> </h1>';
		mysql_close();
?>


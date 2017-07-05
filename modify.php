<html>
	<head>
		<title>修改留言</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/min1000.css"/>
	</head>
	<body>
		<h2 class="text-center">留言修改</h2>
		<?php
			session_start();
			if($_SESSION['admin']=="ok"){
				 $conn=mysql_connect("localhost","root","");
				
				mysql_query("set names utf8");
				mysql_select_db("guest_book");
				
				
				$exec="select * from contents where id=".$_GET['id'];
				$result=mysql_query($exec);
				$rs=mysql_fetch_object($result);
				$name=$rs->name;
				$content=$rs->content;
				
				$id=$rs->id;
				
			}
			
			?>
			
			<form action="modify2.php" method="post" name="name1" class="form">
				<strong>ID:</strong> <?php echo $id; ?> <input type=hidden name="id" value=<?php echo $id; ?><br>
				 <span >&nbsp;    &nbsp;</span>
				<strong>姓名：</strong> <?php echo $name?><br>
				 <strong>留言：</strong><textarea class="form-control" name="post_contents"  rows="10" ><?php echo $content; ?></textarea>
	
				 <input type="submit"    value="提交修改" />				 					
			</form>
   			<?php
   				mysql_close();
   				?>		
	</body>
</html>


<?php

?>
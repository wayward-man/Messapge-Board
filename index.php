
<html>
	<head>
		<meta charset="UTF8">
		 <meta name="viewport" content="width=device-width, initial-scale=1,uer-scalable=no">
			
		<title>留言本</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/min1000.css"/>
		
		
	</head>
	<body >
		<div class="text-right">
			<a type="button" href="admin_login.html" target="_blank" class="btn btn-info btn-xs" >
		            留言板管理
		   </a>	
		</div>
		
		<div align="center"> <font face="黑体" color="#0000FF"><h2> 学习交流留言板</h2></font>
		</div>
		
		<?php
			 $conn=mysql_connect("localhost","root",""); //测试已经连接成功
			
			mysql_select_db("guest_book");
			mysql_query("set names utf8");
			
			$pageSize=2;
			$pageNumber=$_GET['pageNumber'];
			if($pageNumber==null)$pageNumber=1;
			$rs=mysql_fetch_row(mysql_query("select count(*) from contents"));//取记录数
			
			$totalCount =$rs[0];
			$exec="select * from contents limit".(($pageNumber-1)*$pageSize)."2";
			$result=mysql_query($exec);

			while($rs=mysql_fetch_object($result)){
			
				echo "<table><tr><td>姓名：".$rs->name."</td></tr>";
				echo "<tr><td>留言:".$rs->content."</td></tr></table><br/>";
				echo"........................................................................";
				echo"<br/>";	
			}
               
			if($pageNumber>1){
				echo "<a class='btn btn-info'  href=index.php?pageNumber".($pageNumber-1).">前一页&nbsp&nbsp</a>";
			}
			else{
				echo"<a class='btn btn-info disabled' >前一页&nbsp&nbsp</a>";
			}
			
			echo"<span>  &nbsp;&nbsp;&nbsp;&nbsp;        </span>";
			if($pageNumber<$totalCount/$pageSize){
				echo "<a class='btn btn-info' href=index.php?pageNumber=".($pageNumber+1).">后一页</a>";
			}
			else{
				echo "后一页";
			}
			mysql_close();
			
			?>
		<div style="margin-bottom: 20px;"></div>
		 <center><font size="+2" face="隶书"><p> <a href=message_post.html class="btn btn-warning">我要留言</a></p></font></center>
		
		
		
	</body>
</html>

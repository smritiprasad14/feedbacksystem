<html>
<link href="../css/student.css" rel="stylesheet" type="text/css">
<title>Feedback</title>
<body>
<div class="home">
<a href="stu_home.php">Home</a>
<a href="logout.php">Logout</a>
</div>
<center>
<div class="name">
<h1>
STUDENT'S FEEDBACK 
</h1>
</div>
<?php

session_start();
include'connect.php';
$stu_id=$_SESSION['stu_id'];
$q=mysql_query("select*from student");
while($val=mysql_fetch_array($q))
{
	if($stu_id==$val['stu_id'])
	{$name=$val['name'];
      $class=$val['class'];
	}
}
?>
<div class="st_name">
<?php
echo"Name :- ".$name;
echo"<br>Class :- ".$class;
?>
</div>
<h2> Staff Members</h2>


<table cellspacing="0" border="1" width="700">
<th> S.no</th>
<th>Name</th>
<th>Give feedback</th>
<th>Teacher's Reply </th>

<?php
$sno=1;
$q=mysql_query("select*from teacher");
while($val=mysql_fetch_array($q)):
?> 
	
	<tr>
	<td><?php echo $sno++;?></td>
	<td><?php echo $val['name']?></td>
	<td><a href="feedback_stu.php?t_id=<?php echo $tr_id=$val['id'];?>" >click here </a></td>
	<?php 
	  $reply='';
	 $qr=mysql_query("select * from feedback");
	 while($val1=mysql_fetch_array($qr))
	  {   
		if($val1['tr_id']==$tr_id)
			if($val1['stu_id']==$stu_id)
		         $reply=$val1['reply'];
	}
	?>
	<td><?php echo $reply;?></td>
	</tr>
<?php
ENDWHILE;
?>

</table>

</body>
</html>
<html>
<link href="../css/student.css" rel="stylesheet" type="text/css">
<body>
<div class="home">
<a href="teacher_home.php">Home</a>
<a href="logout.php">Logout</a>
</div>
<center>
<div class="name">
<h1>
TEACHER'S REPLY
</h1>
</div>
<br><br>
<?php

session_start();
include'connect.php';
$tr_id=$_SESSION['tr_id'];
$q=mysql_query("select*from teacher");
while($val=mysql_fetch_array($q))
{if($tr_id==$val['id'])
	{$name=$val['name'];
      $class=$val['department'];
	}
}
?>
<div class="st_name">
<?php
echo"Name :- ".$name;
echo"<br>Department :- ".$class;
?>
</div>
<br><br>
<table border="1" cellspacing="0"  class="table">
<th> S.No </th>
<th> Student Id</th>
<th> Class </th>
<th> Teaching</th>
<th> Syllabus</th>
<th> Class Work</th>
<th> Comments</th>
<th> Feedback Date </th>
<th> Reply</th>
<th> Reply Date </th>

<?php
 $q=mysql_query("select*from feedback where `tr_id`='$tr_id'");
 $sno=1;
	  while($val=mysql_fetch_array($q)):
?>

<tr>
  <td> <?php echo $sno++;?> </td>
  <td> <?php echo $sid=$val['stu_id'];?> </td>
  <td> <?php 
			$q1=mysql_query("select class from student where `stu_id`='$sid'");
			    $val1=mysql_fetch_array($q1);        
				echo $val1['class'];
	   ?>
 <td> <?php echo $val['teaching'];?> </td>
 <td> <?php echo $val['syllabus'];?> </td>
 <td> <?php echo $val['class_work'];?> </td>
 <td> <?php echo $val['comments'];?> </td>
 <td> <?php echo $val['stu_time'];?> </td>
 <td> <?php echo $val['reply'];?> </td>
 <td> <?php echo $val['tr_time'];?> </td>
 <td><a href="teacher_reply.php?f_id=<?php echo $val['fdb_id'];?>" >click here </a></td>
	
</tr>
<?php
endwhile;
?>
</table>
</body>
</html>
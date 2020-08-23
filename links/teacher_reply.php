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
TEACHER'S SECTION
</h1>
</div>
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
<h1> Give Your Reply </h1>
<?php
if(isset($_POST['reply']))
{   $idate=date("d-m-y");
	$fdb_id=$_SESSION["fdb_id"];
	$reply=$_POST['reply'];
	$qr=mysql_query("UPDATE `feedback` SET `tr_time`='$idate',`reply` = '$reply' WHERE `feedback`.`fdb_id` ='$fdb_id'");
 
	$f=1;
}


$fdb_id=$_GET['f_id'];
$_SESSION["fdb_id"]=$fdb_id;

$q=mysql_query("select*from feedback where `fdb_id`='$fdb_id'");
  while($val=mysql_fetch_array($q))
  { $stu_id=$val['stu_id'];  
  }
	
$q=mysql_query("select*from student where `stu_id`='$stu_id'");
  while($val2=mysql_fetch_array($q))
  { $stu_class=$val2['class'];  
  }
	
?>
<center>
<form action="#" method="post" >
<table>
<tr>
<td class="inp">id </td>
<td class="inp"> <?php echo $stu_id;?> </td> 
</tr>
<tr> 
<td class="inp">class</td>
<td class="inp"><?php echo $stu_class;?></td>
</tr>
<tr>
<td class="inp"> reply </td>
<td><textarea name="reply" rows="5" cols="30"> </textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit"  name="rply" value="reply" class="button"></td>
</table>
</form>
</center>

</html>
<html>
<?php session_start();
?>
<link href="../css/student.css" rel="stylesheet" type="text/css">
<body>
<div class="home">
<a href="admin_home.php">Home</a>
<a href="logout.php">Logout</a>
</div>
<center>
<div class="name">
<h1>
ADMIN PANNEL
</h1>
</div>
<?php
include'admin_head.php';
?>
<br><br><br>
<table>
<tr>
<td>
<form method="post" action="#">
<input type="submit" name="tr" value="Teachers" class="button">
</form>
</td>

<td>
<form method="post" action="#">
<input type="submit" name="stu" value="Student" class="button">
</form>
</td>

<td>
<form method="post" action="#">
<input type="submit" name="hod" value="HOD" class="button">
</form>
</td>
</table>

<br><br><br><br>



<?php
include'connect.php';

if(isset($_POST['tr']))
{   
	$sno=1;
	$q=mysql_query("select * from teacher");
echo "<table border='2' cellspacing='0' width='1000'>";
echo "<tr>";
echo "<th> S.No </th>";
echo "<th> Id</th>";
echo "<th> Name</th>";
echo "<th> Department</th>";
echo "</tr>";

	
	while($val=mysql_fetch_array($q))
	{
echo "<tr>";
echo "<td>".$sno."</td>";
echo "<td>".$val['id']."</td>";
echo "<td>".$val['name']."</td>";
echo "<td>".$val['department']."</td>";
echo "</tr>";
$sno++;
	}
}


if(isset($_POST['stu']))
{   
	$sno=1;
	$q=mysql_query("select * from student");

echo "<table  border='2' cellspacing='0' width='1000'>";
echo "<tr>";
echo "<th> S.No </th>";
echo "<th> Id</th>";
echo "<th> Name</th>";
echo "<th> Class</th>";
echo "</tr>";
	
	while($val=mysql_fetch_array($q))
	{
echo "<tr>";
echo "<td>".$sno."</td>";
echo "<td>".$val['stu_id']."</td>";
echo "<td>".$val['name']."</td>";
echo "<td>".$val['class']."</td>";
echo "</tr>";
$sno++;
	}
}



if(isset($_POST['hod']))
{   
	$sno=1;
	$q=mysql_query("select * from hod");

echo "<table  border='2' cellspacing='0' width='1000'>";
echo "<tr>";
echo "<th> S.No </th>";
echo "<th> Id</th>";
echo "<th> Name</th>";
echo "<th> Rank</th>";
echo "</tr>";
	
	while($val=mysql_fetch_array($q))
	{
echo "<tr>";
echo "<td>".$sno."</td>";
echo "<td>".$val['id']."</td>";
echo "<td>".$val['name']."</td>";
echo "<td>".$val['rank']."</td>";
echo "</tr>";
$sno++;
	}
}

?>
	
</html>
<html>
<? session_start();?>
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
session_start();
include'admin_head.php';
?>
<br><br><br>
<form method="Post" action="#" >
<h2>Enter ID to delete hod details</h2>
<table>
<tr>
<td class="inp">  Teacher ID </td>
<td> <input type="text" name="sID" class="inp">
</tr> 
<tr>

<td></td>
<td> <input type="submit" name="sub" value="Delete" class="button"> <td>
</tr>
</table>
</form>

<?php
if(isset($_POST['sub']))
{
include'connect.php';
$a=$_POST['sID'];
$f=0;

$q=mysql_query("DELETE FROM `hod` WHERE `id`='$a' ");
$qr=mysql_query("DELETE FROM `hod_login` WHERE `id`='$a' ");
if(($q) or mysql_error())
  if(($qr) or mysql_error())
  {echo"record deleted";
     $f=1;
  }
if($f==0)
	echo" record not deleted";
}
?>
</body>
</html>
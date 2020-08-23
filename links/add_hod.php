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

<form method="Post" action="#" class="input">
<h2>Enter details of Hod</h2>
<table>
<tr>
<td class="inp">  Name</td>
<td> <input type="text" name="sname" class="inp">
</tr>
<tr>
<td class="inp">  ID </td>
<td> <input type="text" name="sID" class="inp">
</tr> 
<tr>
<td class="inp"> DOB</td>
<td> <input type="text" name="dob" class="inp">
</tr>
<tr>
<td class="inp"> Rank</td>
<td> <input type="text" name="cla" class="inp">
</tr>
<tr>
<td><input type="reset" class="button"></td>
<td> <input type="submit" name="sub" value="Insert" class="button"> <td>
</tr>
</table>
</form>


<?php
if(isset($_POST['sub']))
{
mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('feedback')or die(mysql_error());
$a=$_POST['sID'];
$b=$_POST['sname'];
$c=$_POST['cla'];
$d=$_POST['dob'];
$q=mysql_query("INSERT into hod(`id`, `name`, `rank` ) VALUES ('$a','$b', '$c')");
$qr=mysql_query("INSERT INTO hod_login (`id` ,`password`)VALUES ('$a', '$d')");

if(($q&&$qr))
	echo"Added";
else
	echo" Not Added";
}
?>

</body>
</html>
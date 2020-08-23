<html>
<link href="../css/student.css" rel="stylesheet" type="text/css">
<body>
<center>
<?php
session_start();
include 'connect.php';
$q=mysql_query("select*from hod_login");
$a=$_POST['id'];
$b=$_POST['pw'];

$f=1;
while($val=mysql_fetch_array($q))
{if($a==$val['id'] && $b==$val['password'] && $val['rank']=='admin')
	{
		$_SESSION['admin']=$a;
		$f=0;			
		header("Location: admin_home.php");
		
	  }
}


	 if($f==1) 
	  {  include'admin.php';
        echo"invalid login ID or password";
}

?>
</body>
</html>


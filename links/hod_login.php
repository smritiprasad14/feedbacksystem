<html>
<link href="../css/first_page.css" rel="stylesheet" type="text/css">
<body>
<?php
$f=0;
session_start();
include 'connect.php';
$q=mysql_query("select*from hod_login");
$a=$_POST['hod_id'];
$b=$_POST['hod_dob'];


while($val=mysql_fetch_array($q))
{if($a==$val['id'] && $b==$val['password'])
	{
		$_SESSION['hod_id']=$a;
		$f=1;						
									include'hod_home.php';
		
		exit();
	  }
}
	  if($f==0) 
	  {  include'hod.php';
        echo"invalid login ID or password";
}	

?>
</body>
</html>
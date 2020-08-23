<html>
<link href="../css/first_page.css" rel="stylesheet" type="text/css">
<body>

<?php
$f=0;
session_start();
include 'connect.php';
$q=mysql_query("select*from teacher_login");
$a=$_POST['tr_id'];
$b=$_POST['dob'];


while($val=mysql_fetch_array($q))
{if($a==$val['id'] && $b==$val['password'])
	{
		$_SESSION['tr_id']=$a;
		$f=1;			
						header("location: teacher_home.php");
		
		exit();
	  }
}  
	  
	 if($f==0)
	  {  include'teacher.php';
        echo"invalid login ID or password";
}	 

?>
</body>
</html>
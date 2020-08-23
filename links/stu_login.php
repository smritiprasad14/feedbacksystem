<html>
<link href="../css/first_page.css" rel="stylesheet" type="text/css">
<body>

<?php
$f=0;
session_start();
include 'connect.php';
$q=mysql_query("select*from student_login");
$a=$_POST['stu_id'];
$b=$_POST['stu_dob'];


while($val=mysql_fetch_array($q))
{if($a==$val['id'] && $b==$val['password'])
	{
		$_SESSION['stu_id']=$a;
		$f=1;
						header("location: stu_home.php");
		
		exit();
	  }
}
	  if($f==0) 
	  {  include'student.php';
        echo"invalid login ID or password";
}	 

?>
</body>
</html>
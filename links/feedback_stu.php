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
include'connect.php';
session_start();
$stu_id=$_SESSION['stu_id'];
$q=mysql_query("select*from student");
while($val=mysql_fetch_array($q))
{if($stu_id==$val['stu_id'])
	{$name=$val['name'];
      $class=$val['class'];
	}
}

$tr_id=$_GET['t_id'];
$s_id=$_SESSION['stu_id'];
$q=mysql_query("select*from teacher");
while($val=mysql_fetch_array($q))
{
	if($val['id']==$tr_id)
	{
		$tr_name=$val['name'];
	}
	
}
?>
<div class="st_name">
<?php
echo"Name :- ".$name;
echo"<br>Class :- ".$class;
?>
</div>
<center>
<form action="#" method="post">
<h1> Give your feedback</h1>
<table cellspacing="0">
<tr> 
<td class="inp"> Staff Name </td>
 <td class="inp"><?php echo $tr_name ?> </td>
 </tr>
 <tr>
<td class="inp"> Teaching </td>
 <td class="inp"> 
 <select name="sel" class="inp">
 <option name="Excellent"> Excellent </option>
 <option name="Good"> Good </option>
 <option name="Average"> Average </option>
 <option name="Bad"> Bad </option>
 <option name="Worst"> Worst </option>
  </select>
 </td>
 </tr>
 <tr>
 <td class="inp">Syllabus </td>
 <td> <select name="syl" class="inp">
 <option name="Excellent"> Excellent </option>
 <option name="Good"> Good </option>
 <option name="Average"> Average </option>
 <option name="Bad"> Bad </option>
 <option name="Worst"> Worst </option>
  </select>
 </td>
 </tr>
 
 <tr>
 <td class="inp">Class Work </td>
 <td > <select name="cw" class="inp">
 <option name="Excellent"> Excellent </option>
 <option name="Good"> Good </option>
 <option name="Average"> Average </option>
 <option name="Bad"> Bad </option>
 <option name="Worst"> Worst </option>
  </select>
 </td>
 </tr>
 
 <tr>
 <td class="inp">Comments </td>
 <td ><textarea rows="5" name="comm" cols="30">  </textarea></td>
 </tr>
 <tr>
 <td>
 <td><input type="reset" class="button">
 <input type="submit" name="sub" value="Give feedback" class="button">
 </body>
 </table>
 </form>
 
 <?php
 if(isset($_POST['sub']))
 {
	 $tech=$_POST['sel'];
	 $syl=$_POST['syl'];
	 $cw=$_POST['cw'];
	 $comm=$_POST['comm'];
	 $idate=date("d-m-y");
     	 
		  $in=mysql_query("INSERT into feedback VALUES('','$tr_id','$s_id','$tech','$syl','$cw','$comm','$idate','','')");		  
	  if($in)
		  echo"feedback sent";
	  else
		  echo"feedback not sent";
	  
 }
 ?>
 </body>
 </html>
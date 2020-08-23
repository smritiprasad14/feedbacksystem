<html>

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
include'connect.php';
?>
<center>
<br><br><br><br>

<table class="table" border="2" cellspacing="0">
<th> S.no</th>
<th> Teacher Name </th>
<th> Student Name</th>
<th> Teaching</th>
<th> Syllabus</th>
<th> Class Work</th>
<th> Comments</th>
<th> Feedback Date</th>
<th> Reply </th>
<th> Reply Date </th>
<h2> Details of old feedbacks</h2>
<?php
$sno=1;
$qr=mysql_query("select*from feedback");
while($val3=mysql_fetch_array($qr)):
?>

<tr>
 <?php
 $stu_id=$val3['stu_id'];
 $tr_id=$val3['tr_id'];
$q1=mysql_query("select * from teacher where `id`='$tr_id'");
$q2=mysql_query("select * from student WHERE `stu_id`='$stu_id'");
$val1=mysql_fetch_array($q1);
$val2=mysql_fetch_array($q2);
?>
 <td> <?php echo $sno++; ?></td>
 <td> <?php echo $val1['name']; ?></td>
 <td> <?php echo $val2['name']; ?></td>
 <td> <?php echo $val3['teaching'];?> </td>
 <td> <?php echo $val3['syllabus'];?> </td>
 <td> <?php echo $val3['class_work'];?> </td>
 <td> <?php echo $val3['comments'];?> </td>
 <td> <?php echo $val3['stu_time'];?> </td>
 <td> <?php echo $val3['reply'];?> </td> 
 <td> <?php echo $val3['tr_time'];?> </td>
</tr>
<?php
endwhile;
?>
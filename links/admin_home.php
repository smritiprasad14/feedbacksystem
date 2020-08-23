<html>
<link href="../css/student.css" rel="stylesheet" type="text/css">
<body>

<div class="home">
<a href="admin_home.php">Home</a>
<a href="logout.php">Logout</a>
</div>

<div class="name">
<h1>
ADMIN PANNEL
</h1>
</div>
<center>
<?php
session_start();
$admin=$_SESSION['admin'];
?>
<div class="admin">
<a href="add_student.php"> Add Student </a>
<a href="add_staff.php"> Add Teacher</a>
<a href="add_hod.php"> Add Hod</a>
<a href="feedback.php"> Feedback</a>
<a href="stu_delete.php"> Delete Student</a>
<a href="teacher_delete.php"> Delete Teacher</a>
<a href="hod_delete.php"> Delete Hod</a>
<a href="display.php"> Display</a>
</div>
<div class="wel_adm">
WELCOME ADMIN !!!
</div>
</body>
</html>
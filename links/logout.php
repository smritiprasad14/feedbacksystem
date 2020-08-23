<html>
<body>
<link href="..\css\first_page.css" rel="stylesheet" type="text/css">
<?php
session_start();
session_destroy();
header("Location: ..\home.html");
?>
</body>
</html>
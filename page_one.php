<h4>Page 1</h4>
<?php
session_start();
$_SESSION["connect"] = "Login Verified";
$fname = "Alex";
print $_SESSION["connect"];
?>
<br> 
<a href="page_two.php">go to page 2</a>
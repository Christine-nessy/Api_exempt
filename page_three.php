<h4>Page 3</h4>
<?php
session_start();

unset($_SESSION['connect']);

header('Location: page_four.php');
exit();
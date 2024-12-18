<h4>Page 2</h4>
<?php
session_start();

if(isset ($_SESSION['connect'])){
    print ' The session is alive <h3> ' . $_SESSION["connect"] . '</h3>';
    print '<a href="page_three.php">Destroy Session</a>';
}else{
    print 'The session was destoryed <br> <a href="page_one.php">Start New Session</a>';
}
?>
<br>
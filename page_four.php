<h4>Page 4</h4>
<?php
session_start();

if(isset ($_SESSION['connect'])){
    print ' The session is alive';
}else{
    print 'The session was destoryed <br> <a href="page_one.php">Start New Session</a>';
}
<?php
 session_start();
 if(isset($_SESSION['aub'])){
     session_destroy();
     header("Location:index.php");
 }
?>
<?php
      if(isset($_GET['admin'])&&$_GET['admin']==0){
        session_destroy();
        to('index.php');
      }
    if(empty($_SESSION['admin'])){
      to('login.php');
    }
?>
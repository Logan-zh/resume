<?php
    include_once '../DB.php';
    include_once 'auth.php';
    $db = new DB;
    echo $db->del($_GET['table'],$_GET['id']);
    to('index.php');
?>
<?php
    include_once '../DB.php';
    include_once 'auth.php';
    $DB = new DB;

    if(!empty($_POST['display'])){
        $_POST['display']=$_POST['display'];
    }else{
        $_POST['display']=0;
    }
    if(!empty($_POST['img'])){
        $_POST['img']=$_POST['img'];
    }else{
        $_POST['img']='';
    }
        
    $DB->save('education',$_POST);
    setcookie('page','edu',time()+2);
    to('index.php');
?>
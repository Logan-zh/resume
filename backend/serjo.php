<?php
    include_once '../DB.php'; 
    include_once 'auth.php';
    $data = [
        'id'=>1,
        'title'=>$_POST['title'],
        'kind'=>$_POST['kind'],
        'available'=>$_POST['available'],
        'place'=>$_POST['place'],
    ];
    $db = new DB;
    $db->save('jobcondition',$data);
    setcookie('page','serj',time()+2);
    to('index.php');
?>
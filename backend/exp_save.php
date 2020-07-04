<?php
    include_once '../DB.php';
    include_once 'auth.php';
    $DB = new DB;
    $data = [
        'id'=>(!empty($_POST['id']))?$_POST['id']:'',
        'company'=>$_POST['company'],
        'JobTitle'=>$_POST['JobTitle'],
        'content'=>$_POST['content'],
        'startTime'=>$_POST['startTime'],
        'endTime'=>$_POST['endTime'],
        'display'=>(!empty($_POST['display']))?$_POST['display']:0,
    ];
    $DB->save('experience',$data);
    setcookie('page','exper',time()+2);
    to('index.php');
?>
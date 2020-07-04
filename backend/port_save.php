<?php
    include_once '../DB.php'; 
    include_once 'auth.php';
    $db = new DB;
    $data = [
        'id'=>(!empty($_POST['id']))?$_POST['id']:'',
        'title'=> $_POST['title'],
        'image'=> $_POST['image'],
        'url'=> $_POST['url'],
        'briefIntroduction'=> $_POST['briefIntroduction'],
        'display'=> (!empty($_POST['display']))?$_POST['display']:0,
    ];
    $db->save('portfolio',$data);
    setcookie('page','portf',time()+2);
    to('index.php');
?>
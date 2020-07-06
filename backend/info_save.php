<?php
    include_once '../DB.php';
    include_once 'auth.php';
    $DBC = new DB;
    $img = $DBC->find('information',1);
    $data = [
        'id' => 1,
        'name' => $_POST['name'],
        'image' => (!empty($_FILES['image']['name']))?$_FILES['image']['name']:$img['image'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'birthday' => $_POST['birthday'],
        'address' => $_POST['address'],
        'Introduction' => $_POST['Introduction'],
    ];
    print_r($_FILES);
    if(!empty($_FILES['image']['tmp_name'])){
        move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$_FILES['image']['name']);
        unlink('../'.$img['image']);
    }
    $DBC->save('information',$data);
    setcookie('page','info',time()+2);
    to('index.php');
?>
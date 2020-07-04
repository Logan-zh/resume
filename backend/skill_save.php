<?php
    include_once '../DB.php';
    include_once 'auth.php';
    $db = new DB;
    if(!empty($_POST['id'])){
        foreach($_POST['id'] as $k => $v){
            if(!empty($_POST['del']) && in_array($v,$_POST['del'])){
                echo $db->del('skill',$v);
            }else{
            $row = $db->find('skill',$v);
            $row['name'] = $_POST['name'][$k];
            $row['sort'] = $_POST['sort'][$k];
            $row['display'] = (!empty($_POST['display']) && in_array($v,$_POST['display']))?1:0;
            echo $db->save('skill',$row);
            }
        }
    }else{
        $data = [
            'name' => $_POST['name'],
            'sort' => $_POST['sort'],
        ];
        $db->save('skill',$data);
    }
    setcookie('page','skill',time()+2);
    to('index.php');
?>
<?php
    include_once '../DB.php';
    $db=new DB;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $json=json_decode(file_get_contents('php://input'));
        if($json->acc == ''){
            echo json_encode('帳號不得為空');
        }
        else{
            $data['acc']=$json->acc;
            $data['pas']=hash('md5',$json->pas);
            $db->save('user',$data);
            echo json_encode('註冊成功');
        }
    }
?>
<?php
    include_once '../DB.php';
    $db=new DB;
    if(!empty($_GET['pic'])){
        $pic=$db->all('picture',['display'=>1]);
        echo json_encode($pic);
    }
    if(!empty($_FILES)){
        if($_FILES['img']['error']==0){
            $data=[
                'name'=>$_FILES['img']['name'],
                'display'=>1,
            ];
            move_uploaded_file($_FILES['img']['tmp_name'],'../image/'.$_FILES['img']['name']);
            $db->save('picture',$data);
            // $_SESSION['page']='imgm';
            setcookie('page','imgm',time()+2,'/');
        }
        to('../backend/index.php');
    }
    if(!empty($_POST)){
        $rows=$db->all('picture');
        if(is_array($_POST['display'])){
            foreach($rows as $row){
                if(!in_array($row['id'],$_POST['display'])){
                    $row['display']=0;
                    $db->save('picture',$row);
                }else{
                    $row['display']=1;
                    $db->save('picture',$row);
                }
            }
        }else{
            foreach($rows as $row){
                $row['display']=0;
                $db->save('picture',$row);
            }
        }
        if(is_array($_POST['del'])){
            foreach($_POST['del'] as $v){
                $db->del('picture',$v);
            }
        }
        to('../backend/index.php');
    }else{
        $rows=$db->all('picture');
        foreach($rows as $row){
            $row['display']=0;
            $db->save('picture',$row);
        }
        to('../backend/index.php');
    }
?>
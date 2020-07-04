<?php
    include_once '../DB.php';
    $db=new DB;
    if($_SERVER['REQUEST_METHOD']=="GET"){
        $information = $db->all('information');
        $experience = $db->all('experience');
        $portfolio = $db->all('portfolio');
        $skillS = $db->all('skill',['display'=>1],'group by `sort` order by `id`');
        $skill = $db->all('skill');
        $jbcon = $db->all('jobCondition');
        $edu = $db->all('education');
        $text = $db->all('autobiographical',['display'=>1]);
    
        $data['information']=$information;
        $data['experience']=$experience;
        $data['portfolio']=$portfolio;
        $data['skillS']=$skillS;
        $data['skill']=$skill;
        $data['jbcon']=$jbcon;
        $data['edu']=$edu;
        $data['intr']=$text;
        echo json_encode($data);
    }
    
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $data=[
            'content'=>$_POST['content'],
            'display'=>(!empty($_POST['display']))?1:0,
        ];
        if(!empty($_POST['id'])){
            $data['id']=$_POST['id'];
        }
        $db->save('autobiographical',$data);
    
        setcookie('page','auto',time()+2,'/');
        to('../backend/index.php');
        
        echo file_get_contents('php://input');
    }

    if($_SERVER['REQUEST_METHOD']=='del'){
        $data=json_decode(file_get_contents('php://input'));
        echo json_encode($db->del('autobiographical',$data->id));
    }
?>

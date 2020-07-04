<?php
    include_once '../DB.php';
    $db=new DB;
  
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
    
    if(!empty($_POST)){
        $data=[
            'id'=>$_POST['id'],
            'content'=>$_POST['content'],
            'display'=>(!empty($_POST['display']))?1:0,
        ];
        $db->save('autobiographical',$data);
        // $_SESSION['page']='auto';
        setcookie('page','auto',time()+2,'/');
        to('../backend/index.php');
    }
    if(!empty($_GET['aut'])){
        echo json_encode($data);
    }
?>

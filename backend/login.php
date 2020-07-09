<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <title>登入</title>
</head>
<body>
    <?php
        include_once '../DB.php';
        $DB = new DB;
        if(!empty($_POST)){
            if(preg_match("/\w/",$_POST['acc'])){
                if(($DB->num('user',['acc'=>$_POST['acc']])==0)){
                    to("login.php?msg=無此帳號");
                }else{
                    if(($DB->find('user',['acc'=>$_POST['acc'],'pas'=>hash('md5',$_POST['pas'])])==0)){
                        to("login.php?msg=密碼錯誤");
                    }else{
                        $_SESSION['admin'] = 1;
                    }
                }
            }
        }
        if(empty($_SESSION['admin'])){
    ?>
    <form action="login.php" method='post'>
        <div class="login">
            <div class='border shadow p-3 row flex-column align-items-center'>
                <div class='mt-3'><i class="mr-3 fa fa-user" aria-hidden="true"></i><input id='acc' type="text" name='acc' value='admin'></div>
                <div class='mt-3'><i class="mr-3 fa fa-unlock-alt" aria-hidden="true"></i><input id='pas' type="password" name='pas' value='111'></div>
                <span><?=(!empty($_GET['msg']))?$_GET['msg']:''?></span>
                <div class='mt-3'>
                    <a class='mr-3 btn btn-outline-dark' href="../index.html">返回</a>
                    <a class='mr-3 btn btn-outline-dark' href="sign_up.php">註冊</a>
                    <input class="btn btn-primary" type="submit" value="送出">
                </div>
            </div>
        </div>
    </form>
    <?php 
        }else{
        to('index.php');
        }
    ?>
</body>
</html>
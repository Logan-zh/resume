<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>登入</title>
</head>
<body>
    <?php
        include_once '../DB.php';
        $DB = new DB;
        if(!empty($_POST)){
            if(preg_match("/\w/",$_POST['acc'])){
                if(($DB->num('user',['acc'=>$_POST['acc']])==0)){
                    to('login.php');
                }else{
                    if(($DB->find('user',['acc'=>$_POST['acc'],'pas'=>hash('md5',$_POST['pas'])])==0)){
                        to('login.php');
                    }else{
                        $_SESSION['admin'] = 1;
                    }
                }
            }
        }
        if(empty($_SESSION['admin'])){
    ?>
    <div class="container">
    <div class="row">
        <h3>後臺登入</h3>
        <a class='ml-auto btn btn-outline-dark' href="../index.html">返回</a>
    </div>
        <div class="row justify-content-center mt-5">
            <div class='border shadow p-3 main'>
                <form action="login.php" method='post'>
                    <div class="input-control"><label for="acc">帳號：</label><input id='acc' type="text" name='acc'></div>
                    <div class="input-control"><label for="pas">密碼：</label><input id='pas' type="password" name='pas'></div>
                    <input class="float-right btn btn-primary" type="submit" value="送出">
                </form>
            </div>
        </div>
    </div>
    <?php 
        }else{
        to('index.php');
        }
    ?>
</body>
</html>
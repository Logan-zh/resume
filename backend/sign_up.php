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
    <title>註冊</title>
</head>
<body>
    <form action="">
        <div class="login">
            <div class='border shadow p-3 row flex-column align-items-center'>
                <div class='mt-3'><i class="mr-3 fa fa-user" aria-hidden="true"></i><input id='acc' type="text" name='acc' placeholder="account"></div>
                <div class='mt-3'><i class="mr-3 fa fa-unlock-alt" aria-hidden="true"></i><input id='pas' type="password" name='pas' placeholder="password"></div>
                <span><?=(!empty($_GET['msg']))?$_GET['msg']:''?></span>
                <div class='mt-3'>
                    <a class='mr-3 btn btn-outline-dark' href="login.php">返回</a>
                    <input class="btn btn-primary" type="submit" value="註冊">
                </div>
            </div>
        </div>
    </form>
    <script>
        $('input[type=submit]').click(function(){
            var acc=$('input[name=acc]').val();
            var pas=$('input[name=pas]').val();
            fetch('../api/sign_up.php',{
                method:'POST',
                body:JSON.stringify({
                    'acc':acc,
                    'pas':pas
                })
            }).then(res=>{
                return res.json();
            }).then(res=>{
                alert(res);
            }).catch(err=>{
                console.log(err);
            })
            event.preventDefault();
        })
    </script>
</body>
</html>
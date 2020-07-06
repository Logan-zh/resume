<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>履歷表後台管理</title>
</head>
<body>
<div class="row">
  <h1 class='col-6'>履歷表管理後台</h1>
  <div class="col-6"><a class='btn btn-outline-danger float-right' href="index.php?admin=0">登出</a></div>
</div>
<?php 
    include_once '../DB.php'; 
    include_once 'auth.php';
    $db = new DB();
    $information = $db->all('information');
    $skill = $db->all('skill');
    $exp = $db->all('experience');
    $jbcon = $db->all('jobcondition');
    $port = $db->all('portfolio');
    $intro=$db->all('autobiographical');
    $pic=$db->all('picture');
    $edu=$db->all('education');
?>
<div class="container border shadow p-4 bMain">
<div class="row">
  <div class="col-2">
    <div class="list-group" id="list-tab">
      <a class="list-group-item list-group-item-action active" id="list-info-list" data-toggle="list" href="#list-info">個人資訊</a>
      <a class="list-group-item list-group-item-action" id="list-serj-list" data-toggle="list" href="#list-serj" >求職條件</a>
      <a class="list-group-item list-group-item-action" id="list-skill-list" data-toggle="list" href="#list-skill">技能</a>
      <a class="list-group-item list-group-item-action" id="list-exper-list" data-toggle="list" href="#list-exper">經歷</a>
      <a class="list-group-item list-group-item-action" id="list-edu-list" data-toggle="list" href="#list-edu">學歷</a>
      <a class="list-group-item list-group-item-action" id="list-portf-list" data-toggle="list" href="#list-portf" >作品</a>
      <a class="list-group-item list-group-item-action" id="list-autob-list" data-toggle="list" href="#list-autob" >自傳</a>
      <a class="list-group-item list-group-item-action" id="list-imgm-list" data-toggle="list" href="#list-imgm" >圖片管理</a>
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-info">
            <form action="info_save.php" method='post' enctype="multipart/form-data">
                <label for="name">name:</label><input class="form-control" id="name" type="text" name="name" value="<?=($information[0]['name'])?>">
                <label for="image">image:</label><div><img style="width:100px" src="../image/<?=($information[0]['image'])?>"></div>
                <input type="file" name='image' id='image'>
                <label style="display:block;" for="email">email:</label><input class="form-control" id="email" type="text" name="email" value="<?=($information[0]['email'])?>">
                <label for="phone">phone:</label><input class="form-control" id="phone" type="text" name="phone" value="<?=($information[0]['phone'])?>">
                <label for="birthday">birthday:</label><input class="form-control" id="birthday" type="text" name="birthday" value="<?=($information[0]['birthday'])?>">
                <label for="address">address:</label><input class="form-control" id="address" type="text" name="address" value="<?=($information[0]['address'])?>">
                <label for="Introduction">Introduction:</label><input class="form-control" id="Introduction" type="text" name="Introduction" value="<?=($information[0]['Introduction'])?>">
                <input class="btn btn-success mt-3 float-right" type="submit" value='儲存'>
            </form>
        </div>

        <div class="tab-pane fade" id="list-serj">
          <form action="serjo.php" method='post'>
            <div class="input-group"><label for="">希望職稱：</label><input class='form-control' name='title' type='text' value='<?=$jbcon[0]['title']?>'></div>
            <div class="input-group"><label for="">希望性質：</label><input class='form-control' name='kind' type="text" value="<?=$jbcon[0]['kind']?>"></div>
            <div class="input-group"><label for="">可上班日：</label><input class='form-control' name='available' type="text" value="<?=$jbcon[0]['available']?>"></div>
            <div class="input-group"><label for="">希望地點：</label><input class='form-control' name='place' type="text" value="<?=$jbcon[0]['place']?>"></div>
            <div class="input-group"><input class='btn btn-primary ml-auto mt-3' type="submit" value="儲存"></div>
          </form>
        </div>

        <div class="tab-pane fade row" id="list-skill">
          <button onclick="addSkill()" class='btn btn-primary float-right mb-3'>新增</button>
          <form action="skill_save.php" method="post">
          <?php
            foreach($skill as $row){
              ?>
                <div class="input-group mb-2">
                  <input type="hidden" name="id[]" value="<?=$row['id']?>">
                  <label>name：</label><input class="form-control" type="text" name="name[]" value="<?=$row['name']?>">
                  <label class="ml-2">sort：</label><input class="form-control" type="text" name="sort[]" value="<?=$row['sort']?>">
                  <input class='form-control col-1' type="checkbox" name='display[]' value='<?=$row['id']?>' <?=($row['display']==1)?'checked':''?> ><span>顯示</span>
                  <input class='form-control col-1' type="checkbox" name="del[]" value='<?=$row['id']?>'><span>刪除</span>
                </div>
              <?php
            }
            ?>
            <input class="btn btn-success float-right" type="submit" value="送出">
            </form>
        </div>

        <div class="tab-pane fade" id="list-exper">
          <div class="col-12">
          <button onclick='addExp()' class='btn btn-primary float-right mb-3'>新增</button>
          </div>
            <?php
              foreach($exp as $rows){ ?>
              <form action="exp_save.php" method='post'>
              <div class="row col-12">
                <input class='border-0 form-control bg-light' type="text" name='id' value='<?=$rows['id']?>' readonly>
                <div class="col-12 input-control"><label for="">img：</label><input class='form-control' type="text" name="img" value="<?=$rows['img']?>"></div>
                <div class="col-12 input-control"><label for="">company：</label><input class='form-control' type="text" name="company" value="<?=$rows['company']?>"></div>
                <div class="col-12 input-control"><label for="">JobTitle：</label><input class='form-control' type="text" name="JobTitle" value="<?=$rows['JobTitle']?>"></div>
                <div class="col-12 input-control"><label for="">content：</label><textarea class='form-control' name="content" cols="10" rows="5"><?=$rows['content']?></textarea></div>
                <div class="col-4 input-control"><label for="">startTime：</label><input class='form-control' type="text" name="startTime" value="<?=$rows['startTime']?>"></div>
                <div class="col-4 input-control"><label for="">endTime：</label><input class='form-control' type="text" name="endTime" value="<?=$rows['endTime']?>"></div>
                <div class="col-1 input-control"><label for="">display：</label><input class='form-control' type="checkbox" name="display" value="1" <?=($rows['display']==1)?'checked':''?>></div>
                <div class="col-3 row align-items-end"><input class='btn btn-primary' type="submit" value='儲存'>
                <a class='btn btn-danger ml-2' href="del.php?table=experience&id=<?=$rows['id']?>">刪除</a></div>
              </div>
              </form>
              <?php } ?>
              <hr class='alert-dark'>
        </div>

        <div class="tab-pane fade" id="list-edu">
          <div class="col-12">
          <button onclick='addEdu()' class='btn btn-primary float-right mb-3'>新增</button>
          </div>
            <?php
              foreach($edu as $rows){ ?>
              <form action="edu_save.php" method='post'>
              <div class="row col-12">
                <input class='border-0 form-control bg-light' type="text" name='id' value='<?=$rows['id']?>' readonly>
                <div class="col-12 input-control"><label for="">img：</label><input class='form-control' type="text" name="img" value="<?=$rows['img']?>"></div>
                <div class="col-12 input-control"><label for="">school：</label><input class='form-control' type="text" name="school" value="<?=$rows['school']?>"></div>
                <div class="col-12 input-control"><label for="">title：</label><input class='form-control' type="text" name="title" value="<?=$rows['title']?>"></div>
                <div class="col-12 input-control"><label for="">department：</label><textarea class='form-control' name="department" cols="10" rows="5"><?=$rows['department']?></textarea></div>
                <div class="col-4 input-control"><label for="">display：</label><input class='form-control' type="text" name="display" value="<?=$rows['display']?>"></div>
              
                <div class="col-3 row align-items-end"><input class='btn btn-primary' type="submit" value='儲存'>
                <a class='btn btn-danger ml-2' href="del.php?table=education&id=<?=$rows['id']?>">刪除</a></div>
              </div>
              </form>
              <?php } ?>
              <hr class='alert-dark'>
        </div>

        <div class="tab-pane fade" id="list-portf">
                <button class='btn btn-secondary float-right mb-3' onclick='addPort()'>新增</button>
                <?php foreach($port as $value){ ?>
                <form action="port_save.php" method='post'>
                  <input type="hidden" name="id" value='<?=$value['id']?>'>
                  <div class="input-group row mb-2"><label class='col-2' for="">title：</label><input class='form-control col-10' name='title' type="text" value='<?=$value['title']?>'></div>
                  <div class="input-group row mb-2"><label class='col-2' for="">image：</label><input class='form-control col-10' name='image' type="text" value='<?=$value['image']?>'></div>
                  <div class="input-group row mb-2"><label class='col-2' for="">url：</label><input class='form-control col-10' name='url' type="text" value='<?=$value ['url']?>'></div>
                  <div class="input-group row mb-2"><label class='col-2' for="">briefIntroduction：</label><input class='form-control col-10' name='briefIntroduction'  type="text" value='<?=$value['briefIntroduction']?>'></div>
                  <div class="input-group row mb-2"><label class='col-2' for="">display：</label><input class='form-control col-10' name='display' type="checkbox" value='1' <?=($rows['display']==1)?'checked':''?>></div>
                  <div class="input-group mb-2"><input class='btn btn-primary ml-auto' type="submit" value="儲存"></div>
                </form>
                <?php } ?>
        </div>

        <div class="tab-pane fade" id="list-autob">
          <button class="btn btn-outline-primary float-right" onclick="addAuto()">新增</button>
                <?php foreach($intro as $v){ ?>
              <form action="../api/intro.php" method='POST'>
                <textarea style='width:100%;height:200px;' name="content"><?=$v['content']?></textarea>
                <div class="input-group">
                  <input type="hidden" name="id" value="<?=$v['id']?>">
                  <h3 class='ml-auto'>顯示</h3>
                  <div class="col-1"><input class='form-control' type="checkbox" name="display" <?=($v['display']==1)?'checked':''?>></div>
                  <a href="javascript:deleAuto(<?=$v['id']?>)">刪除</a>
                  <input class='btn btn-outline-primary m-2' type="submit" value="修改">
                </div>
              </form>
              <?php } ?>
        </div>

        <div class="tab-pane fade" id="list-imgm">
          <div class="row">
            <form action="../api/img.php" method='post' class='row'>
          <?php foreach($pic as $v){ ?>
              <div class="col-sm-12 col-md-6 col-lg-3">
                <img style="width:200px;height:200px" src="../image/<?=$v['name']?>">
                <p><?=$v['name']?></p>
                <input type="checkbox" name='display[]' value="<?=$v['id']?>" <?=($v['display']==1)?'checked':''?>>顯示
                <input type="checkbox" name="del[]" value="<?=$v['id']?>">刪除
              </div>
              <?php } ?>
              <div class="hr col-12"></div>
              <input class='ml-auto mr-3 btn btn-outline-primary' type="submit" value='送出'>
            </form>

            <div class="input-group">
              <form action="../api/img.php" method='post' enctype="multipart/form-data">
                <input type="file" name="img">
                <input type="submit" value="新增">
              </form>
            </div>
          </div>
        </div>
  </div>
  </div>
</div>
 <script>
  function addSkill(){
  $('#list-skill').append($("<form action='skill_save.php' method='post'><div class='input-group mb-2'><label>name：</label><input class='form-control' type='text' name='name' value=''><label class='ml-2'>sort：</label><input class='form-control' type='text' name='sort' value=''><input class='btn btn-primary mx-2' type='submit' value='新增'><a class='btn btn-danger invisible' href='#'>刪除</a></div></form>"));
  }
  function addExp(){
  $('#list-exper').append($("<form action='exp_save.php' method='post'><div class='row col-12'><div class='col-12 input-control'><abel for=''>company：</abel><input class='form-control' type='text' name='company' value=''></div><div class='col-12 input-control'><label for=''>JobTitle：</label><input class='form-control' type='text' name='JobTitle' value=''></div><div class='col-12 input-control'><label for=''>content：</label><textarea class='form-control' name='content' cols='10' rows='5'></textarea></div><div class='col-5 input-control'><label for=''>startTime：</label><input class='form-control' type='text' name='startTime' value=''></div><div class='col-5 input-control'><label for=''>endTime：</label><input class='form-control' type='text' name='endTime' value=''></div><div class='col-1 input-control'><label for=''>display：</label><input class='form-control' type='checkbox' name='display' value='1'></div><div class='col-1 row align-items-end'><input class='btn btn-primary' type='submit' value='新增'></div></div></form>"));
  }
  function addPort(){
  $('#list-portf').append($("<form action='port_save.php' method='post'><div class='input-group row mb-2'><label class='col-2' for=''>title：</label><input class='form-control col-10' name='title' type='text' value=''></div><div class='input-group row mb-2'><label class='col-2' for=''>image：</label><input class='form-control col-10' name='image' type='text' value=''></div><div class='input-group row mb-2'><label class='col-2' for=''>url：</label><input class='form-control col-10' name='url' type='text' value=''></div><div class='input-group row mb-2'><label class='col-2' for=''>briefIntroduction：</label><input class='form-control col-10' name='briefIntroduction'  type='text' value=''></div><div class='input-group row mb-2'><label class='col-2' for=''>display：</label><input class='form-control col-10' name='display' type='checkbox' value='1'></div><div class='input-group mb-2'><input class='btn btn-primary ml-auto' type='submit' value='儲存'></div></form>"));
  }
  function addAuto(){
    $('#list-autob').append($("<form action='../api/intro.php' method='POST'><textarea style='width:100%;height:200px;' name='content'></textarea><div class='input-group'><h3 class='ml-auto'>顯示</h3><div class='col-1'><input class='form-control' type='checkbox' name='display'></div><input class='btn btn-outline-primary m-2' type='submit' value='送出'></div></form>"));
  }
  function deleAuto(id){
    console.log(id);
    fetch('../api/intro.php',{
      method:'del',
      body:JSON.stringify({
        'id':id
      })
    }
    ).then(res=>{
      return res.json();
    }).then(res=>{
      console.log(res);
      let t=new Date();
      console.log(t);
      t.setSeconds(t.getSeconds()+2);
      location.reload();
    }).catch(err=>{console.log(err)});
  }
  function addEdu(){
    $('#list-edu').append($("<form action='edu_save.php' method='post'><div class='row col-12'><div class='col-12 input-control'><label for=''>img：</label><input class='form-control' type='text' name='img' value=''></div><div class='col-12 input-control'><label for=''>school：</label><input class='form-control' type='text' name='school' value=''></div><div class='col-12 input-control'><label for=''>title：</label><input class='form-control' type='text' name='title' value=''></div><div class='col-12 input-control'><label for=''>department：</label><textarea class='form-control' name='department' cols='10' rows='5'></textarea></div><div class='col-4 input-control'><label for=''>display：</label><input class='form-control' type='text' name='display' value=''></div><div class='col-3 row align-items-end'><input class='btn btn-primary' type='submit' value='儲存'></div></form>"));
  }

  let cook = document.cookie;
  let t = cook.split(';');
  if(t.length>1){
    let p = t[0].split('=');
    let c = t[1].split('=');
   
    switch(p[1]){
      case 'info':
        $('#list-info-list').click();
      break;
      case 'serj':
        $('#list-serj-list').click();
      break;
      case 'skill':
        $('#list-skill-list').click();
      break;
      case 'exper':
        $('#list-exper-list').click();
      break;
      case 'portf':
        $('#list-portf-list').click();
      break;
      case 'edu':
        $('#list-edu-list').click();
      break;
    }
    switch(c[1]){
      case 'auto':
        $('#list-autob-list').click();
      break;
      case 'imgm':
        $('#list-imgm-list').click();
      break;
    }

  }
</script> 

</body>
</html>
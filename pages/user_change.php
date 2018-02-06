<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Редактировать: <?= $user['login']; ?></h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="/admin/user_change/<?= $user['id']; ?>" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputName">Логин</label>
        <input type="text" name="login" class="form-control" id="exampleInputName" placeholder="Логин" value="<?= $user['login']; ?>">
      </div>
    
      <div class="form-group">
        <label for="exampleInputLink">Пароль</label>
        <input type="text" name="password" class="form-control" id="exampleInputLink" placeholder="Пароль" value="<?= $user['password']; ?>">
      </div>   
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Редактировать</button>
    </div>
  </form>
</div>
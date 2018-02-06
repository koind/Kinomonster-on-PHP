<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Редактировать: <?= $new['name']; ?></h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="/admin/news_change/<?= $new['id']; ?>" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputName">Введите название новости</label>
        <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Введите название новости" value="<?= $new['name']; ?>">
      </div>

      <div class="form-group">
        <label for="exampleInputCont">Введите саму новость</label>        
        <textarea required name="content" class="form-control" id="exampleInputCont" placeholder="Введите саму новость" rows="3"><?= $new['content']; ?></textarea>
      </div>
    
      <div class="form-group">
        <label for="exampleInputLink">Укажите дату создания</label>
        <input type="text" name="date" class="form-control datepicker" id="exampleInputLink" placeholder="Укажите дату создания" value="<?= $new['date']; ?>">
      </div>   
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Редактировать</button>
    </div>
  </form>
</div>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Создать новость</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="/admin/news_create" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputName">Введите название новости</label>
        <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Введите название новости" required>
      </div>

      <div class="form-group">
        <label for="exampleInputCont">Введите саму новость</label>        
        <textarea required name="content" class="form-control" id="exampleInputCont" placeholder="Введите саму новость" rows="3"></textarea>
      </div>
    
      <div class="form-group">
        <label for="exampleInputLink">Укажите дату создания</label>
        <input type="text" name="date" class="form-control datepicker" id="exampleInputLink" placeholder="Укажите дату создания">
      </div>        
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Создать</button>
    </div>
  </form>
</div>
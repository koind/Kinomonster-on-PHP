<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Добавить фильм</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="/admin/video_create" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputName">Введите название</label>
        <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Введите название" required>
      </div>

      <div class="form-group">
        <label for="exampleInputDesc">Введите описание</label>        
        <textarea required name="description" class="form-control" id="exampleInputDesc" placeholder="Введите описание" rows="3"></textarea>
      </div>
 
      <div class="form-group">
        <label for="exampleInputFile">Выберите картинку</label>
        <input name="image" type="file" id="exampleInputFile" required>       
      </div>
      
      <div class="form-group">
        <label for="exampleInputLink">Укажите ссылку на фильм</label>
        <input type="text" name="link" class="form-control" id="exampleInputLink" placeholder="Укажите ссылку на фильм" required>
      </div>

      <div class="form-group">
        <label for="exampleInputYear">Год выпуска</label>
        <input type="text" name="year" class="form-control" id="exampleInputYear" placeholder="Год выпуска" required>
      </div>

      <div class="form-group">
        <label for="exampleInputProducer">Продюсер фильма</label>
        <input type="text" name="producer" class="form-control" id="exampleInputProducer" placeholder="Продюсер фильма" required>
      </div>            
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
  </form>
</div>






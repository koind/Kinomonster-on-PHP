<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Редактировать: <?= $video['name']; ?></h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="/admin/video_change/<?= $video['id']; ?>" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputName">Название</label>
        <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Введите название" value="<?= $video['name']; ?>" required>
      </div>

      <div class="form-group">
        <label for="exampleInputDesc">Описание</label>        
        <textarea required name="description" class="form-control" id="exampleInputDesc" placeholder="Введите описание" rows="3"><?= $video['description']; ?></textarea>
      </div>
 
      <div class="form-group">
        <label for="exampleInputFile">Выбрать другую картинку</label>
        <input name="image" type="file" id="exampleInputFile">       
      </div>
      
      <div class="form-group">
        <label for="exampleInputLink">Укажите ссылку на фильм</label>
        <input type="text" name="link" class="form-control" id="exampleInputLink" placeholder="Укажите ссылку на фильм"  value="<?= $video['link']; ?>" required>
      </div>

      <div class="form-group">
        <label for="exampleInputYear">Год выпуска</label>
        <input type="text" name="year" class="form-control" id="exampleInputYear" placeholder="Год выпуска" value="<?= $video['year']; ?>" required>
      </div>

      <div class="form-group">
        <label for="exampleInputProducer">Продюсер фильма</label>
        <input type="text" name="producer" class="form-control" id="exampleInputProducer" placeholder="Продюсер фильма" value="<?= $video['producer']; ?>" required>
      </div>            
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Редактировать</button>
    </div>
  </form>
</div>
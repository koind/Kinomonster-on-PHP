<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Редактировать статус отзыва</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="/admin/reviews_change/<?= $review['id']; ?>" method="post">
    <div class="box-body">
      <div class="form-group">
        <p><b>Автор:</b> <?= $review['name']; ?></p>        
      </div>

      <div class="form-group">
        <p><b>Отзыв:</b> <?= $review['content']; ?></p>        
      </div>
          
      <div class="form-group">
        <label for="exampleInputSelect">Включен ли?</label>        
        <select class="form-control" name="is_work" id="exampleInputSelect">
          <option value="1" <?php echo $review['is_work'] == 1 ? 'selected' : ''; ?>>Да</option>
          <option value="0" <?php echo $review['is_work'] == 0 ? 'selected' : ''; ?>>Нет</option>          
        </select>
      </div>   
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Редактировать</button>
    </div>
  </form>
</div>
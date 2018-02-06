<h1>Все отзывы</h1>

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">        
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>ID</th>
            <th>Автор отзыва</th>
            <th>Отзыв</th>
            <th>Дата</th>
            <th>ID видео</th>
            <th>Рейтинг</th>
            <th>Включен ли?</th>
            <th>Действия</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach($reviews as $review): ?>
          <tr>
            <td><?= $review['id']; ?></td>            
            <td><?= $review['name']; ?></td>                                      
            <td><?= $review['content']; ?></td>                                      
            <td><?= $review['date']; ?></td>
            <td><?= $review['video_id']; ?></td>
            <td><?= $review['rating']; ?></td>
            <td><?php echo $review['is_work'] ? 'Да' : 'Нет'; ?></td>
            <td>              
              <a href="/admin/reviews_change/<?= $review['id']; ?>" class="btn btn-default" title="Редактировать"><i class="fa fa-pencil"></i></a>
              <a href="/admin/reviews_delete/<?= $review['id']; ?>" class="btn btn-default" title="Удалить"><i class="fa fa-trash"></i></a>
            </td>
          </tr>            
          <?php endforeach; ?>
          </tbody>            
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </div>
  <!-- /.col -->
</div>
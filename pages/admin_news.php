<h1>Все новости</h1>

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <a href="/admin/news_create" class="btn btn-success">Создать новость</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>ID</th>
            <th>Название новости</th>
            <th>Дата</th>              
            <th>Действия</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach($news as $video): ?>
          <tr>
            <td><?= $video['id']; ?></td>            
            <td><?= $video['name']; ?></td>                                      
            <td><?= $video['date']; ?></td>            
            <td>
              <a href="/admin/news_view/<?= $video['id']; ?>" class="btn btn-default" title="Посмотреть" target="_blank"><i class="fa fa-eye"></i></a>
              <a href="/admin/news_change/<?= $video['id']; ?>" class="btn btn-default" title="Редактировать"><i class="fa fa-pencil"></i></a>
              <a href="/admin/news_delete/<?= $video['id']; ?>" class="btn btn-default" title="Удалить"><i class="fa fa-trash"></i></a>
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
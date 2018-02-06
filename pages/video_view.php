<style>
  .box {
    font-size: 16px;
  }
  .box-title {
    color: #0D9C12; 
    font-weight: bold; 
    font-size: 24px;
  }

  .box img {
    width: 122px;
  }
</style>
<div class="box">
  <div class="box-header">
    <h3 class="box-title"><?= $video['name']; ?></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">
    <table class="table table-striped">
      <tbody>
      <tr>
        <td><b>ID:</b></td>
        <td><?= $video['id']; ?></td>
      </tr>
      <tr>
        <td><b>Название:</b></td>
        <td><?= $video['name']; ?></td>
      </tr>
      <tr>
        <td><b>Описание:</b></td>
        <td><?= $video['description']; ?></td>
      </tr>
      <tr>
        <td><b>Картинка:</b></td>
        <td><img src="/web/img/<?= $video['image']; ?>"></td>
      </tr>
      <tr>
        <td><b>Ссылка:</b></td>
        <td><?= $video['link']; ?></td>
      </tr>
      <tr>
        <td><b>Рейтинг:</b></td>
        <td><?= $video['rating']; ?></td>
      </tr>
      <tr>
        <td><b>Год:</b></td>
        <td><?= $video['year']; ?></td>
      </tr>
      <tr>
        <td><b>Продюсер:</b></td>
        <td><?= $video['producer']; ?></td>
      </tr>

    </tbody>
  </table>
  </div>
  <!-- /.box-body -->
</div>
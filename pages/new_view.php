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
    <h3 class="box-title"><?= $new['name']; ?></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">
    <table class="table table-striped">
      <tbody>
      <tr>
        <td><b>ID:</b></td>
        <td><?= $new['id']; ?></td>
      </tr>
      <tr>
        <td><b>Название:</b></td>
        <td><?= $new['name']; ?></td>
      </tr>
      <tr>
        <td><b>Содержание:</b></td>
        <td><?= $new['content']; ?></td>
      </tr>     
      <tr>
        <td><b>Дата:</b></td>
        <td><?= $new['date']; ?></td>
      </tr>     

    </tbody>
  </table>
  </div>
  <!-- /.box-body -->
</div>
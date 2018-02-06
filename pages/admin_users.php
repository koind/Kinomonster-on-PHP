<h1>Все пользователи</h1>

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
              <th>Логин</th>
              <th>Пароль</th>              
              <th>Действия</th>
            </tr>
            </thead>
            <tbody>            
            <tr>
              <td><?= $user['id']; ?></td>            
              <td><?= $user['login']; ?></td>            
              <td><?= $user['password']; ?></td>                                    
              <td>
                <a href="/admin/user_change/<?= $user['id']; ?>" class="btn btn-default" title="Редактировать"><i class="fa fa-pencil"></i></a>
              </td>
            </tr>                        
            </tbody>            
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col -->
 </div>
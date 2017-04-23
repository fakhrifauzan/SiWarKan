<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Tambah Operator</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-header">
        Operator
      </div>
      <div class="card-body no-padding">
        <table class="datatable table table-striped primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
      <?php $no=1; foreach($operator as $view){
      echo "
      <tr>
      <td>$no</td>
      <td>$view->nama_operator</td>
      <td>$view->divisi_operator</td>
      <td>$view->alamat_operator</td>
      <td>
        <a href=".base_url().'operator/edit_operator/'.$view->id_operator." title='Edit'><button class='btn btn-warning btn-xs'><i class='fa fa-edit' aria-hidden='true'></i></button></a>
        <a href=".base_url().'operator/delete_operator/'.$view->id_operator." title='Delete'><button class='btn btn-danger btn-xs'><i class='fa fa-trash' aria-hidden='true'></i></button></a>
      </td>
      </tr>";
      $no++;
      } ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Operator</h4>
      </div>
      <div class="modal-body">
        <form class="form form-horizontal" action="<?php echo base_url().'operator/add_operator' ?>" method="post">
        <div class="form-group">
          <label class="col-md-3 control-label">Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="nama_operator" placeholder="Nama Operator">
          </div>
          <label class="col-md-3 control-label">Divisi</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="divisi_operator" placeholder="Divisi Operator">
          </div>
          <label class="col-md-3 control-label">Alamat</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="alamat_operator" placeholder="Alamat Operator">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

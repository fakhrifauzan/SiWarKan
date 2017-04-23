<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Tambah Jenis Barang</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-header">
        Jenis Barang
      </div>
      <div class="card-body no-padding">
        <table class="datatable table table-striped primary" cellspacing="0" width="100%">
  <thead>
      <tr>
        <th>No</th>
        <th>Nama Jenis Barang</th>
        <th>Aksi</th>
      </tr>
  </thead>
  <tbody>
      <?php $no=1; foreach($jenis_barang as $view){
      echo "
      <tr>
      <td>$no</td>
      <td>$view->nama_barang_jenis</td>
      <td>
        <a href=".base_url().'jenis_barang/edit_jenis/'.$view->id_barang_jenis." title='Edit'><button class='btn btn-warning btn-xs'><i class='fa fa-edit' aria-hidden='true'></i></button></a>
        <a href=".base_url().'jenis_barang/delete_jenis/'.$view->id_barang_jenis." title='Delete'><button class='btn btn-danger btn-xs'><i class='fa fa-trash' aria-hidden='true'></i></button></a>
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
        <h4 class="modal-title" id="myModalLabel">Tambah Jenis Barang</h4>
      </div>
      <div class="modal-body">
        <form class="form form-horizontal" action="<?php echo base_url().'jenis_barang/add_jenis' ?>" method="post">
        <div class="form-group">
          <label class="col-md-3 control-label">Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="nama_barang_jenis" placeholder="Nama Jenis Barang">
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

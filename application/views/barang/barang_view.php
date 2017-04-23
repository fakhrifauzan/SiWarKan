<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Tambah Barang</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-header">
        Data Barang
      </div>
      <div class="card-body no-padding">
        <table class="datatable table table-striped primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
      <?php $no=1; foreach($barang as $view){
      echo "
      <tr>
      <td>$no</td>
      <td>$view->nama_barang</td>
      <td>$view->nama_barang_jenis</td>
      <td>$view->harga_barang</td>
      <td>
        <a href=".base_url().'barang/edit_barang/'.$view->id_barang." title='Edit'><button class='btn btn-warning btn-xs'><i class='fa fa-edit' aria-hidden='true'></i></button></a>
        <a href=".base_url().'barang/delete_barang/'.$view->id_barang." title='Delete'><button class='btn btn-danger btn-xs'><i class='fa fa-trash' aria-hidden='true'></i></button></a>
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
        <h4 class="modal-title" id="myModalLabel">Tambah Barang</h4>
      </div>
      <div class="modal-body">
        <form class="form form-horizontal" action="<?php echo base_url().'barang/add_barang' ?>" method="post">
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="nama_barang" placeholder="Nama Jenis Barang">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Jenis Barang</label>
            <div class="col-md-9">
                <div class="input-group">
                <select class="form-control" name="id_barang_jenis" required>
                    <option value="">-- Pilih Jenis Barang --</option>
                    <?php
                        foreach ($jenis as $view) {
                            echo "<option value='$view->id_barang_jenis'>$view->nama_barang_jenis</option>";
                        }
                    ?>
                </select>
              </div>
            </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Harga</label>
          <div class="col-md-9">
            <div class="input-group">
              <span class="input-group-addon">Rp.</span>
              <input type="integer" name="harga_barang" class="form-control" placeholder="5000">
            </div>
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

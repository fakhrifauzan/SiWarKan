<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
              Edit Barang
            </div>
            <div class="card-body">
                <form class="form form-horizontal" action="<?php echo base_url().'barang/update_barang' ?>" method="post">
                <div class="form-group">
                <input type="hidden" name="id_barang" value="<?php echo $record->id_barang;?>">
                  <label class="col-md-3 control-label">Nama Barang</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $record->nama_barang;?>" placeholder="Nama Barang" required>
                  </div>
                  <label class="col-md-3 control-label">Jenis Barang</label>
                  <div class="col-md-9">
                      <div class="input-group">
                      <select class="select2 form-control" name="id_barang_jenis" required>
                          <option value="">-- Pilih Jenis Barang --</option>
                          <?php
                              foreach ($jenis as $view) {
                                  echo "<option value='$view->id_barang_jenis'";
                                  if ($record->id_barang_jenis == $view->id_barang_jenis) {
                                      echo "selected";
                                  }
                                  echo ">$view->nama_barang_jenis</option>";
                              }
                          ?>
                      </select>
                    </div>
                  </div>
                  <label class="col-md-3 control-label">Harga Barang</label>
                  <div class="col-md-9">
                      <div class="input-group">
                          <span class="input-group-addon">Rp.</span>
                          <input type="number" class="form-control" name="harga_barang" value="<?php echo $record->harga_barang;?>" placeholder="5000" required>
                      </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
            </div>
        </div>
    </div>
</div>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
              Edit Jenis Barang
            </div>
            <div class="card-body">
                <form class="form form-horizontal" action="<?php echo base_url().'jenis_barang/update_jenis' ?>" method="post">
                <div class="form-group">
                <input type="hidden" name="id_barang_jenis" value="<?php echo $record->id_barang_jenis;?>">
                  <label class="col-md-3 control-label">Nama Jenis Barang</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="nama_barang_jenis" value="<?php echo $record->nama_barang_jenis;?>" placeholder="Nama Jenis Barang" required>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
            </div>
        </div>
    </div>
</div>

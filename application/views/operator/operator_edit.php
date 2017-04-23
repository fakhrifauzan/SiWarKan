<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
              Edit Operator
            </div>
            <div class="card-body">
                <form class="form form-horizontal" action="<?php echo base_url().'operator/update_operator' ?>" method="post">
                <div class="form-group">
                <input type="hidden" name="id_operator" value="<?php echo $record->id_operator;?>">
                  <label class="col-md-3 control-label">Nama</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="nama_operator" value="<?php echo $record->nama_operator;?>" placeholder="Nama Operator" required>
                  </div>
                  <label class="col-md-3 control-label">Divisi</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="divisi_operator" value="<?php echo $record->divisi_operator;?>" placeholder="Divisi Operator" required>
                  </div>
                  <label class="col-md-3 control-label">Alamat</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="alamat_operator" value="<?php echo $record->alamat_operator;?>" placeholder="Alamat Operator" required>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
            </div>
        </div>
    </div>
</div>

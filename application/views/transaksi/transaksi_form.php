<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-8">
      <div class="card card-mini">
        <div class="card-header">
          Tambah Barang
        </div>
        <div class="card-body">
            <form class="form form-horizontal" action="<?php echo base_url().'transaksi' ?>" method="post">
            <div class="form-group">
                <label class="col-md-2 control-label">Barang</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <select class="select2" name="id_barang">
                            <option value="">-- Pilih Barang --</option>
                            <?php
                                foreach ($barang as $view) {
                                    echo "<option value='$view->id_barang'>$view->nama_barang (Rp$view->harga_barang)</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <label class="col-md-2 control-label">Qty</label>
                <div class="col-md-2">
                    <div class="input-group">
                        <input type="number" name="qty_barang" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" data-toggle="modal">Simpan</button>
            </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-mini">
        <div class="card-header">
          Selesai
        </div>
        <div class="card-body">
            <form class="form form-horizontal" action="<?php echo base_url().'transaksi/selesai_belanja' ?>" method="post">
            <div class="form-group">
                <label class="col-md-4 control-label">Operator</label>
                <div class="col-md-8">
                    <div class="input-group">
                        <select class="select2" name="id_operator">
                            <option value="">-- Pilih Operator --</option>
                            <?php
                                foreach ($operator as $view) {
                                    echo "<option value='$view->id_operator'>$view->nama_operator</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-block" data-toggle="modal">Selesai Belanja</button>
        </form>
        </div>
      </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Detail Transaksi
        </div>
        <div class="card-body no-padding">
          <div class="table-responsive">
  <table class="table card-table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Harga</th>
        <th>Subtotal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php $no=1; $total=0; foreach($detail as $view){
        echo "
        <tr>
        <td>$no</td>
        <td>$view->nama_barang</td>
        <td>$view->qty_barang</td>
        <td>$view->harga</td>
        <td>".$view->qty_barang*$view->harga."</td>
        <td>
          <a href=".base_url().'transaksi/delete_item/'.$view->id_transaksi_detail." title='Delete'><button class='btn btn-danger btn-xs'><i class='fa fa-trash' aria-hidden='true'></i></button></a>
        </td>
        </tr>";
        $total = $total+($view->qty_barang*$view->harga);
        $no++;
        } ?>
    </tbody>
    <thead>
        <tr>
            <th colspan="4"><b>Total</b></th>
            <td><b><?php echo $total ?></b></td>
            <th></th>
        </tr>
    </thead>
  </table>
</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-md-12">
      <div class="card card-mini">
        <div class="card-header">
          Laporan per Tanggal
        </div>
        <div class="card-body">
            <form class="form form-horizontal" action="<?php echo base_url().'laporan' ?>" method="post">
            <div class="form-group">
                <label class="col-md-2 control-label">Tanggal 1</label>
                <div class="col-md-3">
                    <div class="input-group date form_date">
                        <input type="text" class="form-control" name="tanggal1" id="tanggal1" readonly>
                        <span class="input-group-addon"><i class='fa fa-calendar' aria-hidden='true'></i></span>
                    </div>
                </div>
                <label class="col-md-2 control-label">Tanggal 2</label>
                <div class="col-md-3">
                    <div class="input-group date form_date">
                        <input type="text" class="form-control" name="tanggal2" id="tanggal2" readonly>
                        <span class="input-group-addon"><i class='fa fa-calendar' aria-hidden='true'></i></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <select class="form-control" name="aksi">
                            <option value="proses">Cari</option>
                            <option value="cetak">Cetak</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-block" data-toggle="modal" readonly>Proses</button>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-header">
        Laporan Penjualan
      </div>
      <div class="card-body no-padding">
        <table class="datatable table table-striped primary" cellspacing="0" width="100%">
  <thead>
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Operator</th>
        <th>Total Transaksi</th>
        <th>Aksi</th>
      </tr>
  </thead>
  <tbody>
      <?php $no=1; $total=0; foreach($laporan as $view){
      echo "
      <tr>
      <td>$no</td>
      <td>$view->tanggal</td>
      <td>$view->nama</td>
      <td>$view->total</td>
      <td>
          <a href=".base_url().'laporan/cetak_transaksi/'.$view->id_transaksi." title='Cetak'><button class='btn btn-primary btn-xs'><i class='fa fa-print' aria-hidden='true'></i></button></a>
      </td>
      </tr>";
      $total=$total+$view->total;
      $no++;
      } ?>
  </tbody>
  <tfoot>
      <tr>
          <th colspan="3">Total</th>
          <th><?php echo $total ?></th>
          <th></th>
      </tr>
  </tfoot>
</table>
      </div>
    </div>
  </div>
</div>
</div>

</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>

<script>
      $('.form_date').datetimepicker({
          language:  'id',
          format: 'yyyy-mm-dd',
          weekStart: 1,
          todayBtn:  1,
          autoclose: 1,
          todayHighlight: 1,
          startView: 2,
          minView: 2,
          forceParse: 0
      });
</script>

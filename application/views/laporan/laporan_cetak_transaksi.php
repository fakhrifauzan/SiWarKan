<!DOCTYPE html>
<html>
<head>
  <title>Laporan Penjualan</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      border-radius: 5px;
    }

    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
      margin-left: 10%;
      margin-right: 10%;
      width: 80%;
    }

    thead th{
      text-align: left;
      padding: 10px;
    }

    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }

    tbody tr:nth-child(even){
      background: #F6F5FA;
    }

    tbody tr:hover{
      background: #EAE9F5
    }

    h1,h2,h3{
        text-align: center;
    }

  </style>
</head>
<body>
    <h1>Laporan Penjualan</h1>
    <h2>Warung Makan Bu Imas</h2>
    <?php $i=1; foreach ($laporan as $key): ?>
        <?php if ($i == 1) {
            echo "<h3>No. Transaksi : #$key->id_transaksi | Tanggal : $key->tanggal_transaksi | Operator : $key->nama_operator</h3>";
            break;
        } ?>
    <?php endforeach; ?>

	<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Subtotal</th>
	  		</tr>
	  	</thead>
	  	<tbody>
            <?php $no=1; $total=0; foreach($laporan as $view){
            echo "
            <tr>
            <td>$no</td>
            <td>$view->nama_barang</td>
            <td>$view->qty_barang</td>
            <td>$view->harga</td>
            <td>$view->subtotal</td>
            </tr>";
            $total=$total+$view->subtotal;
            $no++;
            } ?>
	  	</tbody>
        <tfoot>
            <tr>
                <th colspan="4">Total</th>
                <th><?php echo $total ?></th>
            </tr>
        </tfoot>
	  </table>
	 </div>
</body>
</html>

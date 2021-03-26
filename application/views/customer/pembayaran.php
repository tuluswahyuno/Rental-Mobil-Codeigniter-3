<div class="container mt-5 mb-5">

  <div class="row">
    <div class="col-md-8">
      <div class="card" style="margin-top: 90px">
        <div class="card-header alert alert-success">
          Inovice Pembayaran Anda
        </div>

        <div class="card-body">
          <table class="table">
            <?php foreach ($transaksi as $tr) : ?>
            
            
              <tr>
                <th>Merk Mobil</th>
                <td>:</td>
                <td><?php echo $tr->merk ?></td>
              </tr>


              <tr>
                <th>Tanggal Rental</th>
                <td>:</td>
                <td><?php echo date('d-m-y', strtotime($tr->tanggal_rental)) ?></td>
              </tr>


              <tr>
                <th>Tanggal Kembali</th>
                <td>:</td>
                <td><?php echo date('d-m-y', strtotime($tr->tanggal_kembali)) ?></td>

              </tr>


              <tr>
                <th>Biaya Sewa/Hari</th>
                <td>:</td>
                <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
              </tr>


              <tr>
                <?php 

                  $x = strtotime($tr->tanggal_kembali);
                  $y = strtotime($tr->tanggal_rental);

                  $jmlhari = abs(($x-$y)/(60*60*24));

                 ?>
                <th>Jumlah Hari Sewa</th>
                <td>:</td>
                <td> <?php echo $jmlhari ?> Hari</td>
              </tr>

              <tr class="text-success">
                
                <th>Jumlah Pembayaran</th>
                <td>:</td>
                <td><button class="btn btn-sm btn-success">Rp. <?php echo number_format($tr->harga * $jmlhari,0,',','.') ?></button></td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental) ?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
              </tr>


            <?php endforeach; ?>
          </table>
        </div>

      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="margin-top: 90px">
          <div class="card-header alert-alert primary" >
            Informasi Pembayaran
          </div>
          <div class="card-body">
            <p class="text-success mb-3">Silahkan Melakukan Pembayaran Melalui Nomor Rekening di Bawah ini :</p>

            <ul class="list-group list-group-flush">
            <li class="list-group-item">Bank Mandiri 123457812345</li>
            <li class="list-group-item">Bank BCA 123457812345</li>
            <li class="list-group-item">Bank BRI 123457812345</li>
            <li class="list-group-item">Bank BNI 123457812345</li>
          </ul>

          <?php if(empty($tr->bukti_pembayaran)) { ?>
            
            <button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#modalku">
            Upload Bukti Pembayaran
            </button>
          <?php }elseif($tr->status_pembayaran == '1') { ?>
            <button style="width: 100%" class="btn btn-sm btn-warning mt-3"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</button>
          <?php }elseif($tr->status_pembayaran == '2'){ ?>
            <button style="width: 100%" class="btn btn-sm btn-success mt-3"><i class="fa fa-check"></i> Pembayaran Selesai</button>
          <?php } ?>

          </div>
      </div>
    </div>
  </div>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modal dengan Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>



  <!-- The Modal untuk upload bukti pembayaran-->
  <div class="modal fade" id="modalku">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Ini adalah Bagian Header Modal -->
        <div class="modal-header">
          <h4 class="modal-title">Upload Bukti Pembayaran Anda</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        

        <!-- Ini adalah Bagian Body Modal -->
        <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">

        <div class="modal-body">
          <div class="form-group">
            <label>Upload Bukti Pembayaran</label>
            <input type="hidden" name="id_rental" class="form-control" value="<?php echo($tr->id_rental) ?>">
            <input type="file" name="bukti_pembayaran" class="form-control">
          </div>
        </div>
        
        <!-- Ini adalah Bagian Footer Modal -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-sm btn-success" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-sm btn-success">Submit</button>
        </div>
        </form>
        
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>




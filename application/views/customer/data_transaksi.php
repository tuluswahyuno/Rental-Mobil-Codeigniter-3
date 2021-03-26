<div class="container">
    <div class="card mx-auto" style="margin-top: 180px; margin-bottom: 100px">
        <div class="card-header">
          Data Transaksi Anda
        </div>

        <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan') ?></span>

        <div class="card-body">
          <table class="table table-bordered table-striped">
            
            <tr>
              <th>No</th>
              <th>Nama Customer</th>
              <th>Merk Mobil</th>
              <th>No. Plat</th>
              <th>Harga/Hari</th>
              <th>Action</th>
              <th>Batal</th>
            </tr>


            <?php 
              $no=1;
              foreach ($transaksi as $tr) :?>


            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $tr->nama ?></td>
              <td><?php echo $tr->merk ?></td>
              <td><?php echo $tr->no_plat ?></td>
              <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
              <td>
                <?php 
                    if($tr->status_rental == "Selesai"){?>

                      <button class="btn btn-sm btn-danger">Rental Selesai</button>

                      <?php }else{ ?>

                        <a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>

                      <?php } ?>
                 
              </td>

              <td>

                <?php 
                  if($tr->status_rental == 'Belum Selesai'){?>


                <a onclick="return confirm('Yakin Batal?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental) ?>">Batal</a>
               <?php }else{ ?>

                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalku">
                Batal
            </button>
                
               <?php } ?>

              </td>

            </tr>

            <?php endforeach; ?>


          </table>
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
          <h4 class="modal-title">Informasi Batal Transaksi</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        

        <!-- Ini adalah Bagian Body Modal -->
        <!-- <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data"> -->

        <div class="modal-body">
          
            <label>Maaf, transaksi ini sudah selesai dan tidak bisa dibatalkan !</label>
            <!-- <input type="file" name="bukti_pembayaran" class="form-control"> -->
          
        </div>
        
        <!-- Ini adalah Bagian Footer Modal -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
         
        </div>
        </form>
        
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>

<table style="width: 60%">
  <h2>Inovice Pembayaran Anda</h2>
    <?php foreach ($transaksi as $tr) : ?>


     <tr>
    <td>Nama Customer</td>
    <td>:</td>
    <td><?php echo $tr->nama ?></td>
    </tr>
    

    <tr>
    <td>Merk Mobil</td>
    <td>:</td>
    <td><?php echo $tr->merk ?></td>
    </tr>


    <tr>
    <td>Tanggal Rental</td>
    <td>:</td>
    <td><?php echo date('d-m-y', strtotime($tr->tanggal_rental)) ?></td>
    </tr>


    <tr>
    <td>Tanggal Kembali</td>
    <td>:</td>
    <td><?php echo date('d-m-y', strtotime($tr->tanggal_kembali)) ?></td>

    </tr>


    <tr>
    <td>Biaya Sewa/Hari</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
    </tr>


    <tr>
    <?php 

      $x = strtotime($tr->tanggal_kembali);
      $y = strtotime($tr->tanggal_rental);

      $jmlhari = abs(($x-$y)/(60*60*24));

     ?>
    <td>Jumlah Hari Sewa</td>
    <td>:</td>
    <td> <?php echo $jmlhari ?> Hari</td>
    </tr>

    <tr>
      <td>Status Pembayaran</td>
      <td>:</td>
      <td>
        <?php 
            if($tr->status_pembayaran == '2')
            {
              echo "Lunas";
            }else{
                echo "Belum Lunas";
            }
         ?>
       </td>
    </tr>

    <tr style="font-weight: bold;color: blue">
    <td>Jumlah Pembayaran</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($tr->harga * $jmlhari,0,',','.') ?></td>
    </tr>


    <tr>
      <td>Rekening Pembayaran</td>
      <td>:</td>
      <td>
        <ul>
            <li>Bank Mandiri 123457812345</li>
            <li>Bank BCA 123457812345</li>
            <li>Bank BRI 123457812345</li>
            <li>Bank BNI 123457812345</li>
        </ul>
      </td>
    </tr>

    


    <?php endforeach; ?>
    </table>



<script type="text/javascript">
  window.print();
</script>
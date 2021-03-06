<div class="main-content mt-5 mb-5 ml-5 mr-5">
        <div class="card" style="margin-top: 100px">
          <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
            <div class="row">
              <div class="col-mid-6">
                <img style="width: 90%" src="<?php echo base_url().'./assets/upload/'.$dt->gambar ?>">
              </div>

              <div class="col-mid-6">
                <table class="table">                
                    <tr>
                       <th>Merk</th>
                       <td><?php echo $dt->merk ?></td>
                     </tr>

                     <tr>
                       <th>No Plat</th>
                       <td><?php echo $dt->no_plat ?></td>
                     </tr>

                     <tr>
                       <th>Warna</th>
                       <td><?php echo $dt->warna ?></td>
                     </tr>

                     <tr>
                       <th>Tahun Produksi</th>
                       <td><?php echo $dt->tahun ?></td>
                     </tr>

                     <tr>
                       <th>Status</th>
                       <td>
                          <?php  
                              if($dt->status == "0"){
                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                              }else{
                                echo "<span class='badge badge-primary'>Tersedia</span>";
                              }
                          ?>  
                       </td>
                      </tr>

                  
                </table>

                <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('customer/data_mobil') ?>">Kembali</a>
                      <?php 
                            if($dt->status == "0"){
                              echo "<span class='btn btn-sm btn-danger' disable>Telah di Rental</span>";
                            }else{
                              echo anchor('customer/rental/tambah_rental'.$dt->id_mobil, '<button class="btn btn-sm btn-success">Rental</button>' );
                            }
                      ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

</div>
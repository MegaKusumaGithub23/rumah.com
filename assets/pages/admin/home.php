
<?php
  $id = $_SESSION["login"];
    $perintah2 = "SELECT * FROM tb_user WHERE id = '$id'";
    $query2 = mysqli_query($conn,$perintah2);
    $user2 = mysqli_fetch_array($query2);
    $level = $user2['level'];
  if ($level == 1) {
    ?>
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Rumah</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable-export" class="table table-striped">
                  <thead class="thead-light">
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Alamat</th>
                      <th>Tahun Bangunan</th>
                      <th>Luas Bangunan</th>
                      <th>Luas Tanah</th>
                      <th>Type Rumah</th>
                      <th>Status Rumah</th>
                      <th>Type Interior</th>
                      <?php 
                        $id = $_SESSION['login'];
                        $cekusersql = "
                          SELECT * FROM tb_user
                          WHERE id = '$id'";
                        $cekuser = mysqli_query($conn, $cekusersql);
                        $datauser = mysqli_fetch_array($cekuser);
                        
                        $level = $datauser['level'];

                        if ($level == '1') {
                          echo '
                            <th>Nama Pemilik</th>
                          ';
                        } else if ($level == '2') {
                          echo '
                            <th>Agen</th>
                          ';
                        }else{
                          echo'
                            <th>Agen</th>
                            <th>Nama Pemilik</th>
                            ';
                        }
                      ?>
                      <th>Foto</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                  $no=1;

                  $id = $_SESSION['login'];
                  $cekusersql = "
                    SELECT * FROM tb_user
                    WHERE id = '$id'";
                  $cekuser = mysqli_query($conn, $cekusersql);
                  $datauser = mysqli_fetch_array($cekuser);
                  
                  $level = $datauser['level'];
                  if ($level=='0') {
                    $perintah = "SELECT * FROM tb_property";
                  }else if ($level=='1') {
                    $perintah = "
                    SELECT * FROM tb_user 
                        JOIN tb_property ON tb_user.id=tb_property.id_agen
                        where id_agen='$id' AND status_rumah='Terjual' 
                    ";
                  }else {
                    $perintah = "
                    SELECT * FROM tb_user 
                        JOIN tb_property ON tb_user.id=tb_property.id_pemilik
                        where id_pemilik='$id' ";
                  }
                  $dataw = mysqli_query($conn, $perintah);
                  while ($data = mysqli_fetch_array($dataw)) {

                ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['judul']; ?></td>
                      <td><?php echo $data['alamat']; ?></td>
                      <td><?php echo $data['thn_pembangunan']; ?></td>
                      <td><?php echo $data['luas_bangunan']; ?></td>
                      <td><?php echo $data['luas_tanah']; ?></td>
                      <td><?php echo $data['type_rumah']; ?></td>
                      <td><?php echo $data['status_rumah']; ?></td>
                      <td><?php echo $data['type_interior']; ?></td>
                      <?php 
                        $id = $_SESSION['login'];
                        $cekusersql = "
                          SELECT * FROM tb_user
                          WHERE id = '$id'";
                        $cekuser = mysqli_query($conn, $cekusersql);
                        $datauser = mysqli_fetch_array($cekuser);
                        
                        $level = $datauser['level'];

                        if ($level == '1') {
                          echo '
                            <td>'.$data['nama'].'</td>
                          ';
                        }else if($level == '2'){
                          echo '
                            <td>'.$data['nama'].'</td>
                          ';
                        }else {
                          echo '
                            <td>'.$data['id_agen'].'</td>
                            <td>'.$data['id_pemilik'].'</td>
                            ';
                        }
                      ?>
                      <td><img src="../../images/upload/<?php echo $data['foto']; ?>" style="width: 30%;"></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
      <?php
    }
    else{
      echo'';
    }

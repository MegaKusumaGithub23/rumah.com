
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data agen</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable-export" class="table table-striped">
                  <thead class="thead-light">
                    <tr>
                      <th>No</th>
                      <th>Nama Agen</th>
                      <th>Email</th>
                      <th>No telepone</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                  $no=1;
                  $perintah = "SELECT * FROM tb_user where level='1'";
                  $dataw = mysqli_query($conn, $perintah);
                  while ($data = mysqli_fetch_array($dataw)) {
                ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['email']; ?></td>
                      <td><?php echo $data['no_tlp']; ?></td>
                      <td>
                        <a href="?page=agen&aksi=detail&id=<?php echo $data['id']?>" class="btn btn-warning"><span class="fa fa-clipboard"></span></a>
                        <a href="?page=agen&aksi=edit&id=<?php echo $data['id']?>" class="btn btn-success"><span class="fa fa-pencil"></span></a>
                        <a href="?page=agen&aksi=delete&id=<?php echo $data['id']?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>

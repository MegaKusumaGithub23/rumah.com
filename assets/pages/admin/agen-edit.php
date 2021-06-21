	<?php
		include("../../config/db.php");
		$id=$_GET['id'];
        	if(isset($_POST['submit'])) {
				$name = $_POST['nama'];
				$alamat = $_POST['alamat'];
                $email = $_POST['email'];
                $no_tlp = $_POST['no_tlp'];
			
				if (empty($name)||empty($alamat)||empty($email)||empty($no_tlp)) {
					echo'<div class="alert alert-danger" role="alert"> Maaf data tidak boleh kosong</div>';
				}else{
						$perintah ="UPDATE tb_user SET nama='$name',alamat='$alamat',email='$email',no_tlp='$no_tlp' where id='$id'";
						$query = mysqli_query($conn,$perintah);
			            if($query){
			              echo'<div class="alert alert-success" role="alert"> Selamat Data berhasil di input</div>';
			            }else{
			              echo'<div class="alert alert-danger" role="alert"> Maaf data tidak berhasil di input</div>';
			            }
				}
			}
		?>
<div class="col-lg-12 card p-2">
    <div class="panel panel-default">
        <div class="panel-heading">
        </div>
       	<?php 
			$id = $_GET['id'];
			$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE id='$id'");
			while($data = mysqli_fetch_array($query)){
		?>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Agen</label>
                            <input class="form-control" placeholder="Enter text" name="nama" value="<?php echo $data['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat Agen</label>
                            <input class="form-control" placeholder="Enter text" name="alamat"  value="<?php echo $data['alamat'] ?>">
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input class="form-control" placeholder="Mulai Dari 628xxxxxx" name="no_tlp"  value="<?php echo $data['no_tlp'] ?>">
                            <small>Jangan Ketikan 081. ex. 6281234567891</small>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" placeholder="Masukan email" name="email"  value="<?php echo $data['email'] ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    <?php }?>
    </div>
</div>
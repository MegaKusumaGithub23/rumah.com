	<?php
		include"../../config/db.php";
		$id=$_GET['id'];
    	if(isset($_POST['submit'])) {
			$nama_pemilik 	= $_POST['nama_pemilik'];
			$judul 			= $_POST['judul'];
			$alamat 		= $_POST['alamat'];
			$thn_bangunan 	= $_POST['thn_bangunan'];
			$imb 			= $_POST['imb'];
		    $type_interior 	= $_POST['type_interior'];
		    $status_rumah 	= $_POST['status_rumah'];
		    $type_rumah 	= $_POST['type_rumah'];
		    $luas_bangunan 	= $_POST['luas_bangunan'];
		    $luas_tanah 	= $_POST['luas_tanah'];
		    $jml_lantai 	= $_POST['jml_lantai'];
		    $sertifikat 	= $_POST['sertifikat'];
		    $fasilitas 		= $_POST['fasilitas'];
		    $jml_kamartidur = $_POST['jml_kamartidur'];
		    $jml_kamarmandi = $_POST['jml_kamarmandi'];
		    $id_agen 		= $_SESSION['login'];
		    $harga 			= $_POST['harga'];
		
			if(empty($judul)||empty($nama_pemilik)||empty($alamat)||empty($thn_bangunan)||empty($imb)||empty($type_interior)||empty($status_rumah)||empty($sertifikat)||empty($type_rumah)||empty($luas_bangunan)||empty($luas_tanah)||empty($jml_lantai)||empty($fasilitas)||empty($jml_kamartidur)||empty($jml_kamarmandi)||empty($id_agen)||empty($harga)) {
				echo'<div class="alert alert-danger" role="alert"> Maaf data tidak boleh kosong</div>';
			}else{
				$ekstensi_diperbolehkan  = array('png','jpg');
			    $image = $_FILES['image']['name'];
			    $x = explode('.', $image);
			    $randomname = round(microtime(true)) . '.' . end($x); 
			    $ekstensi = strtolower(end($x));
			    $ukuran = $_FILES['image']['size'];
			    $file_tmp = $_FILES['image']['tmp_name'];
		        
		        if(in_array($ekstensi, $ekstensi_diperbolehkan) == true){
		          if($ukuran < 2044070){      
		            move_uploaded_file($file_tmp, '../../images/upload/'.$randomname);
					$perintah ="UPDATE tb_property SET judul='$judul',alamat='$alamat',thn_pembangunan='$thn_bangunan',luas_bangunan='$luas_bangunan',luas_tanah='$luas_tanah',type_rumah='$type_rumah',jumlah_lantai='$jml_lantai',id_pemilik='$nama_pemilik',status_rumah='$status_rumah',sertifikat='$sertifikat',imb='$imb',type_interior='$type_interior',jml_kamartidur='$jml_kamartidur',jml_kamarmandi='$jml_kamarmandi',harga='$harga',fasilitas='$fasilitas',foto='$randomname' where id='$id'";
					$query = mysqli_query($conn,$perintah);
		            if($query){
		              echo'<div class="alert alert-success" role="alert"> Selamat Data berhasil di input</div>';
		            }else{
		              echo'<div class="alert alert-danger" role="alert"> Maaf data tidak berhasil di input</div>';
		            }
		           }else{
		            echo'<div class="alert alert-danger" role="alert"> Maaf File image terlalu besar</div>';
		          }
		        }else{
		          echo '<div class="alert alert-danger" role="alert"> Maaf file harus berupa PNG & JPG</div>';
		        }
			}
		}
	?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
		  <h3 class="card-title">Masukan Data Rumah</h3>
		</div>
		<div class="card-body">
		  <form action="" method="post" enctype="multipart/form-data">
		    <fieldset>
		    	<?php
		    	$id=$_GET['id'];
					$perintah = " 
                        SELECT * from tb_user 
                        JOIN tb_property ON tb_user.id =tb_property.id_agen
                        WHERE tb_property.id='$id'";
                        $dataw = mysqli_query($conn, $perintah);
                  		$data = mysqli_fetch_array($dataw);
		    	?>
		      <div class="form-group row">
		        <label for="ticket-name" class="col-sm-3 col-form-label">Judul</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-name" placeholder="judul" name="judul" value="<?php echo $data['judul'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">alamat</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" name="alamat" value="<?php echo $data['alamat'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-priority" class="col-sm-3 col-form-label">Tahun Pembangunan</label>
		        <div class="col-sm-3">
		          <select id="ticket-priority" name="thn_bangunan" class="form-control">
		            <option>Pilih salah 1</option>
		            <option value="2015">2015</option>
		            <option value="2016">2016</option>
		            <option value="2017">2017</option>
		            <option value="2018">2018</option>
		            <option value="2019">2019</option>
		            <option value="2020">2020</option>
		            <option value="2021">2021</option>
		          </select>
		        </div>
		        <label for="ticket-priority" class="col-sm-3 col-form-label">IMB</label>
		        <div class="col-sm-3">
		          <select id="ticket-priority" name="imb" class="form-control">
		            <option>Pilih Salah 1</option>
		            <option value="Ada">Ada</option>
		            <option value="Tidak Ada">Tidak Ada</option>
		          </select>
		        </div>
		    </div>
		    <div class="form-group row">
		        <label for="ticket-priority" class="col-sm-3 col-form-label">Sertifikat</label>
		        <div class="col-sm-3">
		          <select id="ticket-priority" class="form-control" name="sertifikat">
		            <option>Pilih Salah 1</option>
		            <option value="Ada">Ada</option>
		            <option value="Tidak Ada">Tidak Ada</option>
		          </select>
		        </div>
		        <label for="ticket-priority" class="col-sm-3 col-form-label">Type Interior</label>
		        <div class="col-sm-3">
		          <select id="ticket-priority" class="form-control" name="type_interior">
		            <option>Pilih Salah 1</option>
		            <option value="Kosongan">Kosongan</option>
		            <option value="Lengkap">Lengkap</option>
		          </select>
		        </div>
		    </div>
		    <div class="form-group row">
		        <label for="ticket-priority" class="col-sm-3 col-form-label">Status Rumah</label>
		        <div class="col-sm-3">
		          <select id="ticket-priority" class="form-control" name="status_rumah">
		            <option>Pilih Salah 1</option>
		            <option value="Dijual">Dijual</option>
		            <option value="Disewa">Disewa</option>
		          </select>
		        </div>
		        <label for="ticket-priority" class="col-sm-3 col-form-label">Type Rumah</label>
		        <div class="col-sm-3">
		          <select id="ticket-priority" class="form-control" name="type_rumah">
		            <option>Pilih Salah 1</option>
		            <option value="Sederhana">Sederhana</option>
		            <option value="Menengah">Menengah</option>
		            <option value="Mewah">Mewah</option>
		          </select>
		        </div>
		    </div>
		    <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Luas Bangunan</label>
		        <div class="col-sm-3">
		          	<input type="text" class="form-control" id="ticket-email" placeholder="Luas Bangunan" name="luas_bangunan" value="<?php echo $data['luas_bangunan'];?>">
		        </div>
		        <label for="ticket-email" class="col-sm-3 col-form-label">Luas Tanah</label>
		        <div class="col-sm-3">
		          	<input type="text" class="form-control" id="ticket-email" placeholder="Luas Tanah" name="luas_tanah"  value="<?php echo $data['luas_tanah'];?>">
		        </div>
		    </div>
		    <div class="form-group row">
		        <label for="ticket-priority" class="col-sm-3 col-form-label">Jumlah Lantai</label>
		        <div class="col-sm-3">
		          <select id="ticket-priority" class="form-control" name="jml_lantai">
		            <option>Pilih Salah 1</option>
		            <option value="1">1</option>
		            <option value="2">2</option>
		            <option value="3">3</option>
		            <option value="4">4</option>
		            <option value="5">5</option>
		            <option value="6">6</option>
		          </select>
		        </div>
		        <label for="ticket-email" class="col-sm-3 col-form-label">Fasilitas</label>
		        <div class="col-sm-3">
		          	<input type="text" class="form-control" id="ticket-email" placeholder="Fasilitas" name="fasilitas"  value="<?php echo $data['fasilitas'];?>" >
		        </div>
		    </div>
		    <div class="form-group row">
		        <label for="ticket-priority" class="col-sm-3 col-form-label">Jumlah Kamar Tidur</label>
		        <div class="col-sm-3">
		          <select id="ticket-priority" class="form-control" name="jml_kamartidur">
		            <option>Pilih Salah 1</option>
		            <option value="1">1</option>
		            <option value="2">2</option>
		            <option value="3">3</option>
		            <option value="4">4</option>
		          </select>
		        </div>
		        <label for="ticket-priority" class="col-sm-3 col-form-label">Jumlah Kamar Mandi</label>
		        <div class="col-sm-3">
		          <select id="ticket-priority" class="form-control" name="jml_kamarmandi">
		            <option>Pilih Salah 1</option>
		            <option value="1">1</option>
		            <option value="2">2</option>
		            <option value="3">3</option>
		            <option value="4">4</option>
		          </select>
		        </div>
		    </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Harga</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="Harga" name="harga" value="<?php echo $data['harga'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-attachment" class="col-sm-3 col-form-label">Upload gambar</label>
		        <div class="col-md-9">
		          <div class="custom-file">
		            <input type="file" class="dropify" name="image">
		            <label class="custom-file-label" for="ticket-attachment">Choose file</label>
		          </div>
		          <p class="form-text text-muted"><em>Valid file type: .jpg, .png, .txt, .pdf. File size max: 1 MB</em></p>
		        </div>
		      </div>

		      <div class="form-group row">
		        <div class="offset-sm-3 col-sm-9">
		          <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
		        </div>
		      </div>
		    </fieldset>
		  </form>
		</div>
	</div>
</div>
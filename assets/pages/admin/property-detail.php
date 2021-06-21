
<?php
$id=$_GET['id'];
$perintah = " 
    SELECT * from tb_user 
    JOIN tb_property ON tb_user.id =tb_property.id_agen
    WHERE tb_property.id='$id'";
    $dataw = mysqli_query($conn, $perintah);
	$data = mysqli_fetch_array($dataw);
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
		  <h3 class="card-title">Data Rumah</h3>
		</div>
		<div class="card-body">
		  <form action="" method="post" enctype="multipart/form-data">
		    <fieldset>
		      <div class="form-group row">
		        <label for="ticket-name" class="col-sm-3 col-form-label">Judul</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-name" placeholder="judul" value="<?php echo $data['judul'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">alamat</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" value="<?php echo $data['alamat'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Tahun Pembangunan</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" value="<?php echo $data['thn_pembangunan'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">IMB</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" value="<?php echo $data['imb'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Sertifikat</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" value="<?php echo $data['sertifikat'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Typer Interior</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" value="<?php echo $data['type_interior'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Status Rumah</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" value="<?php echo $data['status_rumah'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">type Rumah</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" value="<?php echo $data['type_rumah'];?>">
		        </div>
		      </div>
		    <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Luas Bangunan</label>
		        <div class="col-sm-9">
		          	<input type="text" class="form-control" id="ticket-email" placeholder="Luas Bangunan" value="<?php echo $data['luas_bangunan'];?>">
		        </div>
		    </div>
		    <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Luas Tanah</label>
		        <div class="col-sm-9">
		          	<input type="text" class="form-control" id="ticket-email" placeholder="Luas Tanah" value="<?php echo $data['luas_tanah'];?>">
		        </div>
		    </div>
		    <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Fasilitas</label>
		        <div class="col-sm-9">
		          	<input type="text" class="form-control" id="ticket-email" placeholder="Fasilitas" name="fasilitas"  value="<?php echo $data['fasilitas'];?>" >
		        </div>
		    </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Tahun Pembangunan</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" value="<?php echo $data['thn_pembangunan'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Jumlah Kamar Tidur</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" value="<?php echo $data['jml_kamartidur'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Jumlah Kamar Mandi</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="alamat" value="<?php echo $data['jml_kamarmandi'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Harga</label>
		        <div class="col-sm-9">
		          <input type="text" class="form-control" id="ticket-email" placeholder="Harga" name="harga" value="<?php echo $data['harga'];?>">
		        </div>
		      </div>
		      <div class="form-group row">
		        <label for="ticket-email" class="col-sm-3 col-form-label">Image</label>
		        <div class="col-sm-9">
		          <img src="../../images/upload/<?php echo $data['foto']; ?>">
		        </div>
		      </div>
		    </fieldset>
		  </form>
		</div>
	</div>
</div>
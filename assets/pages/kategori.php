<div class="container">
	<div class="row">
        <form method="post" class="form-inline search-form mr-auto d-none d-sm-block col-12">
          <div class="input-group">
            <select id="ticket-priority" name="harga" class="form-control">
	            <option>Pilih Harga</option>
	            <option value="1">Terendah</option>
	            <option value="2">Tertinggi</option>
		    </select>
            <select id="ticket-priority" name="kt" class="form-control">
	            <option>Pilih Jumlah Kamar Tidur</option>
	            <option value="1">1</option>
	            <option value="2">2</option>
	            <option value="3">3 atau lebih</option>
		    </select>
            <div class="m-4">
              <button type="submit" name="filter" class="btn"><i class="fa fa-search"></i></button>
            </div>
       	</div>
        </form>
          </div>
	</div>

<div class="container-fluid">
<h2>
	<?php 
		if (isset($_POST['filter'])) {
			echo "Search Properti";
		} else {
			echo "";
		} 
	?>
</h2>
</div>
<?php
	if (isset($_POST['filter'])) {
		$titlejudul = "Seacrh Properti";
		$harga = $_POST['harga'];
		$kamar = $_POST['kt'];

		if ($harga == '1') {
			if ($kamar == '1') {
				$perintah = "SELECT * FROM tb_property WHERE jml_kamartidur = 1 ORDER BY harga ASC";	
			} else if ($kamar == '2') {
				$perintah = "SELECT * FROM tb_property WHERE jml_kamartidur = 2 ORDER BY harga ASC";
			} else if ($kamar == '3') {
				$perintah = "SELECT * FROM tb_property WHERE jml_kamartidur >= 3 ORDER BY harga ASC";
			}
		} else if ($harga == '2') {
			if ($kamar == '1') {
				$perintah = "SELECT * FROM tb_property WHERE jml_kamartidur = 1 ORDER BY harga DESC";
			} else if ($kamar == '2') {
				$perintah = "SELECT * FROM tb_property WHERE jml_kamartidur = 2 ORDER BY harga DESC";
			} else if ($kamar == '3') {
				$perintah = "SELECT * FROM tb_property WHERE jml_kamartidur >= 3 ORDER BY harga DESC";
			}
		}

	}
	else {
		$perintah = "";
	}
	$sql=mysqli_query($conn, $perintah);
	while ($data = mysqli_fetch_array($sql)) {
		$angka=$data['harga'];
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
?>
<div class="col-sm-6 col-lg-4 text-black">
	<a href="?page=index&aksi=detail-property&id=<?php echo $data['id']; ?>" class="text-black">
	<div class="card">
		<img src="../images/upload/<?php echo $data['foto']; ?>" style="width: 100%">
		<div class="card-body">
			<h2><?php echo $data['judul']; ?></h2>
			<h4><?php echo $hasil_rupiah; ?></h4>
			<p><span class="ti-map"></span> <?php echo $data['alamat']; ?></p>
			<hr>
			<a href="?page=index&aksi=detail-property&id=<?php echo $data['id']; ?>" class="btn btn-primary" style="font-size: 20px;">Detail <span class="fa fa-arrow-right"></span></a>
		</div>
	</div>
	</a>
</div>
<?php } ?>

<div class="container-fluid">
<h2>Kategori Mewah</h2>
</div>
<?php
	$sql=mysqli_query($conn,"SELECT * FROM tb_property where type_rumah='Mewah' LIMIT 6");
	while ($data = mysqli_fetch_array($sql)) {
		$angka=$data['harga'];
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
?>
<div class="col-sm-6 col-lg-4 text-black">
	<a href="?page=index&aksi=detail-property&id=<?php echo $data['id']; ?>" class="text-black">
	<div class="card">
		<img src="../images/upload/<?php echo $data['foto']; ?>" style="width: 100%">
		<div class="card-body">
			<h2><?php echo $data['judul']; ?></h2>
			<h4><?php echo $hasil_rupiah; ?></h4>
			<p><span class="ti-map"></span> <?php echo $data['alamat']; ?></p>
			<hr>
			<a href="?page=index&aksi=detail-property&id=<?php echo $data['id']; ?>" class="btn btn-primary" style="font-size: 20px;">Detail <span class="fa fa-arrow-right"></span></a>
		</div>
	</div>
	</a>
</div>
<?php } ?>


<div class="container-fluid">
<h2>Kategori Menengah</h2>
</div>
<?php
	$sql=mysqli_query($conn,"SELECT * FROM tb_property where type_rumah='Menengah' LIMIT 6");
	while ($data = mysqli_fetch_array($sql)) {
		$angka=$data['harga'];
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
?>
<div class="col-sm-6 col-lg-4 text-black">
	<a href="?page=index&aksi=detail-property&id=<?php echo $data['id']; ?>" class="text-black">
	<div class="card">
		<img src="../images/upload/<?php echo $data['foto']; ?>" style="width: 100%">
		<div class="card-body">
			<h2><?php echo $data['judul']; ?></h2>
			<h4><?php echo $hasil_rupiah; ?></h4>
			<p><span class="ti-map"></span> <?php echo $data['alamat']; ?></p>
			<hr>
			<a href="?page=index&aksi=detail-property&id=<?php echo $data['id']; ?>" class="btn btn-primary" style="font-size: 20px;">Detail <span class="fa fa-arrow-right"></span></a>
		</div>
	</div>
	</a>
</div>
<?php } ?>




<div class="container-fluid">
<h2>Kategori Sederhana</h2>
</div>
<?php
	$sql=mysqli_query($conn,"SELECT * FROM tb_property where type_rumah='Sederhana'  LIMIT 6");
	while ($data = mysqli_fetch_array($sql)) {
		$angka=$data['harga'];
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
?>
<div class="col-sm-6 col-lg-4 text-black">
	<a href="?page=index&aksi=detail-property&id=<?php echo $data['id']; ?>" class="text-black">
	<div class="card">
		<img src="../images/upload/<?php echo $data['foto']; ?>" style="width: 100%">
		<div class="card-body" style="color: #000000;">
			<h2><?php echo $data['judul']; ?></h2>
			<h4><?php echo $hasil_rupiah; ?></h4>
			<p><span class="ti-map"></span> <?php echo $data['alamat']; ?></p>
			<hr>
			<a href="?page=index&aksi=detail-property&id=<?php echo $data['id']; ?>" class="btn btn-primary" style="font-size: 20px;">Detail <span class="fa fa-arrow-right"></span></a>
		</div>
	</div>
	</a>
</div>
<?php } ?>

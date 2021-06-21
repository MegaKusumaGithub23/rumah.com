<?php
	$id = $_GET['id'];
	$sql=mysqli_query($conn,"SELECT * FROM tb_property INNER JOIN tb_user ON tb_property.id_agen = tb_user.id WHERE tb_property.id = '$id'");
	while ($data = mysqli_fetch_array($sql)) {
		$angka=$data['harga'];
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
?>

<div class="row col-lg-12 bg-white">
	<div class="col-6 text-center">
		<img src="../images/upload/<?php echo $data['foto']; ?>" style="width: 80%">
	</div>
	<div class="col-6 p-4">
		<h1><?php echo $data['judul']; ?></h1>
		<p>Kategori :</p>
		<h2><?php echo $data['type_rumah']; ?></h2>
		<h1><?php echo $hasil_rupiah; ?></h1>
		<h6>Status Rumah 			: <?php echo $data['status_rumah']; ?></h6>
		<h6>Fasilitas lain 			: <?php echo $data['fasilitas']; ?></h6>
		<h5>Luas Tanah 		: <?php echo $data['luas_tanah']; ?></h5>
		<h5>Luas Bangunan 	: <?php echo $data['luas_bangunan']; ?></h5>
		<h5>Tahun 			: <?php echo $data['thn_pembangunan']; ?></h5>
		<br>
		<h5><?php echo $data['jml_kamartidur']; ?> kamar tidur</h5>
		<h5><?php echo $data['jml_kamarmandi']; ?> kamar mandi</h5>
		<h5><?php echo $data['jumlah_lantai']; ?> lantai</h5>
		<h5>Tipe Interior	: <b><?php echo $data['type_interior']; ?></b></h5>
		<a href="https://wa.me/<?php echo $data['no_tlp']?>" class="btn btn-success col-10 mx-auto p-3 m-2" target="_blank"><span class="fa fa-envelope"></span> Hubungi Agen</a>
	</div>
</div>
<?php } ?>


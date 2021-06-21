 <div class="col-lg-12">
	<h1>REKOMENDASI</h1>
</div>

<?php
	$cekusersql = "
    SELECT * FROM tb_property LIMIT 6";
  	$cekuser = mysqli_query($conn, $cekusersql);
  	while ( $datauser = mysqli_fetch_array($cekuser)) {
        $angka=$datauser['harga'];
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
?>
<div class="col-sm-6 col-lg-4">
	<a href="" class="nav-link">
	<div class="card">
		<img src="../images/upload/<?php echo $datauser['foto']; ?>">
		<button class="btn btn-danger col-6 p-2" style="bottom: 30px; border-radius: 0 30px 30px 0;">
			<h5>Rumah</h5>
		</button>
		<div class="card-body" style="color: #000000;">
			<h2><?php echo $datauser['judul']; ?></h2>
			<p><?php echo $hasil_rupiah ?></p>
		</div>
	</div>
	</a>
</div>
<?php } ?>
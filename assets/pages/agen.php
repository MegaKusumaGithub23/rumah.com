<div class="container">
        <form class="form-inline search-form mr-auto d-none d-sm-block col-8" action="" method="post">
          <div class="input-group">
            <input type="text" name="search" value="<?php if(isset($_POST['search'])){ echo $_POST['search'];} ?>" class="form-control" placeholder="Search dashboard...">
            <div class="input-group-append">
              <button type="submit" class="btn" name="submit"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
	
</div>


<?php
if (isset($_POST['search'])) {
		$filter = $_POST['search'];
		$perintah = "SELECT * FROM tb_user WHERE CONCAT(nama,alamat,no_tlp) LIKE '%$filter%' and level='1'";
    	$query = mysqli_query($conn, $perintah);
    	if (mysqli_num_rows($query) > 0) {
    		foreach ($query as $data ) {
    			?>
				<div class="col-lg-3">
					<a href="" class="nav-link">
					<div class="card text-center">
						<img src="../images/upload/profile/<?php echo $data['image']; ?>" class="col-12 pt-4">
						<div class="card-body">
							<h2><?php echo $data['nama']?></h2>
							<p><?php echo $data['alamat']?></p>
							<br>
							<p><?php echo $data['email']?></p>
							<p><?php echo $data['no_tlp']?></p>
							<a href="https://wa.me/<?php echo $data['no_tlp']?>" class="btn btn-primary rounded mb-4" target="_blank"><span class="fa fa-comments"></span> Hubungi</a>
						</div>
					</div>
					</a>
				</div>
    			<?php
    		}
    	}else{
    		echo'
    		<div class="alert alert-danger alert-dismissible w-100" role="alert">
	            <i class="fa fa-times-circle"></i> Maaf Agen Yang Anda Cari Tidak Ada!
	        </div>
		        ';
    	}
    }else{
    	?>
		<div class="row">
		<?php
			$perintah = "SELECT * FROM tb_user where level='1'";
			$dataw = mysqli_query($conn, $perintah);
			while ($data = mysqli_fetch_array($dataw)) {
		?>

		<div class="col-lg-3">
			<a href="" class="nav-link">
			<div class="card text-center">
				<img src="../images/upload/profile/<?php echo $data['image']; ?>" class="col-12 pt-4">
				<div class="card-body">
					<h2><?php echo $data['nama']?></h2>
					<p><?php echo $data['alamat']?></p>
					<br>
					<p><?php echo $data['email']?></p>
					<p><?php echo $data['no_tlp']?></p>
					<a href="https://wa.me/<?php echo $data['no_tlp']?>" class="btn btn-primary rounded mb-4" target="_blank"><span class="fa fa-comments"></span> Hubungi</a>
				</div>
			</div>
			</a>
		</div>
		<?php } ?>
		</div>
		<?php
	}
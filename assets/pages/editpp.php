<?php
	include("../config/db.php");
	$id = $_GET['id'];
// menyimpan data kedalam variabel
	if(isset($_POST['update'])) {	

	    $ekstensi_diperbolehkan  = array('png','jpg');
	    $image = $_FILES['image']['name'];
	    $x = explode('.', $image);
	    $randomname = round(microtime(true)) . '.' . end($x); 
	    $ekstensi = strtolower(end($x));
	    $ukuran = $_FILES['image']['size'];
	    $file_tmp = $_FILES['image']['tmp_name'];
	    
	    if(in_array($ekstensi, $ekstensi_diperbolehkan) == true){
	      	if($ukuran < 2044070){      
	        	move_uploaded_file($file_tmp, '../images/upload/profile/'.$randomname);
	        	$perintah ="UPDATE tb_user SET image = '$randomname' where id ='$id'";
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
?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">
		  <h3 class="card-title">Edit Profile</h3>
		</div>
		<div class="card-body">
		  	<form action="" method="post" enctype="multipart/form-data">
			    <fieldset>
			      	<div class="col-12">
			            <h4 class="h6">Upload Image</h4>
			            <input type="file" class="dropify" name="image">
			        </div>
			        <button class="btn btn-success m-3" name="update" type="submit">Upload</button>
			    </fieldset>
			</form>
		</div>
	</div>
</div>
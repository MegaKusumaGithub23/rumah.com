<?php

include '../../config/db.php';
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM tb_user WHERE id=$id");
 if($result){
			echo'<div class="alert alert-success" role="alert"> Selamat Data berhasil di Hapus</div>';
		}else{
			echo'<div class="alert alert-danger" role="alert"> Maaf data tidak berhasil di hapus</div>';
		}
?>

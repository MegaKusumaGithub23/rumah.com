<?php
	$id=$_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE id='$id'");
	$data = mysqli_fetch_array($query)
?>
<div class="col-lg-12 card p-2">
    <div class="panel panel-default">
        <div class="panel-heading">
        </div>
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
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input class="form-control" placeholder="Masukan email" name="email"  value="<?php echo $data['tanggal_lahir'] ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
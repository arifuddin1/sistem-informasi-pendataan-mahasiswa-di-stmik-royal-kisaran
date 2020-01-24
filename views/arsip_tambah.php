
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="Nim" class="col-sm-3 control-label">Nim</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nim" class="form-control" id="inputEmail3" placeholder="Inputkan Nim" required>
                            </div>
							</div>
						 <div class="form-group">
                            <label for="Nama_Mahasiswa" class="col-sm-3 control-label">Nama Mahasiswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Mahasiswa" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Mahasiswa" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="Kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kelas" class="form-control" id="inputEmail3" placeholder="Inputkan Kelas" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="Jurusan" class="col-sm-3 control-label">Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Jurusan" class="form-control" id="inputEmail3" placeholder="Inputkan Jurusan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Semester" class="col-sm-3 control-label">Semester</label>
                            <div class="col-sm-9">
                                <input type="text" name="Semester"class="form-control" id="inputEmail3" placeholder="Inputkan Semester" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-warning">
                                    <span class="fa fa-save"></span> Simpan Data Mahasiswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Mahasiswa
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $Nim=$_POST['Nim'];
	$Nama_Mahasiswa=$_POST['Nama_Mahasiswa'];
	$Kelas=$_POST['Kelas'];
  $Jurusan=$_POST['Jurusan'];
	$Semester=$_POST['Semester'];
  
    //buat sql
    $sql="INSERT INTO tbl_mhs (Nim,Nama_Mahasiswa,Kelas,Jurusan,Semester) VALUES ('$Nim','$Nama_Mahasiswa','$Kelas','$Jurusan','$Semester')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Mahasiswa Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>

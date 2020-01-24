<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_mhs WHERE Nim='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="Nim" class="col-sm-3 control-label">Nim</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nim" value="<?=$data['Nim']?>"class="form-control" id="inputEmail3" placeholder="Nim">
                            </div>
                        </div>
                        
						<div class="form-group">
                            <label for="Nama_Mahasiswa" class="col-sm-3 control-label">Nama Mahasiswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Mahasiswa" value="<?=$data['Nama_Mahasiswa']?>"class="form-control" id="inputEmail3" placeholder="Nama Mahasiswa">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="Kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kelas" value="<?=$data['Kelas']?>"class="form-control" id="inputEmail3" placeholder="Kelas">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="Jurusan" class="col-sm-3 control-label">Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Jurusan" value="<?=$data['Jurusan']?>"class="form-control" id="inputEmail3" placeholder="Jurusan">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="Semester" class="col-sm-3 control-label">Semester</label>
                            <div class="col-sm-9">
                                <input type="text" name="Semester" value="<?=$data['Semester']?>"class="form-control" id="inputEmail3" placeholder="Semester">
                            </div>
                        </div>
                       
                      
                         <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Mahasiswa</button>
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
    $sql="UPDATE tbl_mhs SET Nim='$Nim',Nama_Mahasiswa='$Nama_Mahasiswa',Kelas='$Kelas',Jurusan='$Jurusan',Semester='$Semester' WHERE Nim ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>




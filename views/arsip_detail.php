<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_mhs WHERE Nim ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nim</td> <td><?= $data['Nim'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama_Mahasiswa</td> <td><?= $data['Nama_Mahasiswa'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td> <td><?= $data['Kelas'] ?></td>
                        </tr>
						<tr>
                            <td>Jurusan</td> <td><?= $data['Jurusan'] ?></td>
                        </tr>
                        <tr>
                            <td>Semester</td> <td><?= $data['Semester'] ?></td>
                        </tr>
                       
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Arsip </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>


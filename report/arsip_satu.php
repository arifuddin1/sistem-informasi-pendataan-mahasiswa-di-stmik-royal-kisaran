<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Mahasiswa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_mhs WHERE Nim='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendataan Mahasiswa STMIK Royal Kisaran </h2>
                        <h4>Jl. Prof. H.M.Yamin No. 137, Kisaran <br> Kisaran, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nim</td> <td><?= $data['Nim'] ?></td>
                                </tr>
                              
                                <tr>
                                    <td>Nama Mahasiswa</td> <td><?= $data['Nama_Mahasiswa'] ?></td>
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
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Moh. Saaleh Malawat<strong></u><br>
                                        NIP.
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
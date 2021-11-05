<?php
    include '../component/sidebar.php'
?>
    <br><br><br><br>
    <div class="container p-4 align-items-center justify-content-center" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4 class="text-center">DATA PEMILIK AKUN</h4>
    <hr>
        <body>
            <?php
            $query = mysqli_query($con, "SELECT * FROM coba") or die(mysqli_error($con));

            if (mysqli_num_rows($query) == 0) {
                echo '<strong>Tidak ada data akun yang ditampilkan</strong>';
            }else {
                $no = 1;
                while($data = mysqli_fetch_assoc($query)){
                echo'
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama: </strong>
                            '.$data['name'].'
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email: </strong>
                            '.$data['email'].'
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Alamat: </strong>
                            '.$data['alamat'].'
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Username: </strong>
                            '.$data['username'].'
                        </div>
                    </div>
                    <div>
                    <br>
                        <a class="btn btn-success fa fa-edit" href="./editMahasiswa.php?id='.$data['id'].'" style="color:white">
                            <a style="color:white"></a>
                        </a>
                        <a class="btn btn-danger fa fa-trash" href="../process/deleteMahasiswaProcess.php?id='.$data['id'].'" onClick="return confirm ( \'Yakin?\')">
                            <a style="color: white"></a>
                        </a>
                    </div>
                </div><hr>';
                $no++;
                }
            }
            ?>
            </body>
        </div>

        </aside>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </body>
</html>
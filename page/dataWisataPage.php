<?php
    include '../component/sidebar.php'
?>
    <br><br><br><br>
    <div class="container p-4 align-items-center justify-content-center" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4 class="text-center">DATA PESANAN</h4>
    <hr>
        <table class="table ">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lokasi</th>
            <th scope="col">Tanggal Booking</th>
            <th scope="col">Nama</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Kota Asal</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($con, "SELECT * FROM pesanan") or die(mysqli_error($con));

            if (mysqli_num_rows($query) == 0) {
                echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
            }else {
                $no = 1;
                while($data = mysqli_fetch_assoc($query)){
                echo'
                    <tr>
                        <th scope="row">'.$no.'</th>
                        <td>'.$data['nama_lokasi'].'</td>
                        <td>'.$data['tanggal_booking'].'</td>
                        <td>'.$data['nama_depan'].' '.$data['nama_belakang'].'</td>
                        <td>'.$data['no_telp'].'</td>
                        <td>'.$data['kota_asal'].'</td>
                        <td>
                            <a href="./editPesanan.php?id='.$data['id'].'">
                                <i style="color: green" class="fa fa-edit"></i>
                            </a>
                            <a href="../process/deletePesananProcess.php?id='.$data['id'].'"
                                onClick="return confirm ( \'Yakin?\')">
                                <i style="color: red" class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>';
                $no++;
                }
            }
            ?>
            </tbody>
            </table>
        </div>

        </aside>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </script>
    </body>
</html>
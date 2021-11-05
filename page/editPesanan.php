<?php
if (isset($_GET['id'])) {
    include('../db.php');
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT* FROM pesanan WHERE id='$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
    include '../component/sidebar.php';
}

echo '
    <br><br><br><br>
    <div class="container p-4 align-items-center justify-content-center" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" > 
        <h4 class="text-center">EDIT PESANAN</h4>
        <hr>
        <form action="../process/editPesananProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lokasi</label>
                <input class="d-none" id="id" name="id" value="'.$id.'">
                <input class="form-control" id="nama_lokasi" name="nama_lokasi" aria-describedby="emailHelp" value="'.$data['nama_lokasi'].'">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Booking</label>
                <input type="date" class="form-control" id="tanggal_booking" name="tanggal_booking" aria-describedby="Masukkan Email" value="'.$data['tanggal_booking'].'">
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="rumah">Nama Depan</label>
                    <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Masukan Nama Depan" value="'.$data['nama_depan'].'">
                </div>
                <div class="col mb-3">
                    <label for="telp">Nama Belakang</label>
                    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" value="'.$data['nama_belakang'].'">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input type="number" class="form-control" id="no_telp" name="no_telp" aria-describedby="Masukkan Nomor Telepon" value="'.$data['no_telp'].'">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kota Asal</label>
                <input class="form-control" id="kota_asal" name="kota_asal" aria-describedby="Masukkan Kota Asal" value="'.$data['kota_asal'].'">
            </div>
            <br>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="edit">Update Pesanan</button>
            </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </body>
</html>
'
?>
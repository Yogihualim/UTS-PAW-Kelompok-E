<?php
    include '../component/sidebar.php';
?>
    <br><br><br><br>
    <div class="container p-4 align-items-center justify-content-center" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" > 
        <h4 class="text-center">TAMBAH PEMESANAN</h4>
        <hr>
        <form action="../process/pemesananProcess.php" method="post">
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">Nama Lokasi :</label>
                <input type="text" class="form-control" placeholder="Nama Lokasi" id="nama_lokasi" name="nama_lokasi" required>
            </div>
            <br>
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">Tanggal Booking :</label>
                <input type="date" class="form-control" placeholder="Tanggal Booking" id="tanggal_booking" name="tanggal_booking" required>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">Nama Depan :</label>
                    <input type="text" class="form-control" placeholder="Nama Depan" id="nama_depan" name="nama_depan" required>
                </div>
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">Nama Belakang :</label>
                    <input type="text" class="form-control" id="Nama Belakang" placeholder="Nama Belakang" id="nama_belakang" name="nama_belakang" required>
                </div>
            </div>
            <br>
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon :</label>
                <input type="number" pattern="[0-9]{12}" placeholder="08XXXXXXXXX" class="form-control" id="no_telp" name="no_telp" required>
            </div>
            <br>
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">Kota Asal :</label>
                <input type="text" class="form-control" id="kota_asal" placeholder="Kota Asal" name="kota_asal" required>
            </div>
            <br>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="pesan" style="background-color:#FFFFF;">PESAN</button>
            </div>
        </form>
    </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </body>
</html>
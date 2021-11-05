<?php
    if(isset($_POST['edit']))
    {
        include('../db.php');
        $id = $_POST['id'];
        $nama_lokasi = $_POST['nama_lokasi'];
        $tanggal_booking = $_POST['tanggal_booking'];
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $no_telp= $_POST['no_telp'];
        $kota_asal= $_POST['kota_asal'];

        $query = mysqli_query($con, "UPDATE pesanan SET nama_lokasi='$nama_lokasi', tanggal_booking='$tanggal_booking', nama_depan='$nama_depan', nama_belakang='$nama_belakang', no_telp='$no_telp', kota_asal='$kota_asal' WHERE id='$id' ") or die(mysqli_error($con));
        if($query)
        {
            echo 
            '<script>
            alert("Update Pesanan Berhasil!"); window.location = "../page/dataWisataPage.php"
            </script>';
        }
        else
        {
            echo 
            '<script>
            alert("Update Pesanan Gagal!"); window.location = "../page/editPesanan.php"
            </script>';
        }
    }
    else
    {
        echo 
        '<script>
        alert("Update Pesanan Gagal"); window.location = "../page/dataWisataPage.php"
        </script>';
    }
?>
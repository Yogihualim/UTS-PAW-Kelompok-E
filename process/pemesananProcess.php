<?php
   // Koneksikan DB dengan summon file db.php
   if(isset($_POST['pesan'])){
       include('../db.php');
    
       $nama_lokasi = $_POST['nama_lokasi'];
       $tanggal_booking = $_POST['tanggal_booking'];
       $nama_depan = $_POST['nama_depan'];
       $nama_belakang = $_POST['nama_belakang'];
       $no_telp= $_POST['no_telp'];
       $kota_asal= $_POST['kota_asal'];
    
       // Masukan DB pake query ini.
       $query = mysqli_query($con, "INSERT INTO pesanan (nama_lokasi, tanggal_booking, nama_depan, nama_belakang, no_telp, kota_asal) 
       VALUES('$nama_lokasi', '$tanggal_booking', '$nama_depan', '$nama_belakang', '$no_telp', '$kota_asal')")
       or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan, di-tangani oleh perintah “or die”!
    
       // ganti nama filenya sesuai dengan penamaan filemu
       if($query){
          echo
             '<script>
             alert("Pesanan Anda Sedang Di Proses!"); window.location = "../page/dataWisataPage.php" 
             </script>';
       // ganti nama filenya sesuai dengan penamaan filemu     
       }else{
          echo
             '<script>
             alert("Pesanan Anda Gagal, Silahkan Coba Lagi."); window.location = "../page/pemesanan.php"
             </script>';
       }
   }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
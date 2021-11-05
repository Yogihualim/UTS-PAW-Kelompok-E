<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di form ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];

        $query = mysqli_query($con,
            "INSERT INTO coba(username, password, name, email, alamat)
                VALUES
            ('$username', '$password', '$name', '$email', '$alamat')")
                or die(mysqli_error($con)); 
                // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo
                '<script>
                alert("Register Success"); window.location = "../page/loginPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Register Failed");
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
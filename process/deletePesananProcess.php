<?php
    if(isset($_GET['id']))
    {
        include('../db.php');
        $id = $_GET['id'];
        $query = mysqli_query($con, "DELETE FROM pesanan WHERE id = '$id'") or die(mysqli_error($con));
        if($query){
            echo 
                '<script>
                alert("Pesanan Berhasil Dihapus"); window.location = "../page/dataWisataPage.php"
                </script>';
            
        }else{
            echo
                '<script>
                alert("Pesanan Gagal Dihapus"); window.location = "../page/dataWisataPage.php"
                </script>';
            }
    }
?>
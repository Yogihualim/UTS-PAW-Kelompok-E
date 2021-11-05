<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM coba WHERE id='$id'") or die(mysqli_error($con));
        if($queryDelete){
            echo
            '<script>
            alert("Delete Success"); window.location = "../page/loginPage.php"
            </script>';
        }else{
        echo
            '<script>
            alert("Delete Failed"); window.location = "../page/dataAkunPage.php"
            </script>';
        }
}else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
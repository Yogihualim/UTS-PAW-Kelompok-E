<?php 
if (isset($_GET['id'])) {
    include('../db.php');
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT* FROM coba WHERE id='$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
    include '../component/sidebar.php';
}

echo '
    <br><br><br><br>
    <div class="container p-4 align-items-center justify-content-center" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" > 
        <h4 class="text-center">EDIT DATA AKUN</h4>
        <hr>
        <form action="../process/updateMahasiswa.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input class="d-none" id="id" name="id" value="'.$id.'">
                <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value="'.$data['name'].'">
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="rumah">Alamat</label>
                    <input type="text" class="form-control" id="rumah" name="alamat" placeholder="Masukan Alamat" value="'.$data['alamat'].'">
                </div>
                <div class="col mb-3">
                    <label for="telp">No. Telephone</label>
                    <input type="number" class="form-control" id="telp" name="hp" placeholder="No. Telephone" value="'.$data['no_telp'].'">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" id="email" name="email" aria-describedby="Masukkan Email" value="'.$data['email'].'">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input class="form-control" id="username" name="username" aria-describedby="Masukkan Username" value="'.$data['username'].'">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="update">Update Data Akun</button>
            </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </body>
</html>
'
?>
<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
    
    <title>Register Page</title>
 </head>
 <body>
    <img src="../atribut/background.jpg" style="width: 100%; position: fixed;">
    <div class="row" style="width: 100%; position: fixed; top: 0; ">
        <div class="col">
            <nav class="navbar navbar-light fixed-top" style="background-color: #ffffff;">
                <div class="container">
                    <a class="navbar-brand fw-bold" >Registration Page</a>
                    <a class="navbar-brand fw-bold justify-content-center" href="../index.php">Back</a>
                </div>
            </nav>
            <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
                <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;">
                    <div class="card-header fw-bold">Register</div>
                    <div class="card-body">
                        <form action="../process/registerProcess.php" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" id="name" name="name" aria-describedby="name" placeholder="Name">
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                                </div>
                                <div class="col mb-3">
                                    <label for="no_telp">No. Telephone</label>
                                    <input type="number" class="form-control" id="no_telp" name="no_telp" pattern="[0-9]{12}" placeholder="08XXXXXXXXX">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input class="form-control" id="username" name="username" aria-describedby="username" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>                          
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="register">Register</button>
                            </div>
                        </form>
                        <p class="mt-2 mb-0">Sudah punya akun ? <a href="./loginPage.php" class="text-primary">Login Disini!</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">

        </div>
    </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>

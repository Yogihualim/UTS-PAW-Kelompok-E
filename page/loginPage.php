<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrit
        y="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../style.css" rel="stylesheet">

        <title>Login Page</title>
    </head>
    <body>
        <img src="../atribut/background.jpg" style="width: 100%; position: fixed;">
        <div class="row" style="width: 100%; position: fixed; top: 0; ">
            <div class="col">
                <nav class="navbar navbar-light fixed-top" style="background-color: #ffffff;">
                    <div class="container">
                        <a class="navbar-brand fw-bold" >Login Page</a>
                        <a class="navbar-brand fw-bold justify-content-center" href="../index.php">Back</a>
                    </div>
                </nav>
                <?php
                    
                    //jika sudah login maka akan dialihkan ke home
                    if (!empty($_SESSION['login'])) {
                            header("Location:index.php");
                    }
                    if (isset($_POST['login'])) {
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        //cek user terdaftar dan aktif
                        $sql_cek=mysqli_query($db,"SELECT * FROM coba WHERE username='".$username."' AND password='".$password."' AND aktif='1'") or die(mysqli_error($db));
                        $r_cek=mysqli_fetch_array($sql_cek);
                        $jml_data=mysqli_num_rows($sql_cek);
                        if ($jml_data>0) {
                            //buat session login dan redirect ke halaman utama
                            $_SESSION['login']=md5($r_cek['username']);
                            $_SESSION['username']=$r_cek['username'];
                            $_SESSION['name']=$r_cek['name'];
                            header("Location:dashboardPage.php");
                        }else{
                            //data tidak di temukan
                            echo '<div class="alert alert-warning">
                                Username dan Password anda salah!
                                </div>';
                        }
                    }
                ?>
                <div class="container min-vh-100 d-flex align-items-center justify-content-center">
                    <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                        <div class="card-header fw-bold text-center">Login</div>
                        <div class="card-body">
                            <form action="../process/loginProcess.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input class="form-control" id="username" name="username" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="login">Login</button>
                                </div>
                            </form>
                            <p class="mt-2 mb-0">Belum punya akun? <a href="./registerPage.php" class="textprimary">Klik Disini!</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </body>
</html>
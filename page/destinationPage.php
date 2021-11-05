<?php
    include '../component/sidebar.php'
?>
    <br><br><br><br>
    <div class="container p-4 align-items-center justify-content-center" style="background-color: #FFFFFF; border-top: 10px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 class="text-center">DESTINASI WISATA YOGYAKARTA</h4>
        <hr>
        <div>
            <a class="btn btn-primary" href="./pemesanan.php">Booking Wisata</a>
        </div>
        <br>
            <div class="card text-center">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                    <?php
                        $wisata = mysqli_query ($con, "SELECT * FROM wisata WHERE id_wisata");
                        while($hasil = mysqli_fetch_array($wisata)) {
                    ?>
                        <div class="card m-3" style="width: 15rem;">
                            <img class="card-imgtop" src="gambarWisata/<?php echo $hasil['gambar']; ?>" width="fit-content" alt="Card image cap"/>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ($hasil['id_wisata']); ?></h5>
                                <h5 class="card-title"><?php echo ($hasil['nama_wisata']); ?></h5>
                                <p class="cardtext"><?php echo ($hasil['alamat']); ?></p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Read More
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo ($hasil['nama_wisata']); ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        <div class="modal-body">
                                            <img src="gambarWisata/<?php echo $hasil['gambar']; ?>" width="300px"/>
                                            <br><br>
                                            <p><?php echo ($hasil['artikel']); ?></p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                
                </div>
            </div>
    </div>

    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
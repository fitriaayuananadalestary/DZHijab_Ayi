

<section class="py-5">
    
    <div class="container px-4 px-lg-5 mt-5">

        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content">
        <?php $i=1; ?>
<?php foreach ($hijab as $us):  ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top"src="<?= base_url('template/assets/img/hijab/') . $us['gambar']; ?>" style="width: 270px; height: 350px; " alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?= $us['nama'] ?></h5>
                            <!-- Product price-->
                            <span>Rp.</span><?= $us['harga'] ?> <br>
                            <span>Jenis: <?= $us['jenis']?> <br>
                            <span>Warna: <?= $us['warna']?> <br>
                            <span>Stok: <?= $us['stok']?> <br>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"  href="<?= base_url('Utama/keranjang/') . $us['id']; ?>">Tambah ke Keranjang</a></div><br>
        
                    </div>
                </div>
            </div>
            <?php endforeach ?>
          
                </div>
            </div>

        </div>
    </div>

</section>

</div>
</div>
</div>




 

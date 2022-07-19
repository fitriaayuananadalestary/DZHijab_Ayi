
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=base_url()?>/template2/css/styles.css" rel="stylesheet" />
    </head>
    
    <body>
        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">DZ_Hijub Store Pekanbaru </a>
                <a href = "https://www.instagram.com/dz_hijup/?hl=id" > Info Lengkap </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url('Utama/') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Utama/profil') ?>">Profil</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Utama/pembelian') ?>">Histori</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="<?= base_url('Utama') ?>">Popular Items</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Utama/segiempat') ?>">Segi Empat</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Utama/pashmina') ?>">Pashmina</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Utama/dress') ?>">Home Dress</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Utama/motif') ?>">Segi Empat Motif</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Utama/manset') ?>">Manset</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Utama/bergo') ?>">Bergo</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Utama/inner') ?>">Inner HIjab</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout') ?>">Logout</a></li>
                    </ul>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="<?= base_url('Utama/detail') ?>" >
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
</a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg py-5" style="background-color: #99994d;">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Halo, <?= $user['nama']; ?></h1>
                    <p class="lead fw-normal text-white-50 mb-0">Selamat Datang di Hijub Store</p>
                </div>
            </div>
        </header>
        <!-- Section-->
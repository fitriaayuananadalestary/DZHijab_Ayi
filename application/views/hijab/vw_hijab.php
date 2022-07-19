</div>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $judul; ?></h1>
        </div>
        <?= $this->session->flashdata('message') ?>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div style="margin: 10px;">
                    <a href="<?= base_url() ?>Hijab/tambah" class="btn btn-primary">Tambah
                        Barang</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Stok</th>
                                <th>Warna</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($hijab as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['jenis']; ?></td>
                                <td><?= $us['stok']; ?></td>
                                <td><?= $us['warna']; ?></td>
                                <td><?= $us['harga']; ?></td>
                                <td><img src="<?= base_url('template/assets/img/hijab/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                <td>
                                    <a href="<?= base_url('hijab/edit/') . $us['id'];?>" class="badge badge-primary">Edit</a>
                                    <a href="<?= base_url('hijab/hapus/') . $us['id'];?>" class="badge badge-danger">Hapus</a>
                                    
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
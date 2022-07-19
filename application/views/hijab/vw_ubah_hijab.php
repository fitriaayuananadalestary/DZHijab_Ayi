</div>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $judul; ?></h1>
        </div>

        <div class="row justify-content">
            <div class="col-md-12 ">
                <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $hijab['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama hijab</label>
                            <input name="nama" value="<?= $hijab['nama']; ?>" type="text" class="form-control" id="nama" placeholder="Nama hijab">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis">jenis</label>
                            <input name="jenis" value="<?= $hijab['jenis']; ?>" type="text" class="form-control" id="jenis" placeholder="jenis">
                            <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="warna">warna</label>
                            <input value="<?= $hijab['warna']; ?>" name="warna" type="text" class="form-control" id="warna" placeholder="warna">
                            <?= form_error('warna', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stok">stok</label>
                            <input value="<?= $hijab['stok']; ?>" name="stok" type="text" class="form-control" id="stok" placeholder="stok">
                            <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input value="<?= $hijab['harga']; ?>" name="harga" type="text" class="form-control" id="harga" placeholder="harga">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                       
                        <div class="form-group">
                            <img src="<?= base_url('template/assets/img/hijab/') . $hijab['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <a href="<?= base_url('hijab') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah hijab</button>
                    </form>
                </div>

                </div>
            </div>
    </section>
</div>
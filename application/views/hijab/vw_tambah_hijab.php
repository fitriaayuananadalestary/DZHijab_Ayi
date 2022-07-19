</div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
          <h1><?php echo $judul; ?></h1>
          </div>

          <div class="row justify-content">
        <div class="col-md-12 ">
        <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Masukkan Nama Barang">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input name="jenis" type="text" value="<?= set_value('jenis'); ?>" class="form-control" id="jenis" placeholder="Masukkan jenis">
                            <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="warna">warna</label>
                            <input name="warna" type="text" value="<?= set_value('warna'); ?>" class="form-control" id="warna" placeholder="Masukkan warna">
                            <?= form_error('warna', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input name="stok" type="text" value="<?= set_value('stok'); ?>" class="form-control" id="stok" placeholder="Jumlah Stok">

                            <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input name="harga" type="text" class="form-control" value="<?= set_value('harga'); ?>" id="harga" placeholder="Inputkan Harga">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                        <label for="harga">Gambar</label>
                            <div class="custom-file">

                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            </div>
                        <br>
                        <button type="submit" name="tambah" class="btn btn-dark float-right">Tambah Hijab</button>
                    </form>
                </div>
            </div>
        </div>
        </section>
      </div>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Tambah Data</h2>
            <!-- <?//= $valid->listErrors(); ?> -->
            <form action="/buku/simpan" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Judul</label>
                    <input type="text" name="judul"
                        class="form-control <?= ($valid->hasError('judul')) ? 'is-invalid' : ''; ?>"
                        id="formGroupExampleInput" placeholder="" autofocus value="<?= old('judul'); ?>">
                    <div class="invalid-feedback">
                        <?= $valid->getError('judul'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" id="formGroupExampleInput2" placeholder=""
                        value="<?= old('penulis'); ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="formGroupExampleInput2" placeholder=""
                        value="<?= old('penerbit'); ?>">
                </div>
                <div class="mb-3">
                    <label for="sampul" class="form-label">Pilihh Gambar Sampul</label>
                    <input class="form-control <?= ($valid->hasError('sampul')) ? 'is-invalid' : ''; ?>" name="sampul"
                        type="file" id="sampul">
                    <div class="invalid-feedback">
                        <?= $valid->getError('sampul'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
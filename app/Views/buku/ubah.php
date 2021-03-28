<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Data</h2>
            <!-- <?//= $valid->listErrors(); ?> -->
            <form action="/buku/update/<?= $buku['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $buku['slug']; ?>">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Judul</label>
                    <input type="text" name="judul"
                        class="form-control <?= ($valid->hasError('judul')) ? 'is-invalid' : ''; ?>"
                        id="formGroupExampleInput" placeholder="" autofocus
                        value="<?= (old('judul') ? old('judul' ) : $buku['judul']) ?>">
                    <div class="invalid-feedback">
                        <?= $valid->getError('judul'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" id="formGroupExampleInput2" placeholder=""
                        value="<?= (old('penulis') ? old('penulis' ) : $buku['penulis']) ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="formGroupExampleInput2" placeholder=""
                        value="<?= (old('penerbit') ? old('penerbit' ) : $buku['penerbit']) ?>">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Sampul</label>
                    <input class="form-control" name="sampul" type="file" id="formFile"
                        value="<?= (old('sampul') ? old('sampul' ) : $buku['sampul']) ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
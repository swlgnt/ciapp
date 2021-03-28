<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h1>Buku</h1>
    <a href="/buku/tambah" class="btn btn-primary mb-3">Tambah Data</a>
    <?php if(session()->getFlashData('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashData('pesan'); ?>
    </div>
    <?php endif; ?>
    <?php if(session()->getFlashData('pesan2')) : ?>
    <div class="alert alert-warning" role="alert">
        <?= session()->getFlashData('pesan2'); ?>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    <?php foreach ($buku as $bk) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><img src="/img/<?= $bk['sampul']; ?>" alt="" class="sampul"></td>
                        <td><?= $bk['judul']; ?></td>
                        <td><a href="/buku/<?= $bk['slug']; ?>" class="btn btn-success">Lihat detail buku</a>
                        </td>
                    </tr>
                    <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
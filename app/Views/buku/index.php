<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h1>Buku</h1>
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
                    <?php foreach ($buku as $bk) : ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/img/<?= $bk['sampul']; ?>" alt="" class="sampul"></td>
                        <td><?= $bk['judul']; ?></td>
                        <td><a href="" class="btn btn-success">Lihat detail buku</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
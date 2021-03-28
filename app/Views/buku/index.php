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
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/img/sampul.jpeg" alt="" class="sampul"></td>
                        <td>Buku Saku</td>
                        <td><a href="" class="btn btn-success">Lihat detail buku</a></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
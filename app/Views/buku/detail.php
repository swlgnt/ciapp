<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h1>Detail <?= $buku['judul']; ?></h1>
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <img src="/img/<?= $buku['sampul']; ?>" alt="..." style="width: 200px;">
                <div class="card-body">
                    <h5 class="card-title"><?= $buku['judul']; ?></h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste accusamus
                        assumenda odio praesentium ullam explicabo. Quia doloremque dolorem molestiae dolores dolorum?
                        Officia aut molestiae vel rem ex odit sunt accusantium?</p>
                    <p class="card-text"><b>Penerbit:</b> <?= $buku['penerbit']; ?></p>
                    <p class="card-text"><small class="text-muted">Ditulis oleh: <?= $buku['penulis']; ?></small></p>
                </div>
                <div class="card-footer">
                    <a href="/buku/ubah/<?= $buku['slug']; ?>" class="btn btn-warning">Edit</a>
                    <form action="/buku/<?= $buku['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Apakah anda yakin data tersebut dihapus?')">Hapus</button>
                    </form>
                    <!-- <a href="/buku/hapus/<?= $buku['id']; ?>" class="btn btn-danger">Hapus</a> -->
                </div>
                <div class="card-footer">
                    <a href="/buku" class="btn btn-primary">Kembali Ke Daftar Buku</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
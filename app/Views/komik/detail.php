<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">detail komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        
                        <img src="/img/<?= $komik['sampul']; ?>" class="card-img" alt="...">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text"><b>penulis : </b> <?= $komik['penulis']; ?></p>
                            <p class="card-text"><small class="text-body-secondary"><b>penerbit : </b> <?= $komik['penerbit']; ?></small></p>

                            <a href="" class="btn btn-warning">edit</a>
                            <a href="" class="btn btn-danger">delete</a>
                            <br><br>
                            <a href="/komik">kembali ke daftar komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
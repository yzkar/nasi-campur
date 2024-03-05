<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <?php foreach ($surat_rekomendasis as $surat_rekomendasi) : ?>
        <div class="row">
            <div class="col-md-12 mb-2 card">
                <div class="card-body">
                    <h5 class="h5"><a href="/surat_rekomendasi/<?= $surat_rekomendasi['slug'] ?>"><?= $surat_rekomendasi['kop'] ?></a></h5>
                    <p><?= substr($surat_rekomendasi['isi'], 0, 120) ?></p>
                </div>
            </div>
            
        </div>

    <?php endforeach ?>
</div>


<?= $this->endSection() ?>
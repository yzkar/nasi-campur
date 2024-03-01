<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>
<div align="center">
    <h2 class="h2"><?= $surat_rekomendasi['kop'] ?></h2>
</div>
<div align="center"><?= $surat_rekomendasi['no'] ?></div>
<div>
    <h>N</h><?= $surat_rekomendasi['nama1'] ?>
</div>
<div>
    <h>P</h><?= $surat_rekomendasi['jabatan'] ?>
</div>
<div>
    <h>L</h><?= $surat_rekomendasi['nip'] ?>
</div>
<div>
    <h>L</h><?= $surat_rekomendasi['e-mail'] ?>
</div>
<div>
    <h>L</h><?= $surat_rekomendasi['telp'] ?>
</div>
<div>
    <h>L</h><?= $surat_rekomendasi['nama2'] ?>
</div>
<div>
    <h>L</h><?= $surat_rekomendasi['nim'] ?>
</div>
<div>
    <h>L</h><?= $surat_rekomendasi['jurusan'] ?>
</div>
<div>
    <h>L</h><?= $surat_rekomendasi['fakultas'] ?>
</div>
<div>
    <h>L</h><?= $surat_rekomendasi['semester'] ?>
</div>
<div>
    <h>L</h><?= $surat_rekomendasi['ipk'] ?>
</div>
<div>
    <h>L</h><?= $surat_rekomendasi['sks'] ?>
</div>
<br>
<div><?= $surat_rekomendasi['isi'] ?></div>
<div style="position: relative; top: 50x; left: 350px"><?= $surat_rekomendasi['tanggal'] ?></div>
<div style="position: relative; top: 50x; left: 350px"><?= $surat_rekomendasi['nama pengirim'] ?></div>

<?= $this->endSection() ?>
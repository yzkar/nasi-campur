<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>
<div align="center">
    <h2 class="h2"><?= $surkom['title'] ?></h2>
</div>
<div align="center"><?= $surkom['no'] ?></div>
<div>
    <h>N</h><?= $surkom['nama1'] ?>
</div>
<div>
    <h>P</h><?= $surkom['jabatan'] ?>
</div>
<div>
    <h>L</h><?= $surkom['nip'] ?>
</div>
<div>
    <h>L</h><?= $surkom['e-mail'] ?>
</div>
<div>
    <h>L</h><?= $surkom['telp'] ?>
</div>
<div>
    <h>L</h><?= $surkom['nama2'] ?>
</div>
<div>
    <h>L</h><?= $surkom['nim'] ?>
</div>
<div>
    <h>L</h><?= $surkom['jurusan'] ?>
</div>
<div>
    <h>L</h><?= $surkom['fakultas'] ?>
</div>
<div>
    <h>L</h><?= $surkom['semester'] ?>
</div>
<div>
    <h>L</h><?= $surkom['ipk'] ?>
</div>
<div>
    <h>L</h><?= $surkom['sks'] ?>
</div>
<br>
<div><?= $surkom['content'] ?></div>
<div style="position: relative; top: 50x; left: 350px"><?= $surkom['tanggal'] ?></div>
<div style="position: relative; top: 50x; left: 350px"><?= $surkom['nama pengirim'] ?></div>

<?= $this->endSection() ?>
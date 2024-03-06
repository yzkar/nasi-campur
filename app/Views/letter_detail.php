<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>
<div align="center">
    <h2 class="h2"><?= $letter['title'] ?></h2>
</div>
<div align="center"><?= $letter['alamat'] ?></div>
<div>
    <hr color="black", size="5px">
    <p></p><br>
    <h>No : </h><?= $letter['no'] ?>
</div>
<div>
    <h>Perihal : </h><?= $letter['perihal'] ?>
</div>
<div>
    <h>Lampiran : </h><?= $letter['lampiran'] ?>
</div>
<br>
<div><?= $letter['content'] ?></div>
<p></p><br>
<div style="position: relative; top: 50x; left: 350px"><?= $letter['tanggal'] ?></div>
<p></p><br><br>
<div style="position: relative; top: 50x; left: 350px"><?= $letter['pengirim'] ?></div>
<div style="position: relative; top: 50x; left: 350px">
    <h>NIP. </h><?= $letter['nip'] ?>
</div>


<?= $this->endSection() ?>
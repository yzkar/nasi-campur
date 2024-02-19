<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>
<h2 class="h2"><?= $letter['title'] ?></h2>
<div><?= $letter['alamat'] ?></div>
<div><?= $letter['no'] ?></div>
<div><?= $letter['perihal'] ?></div>
<div><?= $letter['lampiran'] ?></div>
<div><?= $letter['content'] ?></div>
<div><?= $letter['tanggal'] ?></div>
<div><?= $letter['pengirim'] ?></div>

<?= $this->endSection() ?>
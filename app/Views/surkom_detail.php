<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>
<div align="center">
    <h2 class="h2"><?= $surkom['title'] ?></h2>
</div>
<hr color="BLACK" , size="5px">
<div align="center"><b>SURAT REKOMENDASI</b></div>
<div align="center">
    <h>No:</h><?= $surkom['no'] ?>
</div>
<p>------------------------------------------------------------------------------------------------------------------</p>
<h>Yang bertanda tangan di bawah ini</h>
<div>
    <h>Nama : </h><?= $surkom['nama1'] ?>
</div>
<div>
    <h>Jabatan : </h><?= $surkom['jabatan'] ?>
</div>
<div>
    <h>NIP : </h><?= $surkom['nip'] ?>
</div>
<div>
    <h>E-mail : </h><?= $surkom['e-mail'] ?>
</div>
<div>
    <h>No Telp : </h><?= $surkom['telp'] ?>
</div>
<br>
<h>Menyetujui Nama mahasiswa berikut</h>
<div>
    <h>Nama : </h><?= $surkom['nama2'] ?>
</div>
<div>
    <h>NIM : </h><?= $surkom['nim'] ?>
</div>
<div>
    <h>Program Studi/ Jurusan : </h><?= $surkom['jurusan'] ?>
</div>
<div>
    <h>Fakultas : </h><?= $surkom['fakultas'] ?>
</div>
<div>
    <h>Semester : </h><?= $surkom['semester'] ?>
</div>
<div>
    <h>IPK : </h><?= $surkom['ipk'] ?>
</div>
<div>
    <h>Jumlah SKS yang sudah ditempuh dan lulus : </h><?= $surkom['sks'] ?>
</div>
<br>
<div><?= $surkom['content'] ?></div>
<br>
<div style="position: relative; top: 50x; left: 490px"><?= $surkom['tanggal'] ?></div>
<p></p><br><br>
<div style="position: relative; top: 50x; left: 490px">
    <H>(</H><?= $surkom['nama_pengirim'] ?><h>)</h>
</div>

<?= $this->endSection() ?>
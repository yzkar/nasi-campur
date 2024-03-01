<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <div class="form-group">
        <label for="title">Kop surat</label>
        <input type="text" name="kop" class="form-control" placeholder="kop surat" required>
    </div>
    <div class="form-group">
        <label for="title">no surat</label>
        <input type="text" name="no" class="form-control" placeholder="no surat" required>
    </div>
    <div class="form-group">
        <label for="title">nama yang bertanda tangan</label>
        <input type="text" name="nama1" class="form-control" placeholder="nama yang bertanda tangan" required>
    </div>
    <div class="form-group">
        <label for="title">jabatan</label>
        <input type="text" name="jabatan" class="form-control" placeholder="jabatan" required>
    </div>
    <div class="form-group">
        <label for="title">nip</label>
        <input type="text" name="nip" class="form-control" placeholder="nip" required>
    </div>
    <div class="form-group">
        <label for="title">e-mail</label>
        <input type="text" name="e-mail" class="form-control" placeholder="e-mail" required>
    </div>
    <div class="form-group">
        <label for="title">telp</label>
        <input type="text" name="telp" class="form-control" placeholder="telp" required>
    </div>
    <div class="form-group">
        <label for="title">nama yang di tuju</label>
        <input type="text" name="nama2" class="form-control" placeholder="nama yang di tuju" required>
    </div>
    <div class="form-group">
        <label for="title">nim</label>
        <input type="text" name="nim" class="form-control" placeholder="nim" required>
    </div>
    <div class="form-group">
        <label for="title">jurusan</label>
        <input type="text" name="jurusan" class="form-control" placeholder="jurusan" required>
    </div>
    <div class="form-group">
        <label for="title">fakultas</label>
        <input type="text" name="fakultas" class="form-control" placeholder="fakultas" required>
    </div>
    <div class="form-group">
        <label for="title">semester</label>
        <input type="text" name="semester" class="form-control" placeholder="semester" required>
    </div>
    <div class="form-group">
        <label for="title">ipk</label>
        <input type="text" name="ipk" class="form-control" placeholder="ipk" required>
    </div>
    <div class="form-group">
        <label for="title">sks</label>
        <input type="text" name="sks" class="form-control" placeholder="sks" required>
    </div>
    <div class="form-group">
        <label for="title">Isi surat</label>
        <textarea name="isi" class="form-control" cols="30" rows="10" placeholder="isi"></textarea>
    </div>
    <div class="form-group">
        <label for="title">Tanggal surat di buat</label>
        <input type="text" name="tanggal" class="form-control" placeholder="tanggal" required>
    </div>
    <div class="form-group">
        <label for="title">Nama yang bertanda tangan</label>
        <input type="text" name="nama pengirim" class="form-control" placeholder="nama pengirim" required>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
        <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
    </div>
</form>


<?= $this->endSection() ?>
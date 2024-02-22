<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <div class="form-group">
        <label for="title">Kop surat</label>
        <input type="text" name="title" class="form-control" placeholder="letter title" required>
    </div>
    <div class="form-group">
        <label for="title">Alamat perusahaan</label>
        <input type="text" name="alamat" class="form-control" placeholder="alamat" required>
    </div>
    <div class="form-group">
        <label for="title">No surat</label>
        <input type="text" name="no" class="form-control" placeholder="no" required>
    </div>
    <div class="form-group">
        <label for="title">Perihal surat</label>
        <input type="text" name="perihal" class="form-control" placeholder="perihal" required>
    </div>
    <div class="form-group">
        <label for="title">Lampiran</label>
        <input type="text" name="lampiran" class="form-control" placeholder="lampiran" required>
    </div>
    <div class="form-group">
        <label for="title">Isi surat</label>
        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="isi"></textarea>
    </div>
    <div class="form-group">
        <label for="title">Tanggal surat di buat</label>
        <input type="text" name="tanggal" class="form-control" placeholder="tanggal" required>
    </div>
    <div class="form-group">
        <label for="title">Nama koordinator prodi</label>
        <input type="text" name="pengirim" class="form-control" placeholder="pengirim" required>
    </div>
    <div class="form-group">
        <label for="title">NIP</label>
        <input type="text" name="nip" class="form-control" placeholder="NIP" required>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
        <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
    </div>
</form>


<?= $this->endSection() ?>
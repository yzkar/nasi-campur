<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($letteres as $letter) : ?>
      <tr>
        <td><?= $letter['id'] ?></td>
        <td>
          <strong><?= $letter['title'] ?></strong><br>
        <td>
          <?php if ($letter['status'] === 'published') : ?>
            <small class="text-success"><?= $letter['status'] ?></small>
        </td>
      <?php else : ?>
        <small class="text-muted"><?= $letter['status'] ?></small>
      <?php endif ?>
      </td>
      <td>
        <a href="<?= base_url('admin/letter/' . $letter['id'] . '/preview') ?>" class="btn btn-sm btn-outline-secondary" target="_blank">preview</a>
        <a href="<?= base_url('admin/letter/' . $letter['id'] . '/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
        <a href="#" data-href="<?= base_url('admin/letter/' . $letter['id'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
      </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
  function confirmToDelete(el) {
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
  }
</script>


<?= $this->endSection() ?>
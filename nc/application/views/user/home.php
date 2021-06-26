
<!-- My Ajax -->
<?php include './assets/js/ajax_user.php'; ?>

<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-2">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-user"><i class="glyphicon glyphicon-plus-sign"></i> Add New</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="10px">No</th>
                <th width="50"></th>
                <th>Username</th>
                <th>Email</th>
                <th>Nama</th>
            </tr>
        </thead>
      <tbody id="data-user">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_user; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataUser', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
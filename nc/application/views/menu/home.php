<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-2" style="padding: 0;">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-menu"><i class="glyphicon glyphicon-plus-sign"></i> Add New</button>
    </div>
    <div class="col-md-3">
        <!-- <a href="<?php echo base_url('Menu/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a> -->
    </div>
    <div class="col-md-3">
        <!-- <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-menu"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button> -->
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="10px">No</th>
                <th width="50"></th>
                <th>Nama Menu</th>
                <th>Link</th>
                <th width="30">Icon</th>
                <th>Aktif</th>
                <th>Parent</th>
            </tr>
        </thead>
      <tbody id="data-menu">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_menu; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataMenu', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>

<script>
$(document).ready(function(){
    $('body').tooltip({
          selector: "[data-tooltip=tooltip]",
          container: "body"
      });
});

</script>

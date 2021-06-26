<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Add New Data Menu</h3>

  <form id="form-tambah-menu" method="POST">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-list-alt"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama Menu" name="name" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-link"></i>
      </span>
      <input type="text" class="form-control" placeholder="Link" name="link" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-picture"></i>
      </span>
      <input type="text" class="form-control" placeholder="Icon" name="icon" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-thumbs-up"></i>
      </span>
      <?php echo form_dropdown('is_active',array('1'=>'AKTIF','0'=>'TIDAK AKTIF'),'',"class='form-control select2'") ?>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-tasks"></i>
      </span>
      <select name="is_parent" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
        <option value="0">YA</option>
        <?php
        foreach ($dataMenu as $parent) {
          ?>
          <option value="<?php echo $parent->id; ?>">
            <?php echo $parent->name; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <div class="col-md-4 pull-right">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Save</button>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript">
$(function () {
    $(".select2").select2();
    
});
</script>
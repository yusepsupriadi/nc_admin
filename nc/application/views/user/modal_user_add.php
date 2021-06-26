<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Add New User</h3>

  <form id="form-tambah-user" method="POST">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Full Name" name="name" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-envelope"></i>
      </span>
      <input name="email" type="email" class="form-control" placeholder="Email" name="email" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-lock"></i>
      </span>
      <input type="password" class="form-control" placeholder="Password" name="password" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-log-in"></i>
      </span>
      <input type="password" class="form-control" placeholder="Retype password" name="passconf"  aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-university"></i>
      </span>
      <select name="type_shipment" class="form-control select2" title="Type Shipment"  aria-describedby="sizing-addon2" style="width: 100%">
          <option></option>
          <option value="0">SEA/AIR</option>
          <?php
          foreach ($dataShipmentType as $shipment) {
            ?>
            <option value="<?php echo $shipment->id; ?>">
              <?php echo $shipment->text1; ?>
            </option>
            <?php
          }
          ?>
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-university"></i>
      </span>
      <select name="branch" class="form-control select2" title="Branch"  aria-describedby="sizing-addon2" style="width: 100%">
       <option></option>
        <?php
        foreach ($dataBranch as $branch) {
          ?>
          <option value="<?php echo $branch->id; ?>">
            <?php echo $branch->text1; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-users"></i>
      </span>
      <select name="group_id" class="form-control select2" title="User Group"  aria-describedby="sizing-addon2" style="width: 100%">
        <option></option>
        <?php
        foreach ($dataGroup as $group) {
          ?>
          <option value="<?php echo $group->id; ?>">
            <?php echo $group->name; ?>
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

<script>
$(function () { 
    $(".select2").select2({
        placeholder: 'Choose One',
        allowClear: true
    });

});
</script>
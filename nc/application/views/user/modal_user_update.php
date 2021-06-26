<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update User</h3>

  <form id="form-update-user" method="POST">
  <input type="hidden" name="id" value="<?php echo $dataUser->id; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Full Name" name="name" aria-describedby="sizing-addon2" value="<?php echo  $dataUser->name; ?>">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="sizing-addon2"  value="<?php echo  $dataUser->username; ?>">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-envelope"></i>
      </span>
      <input name="email" type="email" class="form-control" placeholder="Email" name="email" aria-describedby="sizing-addon2"  value="<?php echo  $dataUser->email; ?>">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-university"></i>
      </span>
      <select name="type_shipment" class="form-control select2" title="Type Shipment"  aria-describedby="sizing-addon2" style="width: 100%">
          <option></option>
          <option value="0" <?php if($dataUser->type_shipment == 0){echo "selected='selected'";} ?> >SEA/AIR</option>
          <?php
          foreach ($dataShipmentType as $shipment) {
            ?>
            <option value="<?php echo $shipment->id; ?>"  <?php if($shipment->id == $dataUser->type_shipment){echo "selected='selected'";} ?> >
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
      <select name="branch" class="form-control select2" title="Branch" aria-describedby="sizing-addon2" style="width: 100%">
        <option></option>
        <?php
        foreach ($dataBranch as $branch) {
          ?>
          <option value="<?php echo $branch->id; ?>" <?php if($branch->id == $dataUser->branch_id){echo "selected='selected'";} ?> >
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
      <select name="group_id" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
        <?php
        foreach ($dataGroup as $group) {
          ?>
          <option value="<?php echo $group->id; ?>"  <?php if($group->id == $dataUser->group_id){echo "selected='selected'";} ?> >
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
<?php include './assets/js/ajax_order.php'; ?>

<style>
.select2-container {
  width: 100% !important;
  border: 1px solid #ccc;
}
legend{
  margin-bottom:10px !important;
}
.form-group{
  margin-bottom : 5px !important;
}
.modal-body{
  padding : 0 !important;
}
  </style>
<div class="col-md-offset-1 col-md-12 col-md-offset-1 well">
<div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
    <u>
        <h3 class="modal-title" style="display:block; text-align:center;">Add New Order</h3>
    </u>
<div class="modal-body">
  <form id="form-add-order" method="POST">
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <label for="inputID">Booking No<span style="color:red">*</span></label>
          <select name="booking" id="changeBook" class="form-control select2 w-auto" aria-describedby="sizing-addon2" style="width:auto;">
            <option value="" disabled selected hidden>Choose Booking No</option>
            <?php
            foreach ($getAllBookingList as $booking) {
              ?>
              <option value="<?php echo $booking->BookingId; ?>">
                <?php echo $booking->BookingId; ?>
              </option>
              <?php
            }
            ?>
          </select>
        </div>
      </div>
    </div>
    
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <legend class="w-auto">Collection Details</legend>
            <div class="col-md-4">
              <label for="inputID">Name<span style="color:red">*</span></label>
              <input type="text" class="form-control" placeholder="Collection Name" id="coll_name" name="coll_name" >
            </div>
            <div class="col-md-4">
              <label for="inputID">Address<span style="color:red">*</span></label>
              <textarea class="form-control" placeholder="Collection Address" id="coll_address" name="coll_address"></textarea>
            </div>
            <div class="col-md-4">
              <label for="inputID">Phone Number<span style="color:red">*</span></label>
              <input type="text" class="form-control" placeholder="Collection Phone Number" id="coll_phone" name="coll_phone">
            </div>
        </div>
      </div> 
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <legend class="w-auto">Delivery Details</legend>
            <div class="col-md-4">
              <label for="inputID">Name<span style="color:red">*</span></label>
              <input type="text" class="form-control" placeholder="Delivery Name" id="deli_name" name="deli_name">
            </div>
            <div class="col-md-4">
              <label for="inputID">Address<span style="color:red">*</span></label>
              <textarea class="form-control" placeholder="Delivery Address" id="deli_address" name="deli_address"></textarea>
            </div>
            <div class="col-md-4">
              <label for="inputID">Phone Number<span style="color:red">*</span></label>
              <input type="text" class="form-control" placeholder="Delivery Phone Number" id="deli_phone" name="deli_phone">
            </div>
        </div>
      </div> 
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <legend class="w-auto">Invoice Declaration</legend>
            <div class="col-md-4">
              <label for="item">Item Description<span style="color:red">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Items Description" id="inv_items" name="inv_items">
            </div>
            <div class="col-md-4">
              <label for="item">No. Of Pieces<span style="color:red">*</span></label>
              <input type="text" class="form-control" placeholder="Enter No. Of Pieces" id="inv_pieces" name="inv_pieces">
            </div>
            <div class="col-md-4">
              <label for="item">Value<span style="color:red">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Value" id="inv_value" name="inv_value">
            </div>
        </div>
      </div> 
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6">
            <label for="inputID">Total Packages<span style="color:red">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Total Packages" id="inv_tot_packages" name="inv_tot_packages" aria-describedby="sizing-addon2"> 
          </div>
          <div class="col-md-6 ml-auto">
            <label for="inputID">Weight (kg)<span style="color:red">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Weight (kg)" id="inv_weigth" name="inv_weigth" aria-describedby="sizing-addon2">
          </div>
        </div> 
      </div> 
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6">
            <label for="Email">Email<span style="color:red">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Email" id="inv_email" name="inv_email" aria-describedby="sizing-addon2">
          </div>
          <div class="col-md-6 ml-auto">
            <label for="Amount">Amount Payable<span style="color:red">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Amount Payable" id="inv_amount" name="inv_amount" aria-describedby="sizing-addon2">
          </div>
        </div> 
      </div> 
    </div>
    
    <div class="modal-footer">
        <!-- <button type="submit" class="btn btn-success" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Submit</button>
      </div>         
  </form>
</div>
</div>

<script type="text/javascript">
$(function () {
    $(".select2").select2();
});
</script>
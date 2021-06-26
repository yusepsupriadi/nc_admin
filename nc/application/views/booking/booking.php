<!-- My Ajax -->
<?php include './assets/js/ajax_booking.php'; ?>
<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="fa fa-briefcase"></i>
                    <h3 class="box-title">Booking List<small> </small></h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="box-header">
                        <div class="col-md-2" style="padding: 0;">
                            <button class="btn btn-success" data-toggle="modal" data-target="#tambah-custom-modul"><i
                                    class="glyphicon glyphicon-plus-sign"></i>&nbsp;Add Booking</button>
                        </div>
                        <div class="col-md-3  pull-right"></div>
                        <div class="col-md-3  pull-right"></div>
                    </div>
                    <div class="box-body">
                        <table id="list-data" class="table table-bordered table-striped table-sm" cellspacing="0"
  width="100%">
                            <thead>
                                <tr role="row">
                                    <th rowspan="2" style="text-align: center; vertical-align: middle; width: 15px;"
                                        colspan="1" width="10px">No</th>
                                    <th rowspan="2" style="text-align: center; vertical-align: middle; width: 15px;"
                                        colspan="1" width="10px">Status</th>
                                    <th rowspan="2" style="text-align: center; vertical-align: middle; width: 15px;"
                                        colspan="1" width="10px">Booking No</th>
                                    <th colspan="5" style="text-align: center; width: 116px;" rowspan="1">COLLECTION
                                    </th>
                                    <th colspan="3" style="text-align: center; width: 115px;" rowspan="1">DELIVERY</th>
                                    <th rowspan="2" style="text-align: center; vertical-align: middle; width: 15px;"
                                        colspan="1" width="10px">Email</th>
                                    <th rowspan="2" style="text-align: center; vertical-align: middle; width: 15px;"
                                        colspan="1" width="10px">Entry Date</th>
                                </tr>
                                <tr role="row">
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Name</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Address</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Contact No.</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Items</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Total Pkgs</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Name</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Delivery</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Contact No.</th>
                                </tr>
                            </thead>
                            <tbody id="data-booking-list">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div id="tempat-modalaa"></div>

<?php echo $modal_penegahan; ?>

<script type="text/javascript">
$(function() {
    $('#tgl_hawb,#tgl_mawb,#tgl_bc11').datepicker({
        autoclose: true
    })

});
</script> -->
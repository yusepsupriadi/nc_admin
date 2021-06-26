<!-- My Ajax -->
<?php include './assets/js/ajax_order.php'; ?>

<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="fa fa-briefcase"></i>
                    <h3 class="box-title">Order List<small> </small></h3>
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
                            <button class="btn btn-success" data-toggle="modal" data-target="#add-order"><i
                                    class="glyphicon glyphicon-plus-sign"></i>&nbsp;Add New Order</button>
                        </div>
                        <!-- <div class="col-sm-3" style="margin-left: -10%;">
                            <button type="button" id="btn-penegahan" class="btn btn-success">List Penegahan</button>
                        </div>
                        <div class="col-sm-3" style="margin-left: -13%;">
                            <button type="button" id="btn-release" class="btn btn-success" style="display: none;">List
                                Release</button>
                        </div> -->
                        <div class="col-md-3  pull-right"></div>
                        <div class="col-md-3  pull-right"></div>
                    </div>
                    <div class="box-body">
                        <table id="list-data" class="table table-bordered table-striped">
                            <thead>
                                <tr role="row">
                                    <th rowspan="2" style="text-align: center; vertical-align: middle; width: 15px;"
                                        colspan="1" width="10px">No</th>
                                    <th width="10px" rowspan="2" style="text-align:center;vertical-align:middle;">Edit</th>
                                    <th rowspan="2" style="text-align: center; vertical-align: middle; width: 15px;"
                                        colspan="1" width="10px">Status</th>
                                    <th rowspan="2" style="text-align: center; vertical-align: middle; width: 15px;"
                                        colspan="1" width="10px">Booking No</th>
                                    <th colspan="3" style="text-align: center; width: 116px;" rowspan="1">COLLECTION
                                    </th>
                                    <th colspan="3" style="text-align: center; width: 115px;" rowspan="1">DELIVERY</th>
                                    <th colspan="3" style="text-align: center; width: 115px;" rowspan="1">ITEMS</th>
                                </tr>
                                <tr role="row">
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Name</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Address</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Phone No.</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Name</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Delivery</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Phone No.</th>

                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Items</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Total Packages</th>
                                    <th style="text-align: center; vertical-align: middle; width: 36px;">Weight</th>
                                </tr>
                            </thead>
                            <tbody id="data-order-list">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $modal_add_order; ?>

<div id="tempat-modal"></div>

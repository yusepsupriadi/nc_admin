<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
@page {
            margin-top: 0.3em;
            margin-left: 0.6em;
        }

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 5px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

    #outtable{
      padding: 10px;
      width:250px;
    }
 
    .short{
      width: 30px;
    }
 
    .normal{
      width: 100px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      padding: 5px;
    }
 
    tbody td{
      padding: 5px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }

    tfoot td{
      padding: 5px;
    }
 
    tfoot tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tfoot tr:hover{
      background: #EAE9F5
    }

</style>
</head>
<body>
<h2>Cash Requisition - ( <?php echo $dataHeaderPengajuan->id ?> )</h2>
<div class="row">
  <div class="column" >
    <h2>Kolom Pengajuan</h2> 
    <fieldset>
    <legend>Detail Pengajuan</legend>
    <table>
        <tr>
            <td>Creator</td><td>:</td><td><?php echo $dataHeaderPengajuan->creator; ?></td>
            <td>Create Date</td><td>:</td><td><?php echo $dataHeaderPengajuan->created_date; ?></td>
        </tr>
        <tr>
            <td>Type Shipment</td><td>:</td><td ><?php echo $dataHeaderPengajuan->ShipmentName; ?></td>
            <td>Branch</td><td>:</td><td><?php echo $dataHeaderPengajuan->BranchName; ?></td>
        </tr>
        <tr>
            <td>Type Job</td><td>:</td><td ><?php echo $dataHeaderPengajuan->JobTypeName; ?></td>
            <td>Type CR</td><td>:</td><td><?php echo $dataHeaderPengajuan->TypeCRName; ?></td>
        </tr>
        <tr>
            <td>Payment</td><td>:</td><td ><?php echo $dataHeaderPengajuan->PaymentTypeName; ?></td>
            <td>Pay To</td><td>:</td><td><?php echo $dataHeaderPengajuan->pay_to; ?></td>
        </tr>
        <tr>
            <td>Notes</td><td>:</td><td colspan="3" ><?php echo $dataHeaderPengajuan->notes; ?></td>
        </tr>
    </table>
    </fieldset>
    <fieldset>
    <legend>Detail Cost Plan</legend>
    <table>
        <thead>
            <tr>
                <th width="10px">No</th>
                <th>Cost Desc</th>
                <th>Job No</th>
                <th>Shipping Line</th>
                <th>Curr</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $start = 0;
            foreach ($dataCostPlanPengajuan as $CostPlan )
            {
                ?>
                <tr>
                    <td><?php echo ++$start ?></td>
                    <td><?php echo $CostPlan->CostDesc ?></td>
                    <td><?php echo $CostPlan->JobNo ?></td>
                    <td><?php echo $CostPlan->shippingline  ?></td>
                    <td><?php echo $CostPlan->Currency  ?></td>
                    <td style="text-align:right"><?php echo number_format($CostPlan->amount,2,'.',',')  ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5" style="text-align:right">Total IDR: </th>
                <th style="text-align:right"><?php echo number_format($dataHeaderPengajuan->total_idr,2,'.',',') ?></th>
            </tr>
            <tr>
                <th colspan="5" style="text-align:right">Total USD: </th>
                <th style="text-align:right"><?php echo number_format( $dataHeaderPengajuan->total_usd,2,'.',',') ?></th>
            </tr>    
        </tfoot>
    </table>
    </fieldset>
    <fieldset>
    <legend>Approval List</legend>
    <table>
        <thead>
            <tr style='text-align:center;'>
                <?php
                $start = 0;
                foreach ($dataApprovalListPengajuan as $approvalList)
                {
                    ?>
                        <th><?php echo $approvalList->step_name ?></th>
                    <?php
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr style='text-align:center;'>
                <?php
                $start = 0;
                foreach ($dataApprovalListPengajuan as $approvalList)
                {
                    ?>
                        <td><?php echo $approvalList->approvalowner ?></td>
                    <?php
                    }
                ?>
            </tr>
            <tr style='text-align:center;'>
                <?php
                $start = 0;
                foreach ($dataApprovalListPengajuan as $approvalList)
                {
                    ?>
                        <td><?php if($approvalList->status != '') { echo '( '.$approvalList->status.' ) '; }  ?></td>
                    <?php
                    }
                ?>
            </tr>
            <tr style='text-align:center;'>
                <?php
                $start = 0;
                foreach ($dataApprovalListPengajuan as $approvalList)
                {
                    ?>
                        <td><?php if($approvalList->approvedate != '') { echo '( '.date("d-m-Y", strtotime($approvalList->approvedate)).' ) '; }  ?></td>
                    <?php
                    }
                ?>
            </tr>
        </tbody>
    </table>
    </fieldset> 
  </div>
  <div class="column" >
    <h2>Kolom Penyelesaian</h2>
    <fieldset>
    <legend>Detail Penyelesaian</legend>
    <table>
        <tr>
            <td>Creator</td><td>:</td><td ><?php  if($dataHeaderPenyelesaian != null) {echo $dataHeaderPenyelesaian->creator; }else{echo ' ';}?></td>
            <td>Create Date</td><td>:</td><td><?php   if($dataHeaderPenyelesaian != null) { echo $dataHeaderPenyelesaian->created_date;}else{echo ' ';} ?></td>
        </tr>
        <tr>
            <td>Type Shipment</td><td>:</td><td ><?php  if($dataHeaderPenyelesaian != null) {echo $dataHeaderPenyelesaian->ShipmentName; }else{echo ' ';}?></td>
            <td>Branch</td><td>:</td><td><?php  if($dataHeaderPenyelesaian != null) {echo $dataHeaderPenyelesaian->BranchName; }else{echo ' ';}?></td>
        </tr>
        <tr>
            <td>Type Job</td><td>:</td><td ><?php  if($dataHeaderPenyelesaian != null) {echo $dataHeaderPenyelesaian->JobTypeName;}else{echo ' ';} ?></td>
            <td>Type CR</td><td>:</td><td><?php  if($dataHeaderPenyelesaian != null) {echo $dataHeaderPenyelesaian->TypeCRName; }else{echo ' ';}?></td>
        </tr>
        <tr>
            <td>Payment</td><td>:</td><td ><?php  if($dataHeaderPenyelesaian != null) {echo $dataHeaderPenyelesaian->PaymentTypeName;}else{echo ' ';} ?></td>
            <td>Pay To</td><td>:</td><td><?php  if($dataHeaderPenyelesaian != null) {echo $dataHeaderPenyelesaian->pay_to;}else{echo ' ';} ?></td>
        </tr>
        <tr>
            <td>Notes</td><td>:</td><td colspan="3"><?php  if($dataHeaderPenyelesaian != null) { echo $dataHeaderPenyelesaian->notes;}else{echo ' ';} ?></td>
        </tr>
    </table>
    </fieldset>
    <fieldset>
    <legend>Detail Cost Report</legend>
    <table>
        <thead>
            <tr>
                <th width="10px">No</th>
                <th>Cost Desc</th>
                <th>Job No</th>
                <th>Shipping Line</th>
                <th>Curr</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody >
        <?php
            $start = 0;
            foreach ($dataCostPlanPenyelesaian as $CostPlan )
            {
                ?>
                <tr>
                    <td><?php echo ++$start ?></td>
                    <td><?php echo $CostPlan->CostDesc ?></td>
                    <td><?php echo $CostPlan->JobNo ?></td>
                    <td><?php echo $CostPlan->shippingline  ?></td>
                    <td><?php echo $CostPlan->Currency  ?></td>
                    <td style="text-align:right"><?php echo number_format($CostPlan->amount,2,'.',',') ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5" style="text-align:right">Total IDR: </th>
                <th style="text-align:right"><?php if($dataHeaderPenyelesaian != null) {echo number_format($dataHeaderPenyelesaian->total_idr,2,'.',',') ; } ?></th>
            </tr>
            <tr>
                <th colspan="5" style="text-align:right">Total USD: </th>
                <th style="text-align:right"><?php if($dataHeaderPenyelesaian != null) {echo number_format($dataHeaderPenyelesaian->total_usd,2,'.',',');  } ?></th>
            </tr>    
        </tfoot>
    </table>
    </fieldset>
    <fieldset>
    <legend>Difference</legend>
    <table >
        <thead>
            <tr>
                <th>Currency</th>
                <th>Pengajuan</th>
                <th>Penyelesaian</th>
                <th>Diff</th>
                <th>Remark</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>IDR</td>
            <td style="text-align:right"><?php if($dataHeaderPengajuan != null) {echo number_format($dataHeaderPengajuan->total_idr,2,'.',',');  } else {echo 0;}?></td>
            <td style="text-align:right"><?php if($dataHeaderPenyelesaian != null) {echo number_format($dataHeaderPenyelesaian->total_idr,2,'.',',');  } else {echo 0;}?></td>
            <td style="text-align:right"><?php if($dataHeaderPenyelesaian != null) {echo number_format($dataHeaderPengajuan->total_idr-$dataHeaderPenyelesaian->total_idr,2,'.',',');  } else {echo number_format($dataHeaderPengajuan->total_idr-0,2,'.',',');} ?></td></td>
            <td><?php if($dataHeaderPenyelesaian != null) {if($dataHeaderPengajuan->total_idr > $dataHeaderPenyelesaian->total_idr){echo 'return';}else{echo 'payment';};  } ?></td></td>
        </tr>
        <tr>
            <td>USD</td>
            <td style="text-align:right"><?php if($dataHeaderPengajuan != null) {echo number_format($dataHeaderPengajuan->total_usd,2,'.',',');  } else {echo 0;} ?></td>
            <td style="text-align:right"><?php if($dataHeaderPenyelesaian != null) {echo number_format($dataHeaderPenyelesaian->total_usd,2,'.',',');  } else {echo 0;} ?></td>
            <td style="text-align:right"><?php if($dataHeaderPenyelesaian != null) {echo number_format($dataHeaderPengajuan->total_usd-$dataHeaderPenyelesaian->total_usd,2,'.',',');  } else {echo number_format($dataHeaderPengajuan->total_usd-0,2,'.',',');} ?></td></td>
            <td><?php if($dataHeaderPenyelesaian != null) {if($dataHeaderPengajuan->total_usd > $dataHeaderPenyelesaian->total_usd){echo 'return';}else{echo 'payment';};  } ?></td></td>
        </tr>
        </tbody>
    </table>
    </fieldset>
    <?php
    if($dataApprovalListPenyelesaian != null)  
    {
    ?>
    <fieldset>
    <legend>Approval List</legend>
    <table>
        <thead>
        <tr style='text-align:center;'>
            <?php
            $start = 0;
            foreach ($dataApprovalListPenyelesaian as $approvalList)
            {
                ?>
                    <th><?php echo $approvalList->step_name ?></th>
                <?php
                }
            ?>
        </tr>
        </thead>
        <tbody>
        <tr style='text-align:center;'>
                <?php
                $start = 0;
                foreach ($dataApprovalListPenyelesaian as $approvalList)
                {
                    ?>
                        <td><?php echo $approvalList->approvalowner ?></td>
                    <?php
                    }
                ?>
            </tr>
            <tr style='text-align:center;'>
                <?php
                $start = 0;
                foreach ($dataApprovalListPenyelesaian as $approvalList)
                {
                    ?>
                        <td><?php if($approvalList->status != '') { echo '( '.$approvalList->status.' ) '; }  ?></td>
                    <?php
                    }
                ?>
            </tr>
            <tr style='text-align:center;'>
                <?php
                $start = 0;
                foreach ($dataApprovalListPenyelesaian as $approvalList)
                {
                    ?>
                        <td><?php if($approvalList->approvedate != '') { echo '( '.date("d-m-Y", strtotime($approvalList->approvedate)).' ) '; }  ?></td>
                    <?php
                    }
                ?>
            </tr>
            <tr style='text-align:center;'>
                <?php
                $start = 0;
                foreach ($dataApprovalListPenyelesaian as $approvalList)
                {
                    ?>
                        <td><?php if($approvalList->notes != '') { echo '( '.$approvalList->notes.' ) '; }  ?></td>
                    <?php
                    }
                ?>
            </tr>
        </tbody>
    </table>
    </fieldset> 
    <?php } ?>
  </div>
</div>
</body>
</html>
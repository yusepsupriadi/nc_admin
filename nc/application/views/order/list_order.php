<?php
    $start = 0;
	date_default_timezone_set("America/New_York");
    foreach ($getAllOrderList as $nc)
    {
        ?>
<tr>
    <td style="text-align: center;"><?php echo ++$start ?></td>
    <td class="text-center" style="min-width:50px;">
        <button class="btn btn-warning btn-sm update-dataCustomModul" data-tooltip="tooltip" title="Edit" data-id="<?php echo $nc->Id; ?>"  data-id-codeco="<?php echo $nc->BookingId; ?>"><i class="fa fa-pencil-square-o"></i></button>
    </td>
    <td style="min-width:100px;"><?php echo $nc->Status ?></td>
    <td style="min-width:100px;"><?php echo $nc->BookingId ?></td>
    <td style="min-width:100px;"><?php echo $nc->CollectionName ?></td>
    <td style="min-width:100px;"><?php echo $nc->CollectionAddress ?></td>
    <td style="min-width:100px;"><?php echo $nc->CollectionContactNo ?></td>
    <td style="min-width:100px;"><?php echo $nc->DeliveryName  ?></td>
    <td style="min-width:100px;"><?php echo $nc->DeliveryAddress  ?></td>
    <td style="min-width:100px;"><?php echo $nc->DeliveryContactNo  ?></td>
    <td style="min-width:100px;"><?php echo $nc->ItemDescription ?></td>
    <td style="min-width:100px;"><?php echo $nc->TotalPackages  ?></td>
    <td style="min-width:100px;"><?php echo $nc->Weigth  ?></td>
    <!-- <td style="min-width:100px;"><?php echo $nc->ItemDescription ?></td>
    <td style="min-width:100px;"><?php echo $nc->PiecesNo ?></td>
    <td style="min-width:100px;"><?php echo $nc->Value  ?></td>
    <td style="min-width:100px;"><?php echo $nc->TotalPackages  ?></td>
    <td style="min-width:100px;"><?php echo $nc->Weigth  ?></td>
    <td style="min-width:100px;"><?php echo $nc->Email  ?></td>
    <td style="min-width:100px;"><?php echo $nc->AmountPayble  ?></td>
    <td style="min-width:100px;"><?php echo $nc->created_user  ?></td>
    <td style="min-width:100px;"><?php echo $nc->created_date  ?></td> -->

</tr>
<?php
    }
    ?>
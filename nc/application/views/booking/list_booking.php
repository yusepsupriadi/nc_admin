<?php
    $start = 0;
	date_default_timezone_set("America/New_York");
    foreach ($getAllBookingList as $nc)
    {
        ?>
    <tr>
        <td style="text-align: center;"><?php echo ++$start ?></td>
        <?php 
            if ($nc->StatusBooking == 'RESERVED')
                echo '<td width="4%" scope="col" style="color: green;text-align: center;">'. $nc->StatusBooking.'</td>';
            else if ($nc->StatusBooking == 'VOID')
                echo '<td width="4%" scope="col" style="color: orange;text-align: center;">'. $nc->StatusBooking.'</td>';
            else if ($nc->StatusBooking == 'CANCELLED')
                echo '<td width="4%" scope="col" style="color: red;text-align: center;">'. $nc->StatusBooking.'</td>';
            else if ($nc->StatusBooking == 'DRAFT')
                echo '<td width="4%" scope="col" style="color: blue;text-align: center;">'. $nc->StatusBooking.'</td>';
        ?>
        <td style="min-width:100px;"><?php echo $nc->BookingId ?></td>
        <td style="min-width:100px;"><?php echo $nc->CollectionName ?></td>
        <td style="min-width:100px;"><?php echo $nc->CollectionAddress ?></td>
        <td style="min-width:100px;"><?php echo $nc->CollectionContactNo ?></td>
        <td style="min-width:100px;"><?php echo $nc->Item ?></td>
        <td style="min-width:100px;"><?php echo $nc->TotalPkgs ?></td>
        <td style="min-width:100px;"><?php echo $nc->DeliveryName  ?></td>
        <td style="min-width:100px;"><?php echo $nc->DeliveryAddress  ?></td>
        <td style="min-width:100px;"><?php echo $nc->DeliveryContactNo  ?></td>
        <td style="min-width:100px;"><?php echo $nc->EmailNotif  ?></td>
        <td style="min-width:100px;"><?php echo $nc->created_date  ?></td>

    </tr>
<?php
    }
    ?>
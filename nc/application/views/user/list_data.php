<?php
$start = 0;
foreach ($dataUser as $user)
{
    ?>
    <tr>
        <td><?php echo ++$start ?></td>
        <td class="text-center" style="min-width:100px;">
            <button class="btn btn-warning btn-sm update-dataUser" data-tooltip="tooltip" title="Edit" data-id="<?php echo $user->id; ?>"><i class="fa fa-pencil-square-o"></i></button>
            <button class="btn btn-danger btn-sm konfirmasiHapus-user" data-tooltip="tooltip" data-id="<?php echo $user->id; ?>" data-toggle="modal" title="Delete" data-target="#konfirmasiHapus"><i class="fa fa-trash-o"></i></button>
        </td>
        <td><?php echo $user->username ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->name ?></td>
    </tr>
    <?php
}
?>
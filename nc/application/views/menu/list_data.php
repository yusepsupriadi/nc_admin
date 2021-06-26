<?php
$start = 0;
foreach ($dataMenu as $menu)
{
    $active = $menu->is_active==1?'AKTIF':'TIDAK AKTIF';
    $parent = $menu->is_parent>1?'MAINMENU':'SUBMENU'
    ?>
    <tr>
        <td><?php echo ++$start ?></td>
        <td class="text-center" style="min-width:100px;">
          <button class="btn btn-warning btn-sm update-dataMenu" data-tooltip="tooltip" title="Edit" data-id="<?php echo $menu->id; ?>"><i class="fa fa-pencil-square-o"></i></button>
          <button class="btn btn-danger btn-sm konfirmasiHapus-menu" data-tooltip="tooltip" data-id="<?php echo $menu->id; ?>" data-toggle="modal" title="Delete" data-target="#konfirmasiHapus"><i class="fa fa-trash-o"></i></button>
         </td>
        <td><?php echo $menu->name ?></td>
        <td><?php echo $menu->link ?></td>
        <td><i class='<?php echo $menu->icon ?>'></i></td>
        <td><?php echo $active ?></td>
        <td><?php echo $parent ?></td>
    </tr>
    <?php
}
?>
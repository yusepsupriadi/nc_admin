<script type="text/javascript">
// window.onload = function() {
//     getAllBookingList();
//     <?php
//         if ($this->session->flashdata('msg') != '') {
//             echo "effect_msg();";
//         }
//     ?>
// }

// function getAllBookingList() {
//     $.get('<?php echo base_url('Booking/view_action'); ?>', function(data) {
//         MyTable.fnDestroy();
//         $('#data-booking-list').html(data);
//         refresh();
//     });
// }

var MyTable = $('#list-data').dataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "scrollX": true
});

function refresh() {
    MyTable = $('#list-data').dataTable({
        "scrollX": true,
        dom: 'Bfrtip',
        "buttons": [{
            extend: 'collection',
            text: 'Export',
            buttons: [
                'copy',
                'excel',
                'csv',
                'pdf',
                'print'
            ]
        }]
    });
}

var MyReport = $('#list-report').dataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "scrollX": true
});

function refreshReport() {
    MyReport = $('#list-report').dataTable({
        "scrollX": true,
        dom: 'Bfrtip',
        "buttons": [{
            extend: 'collection',
            text: 'Export',
            buttons: [
                'copy',
                'excel',
                'csv',
                'pdf',
                'print'
            ]
        }]
    });
}


function effect_msg_form() {
    // $('.form-msg').hide();
    $('.form-msg').show(1000);
    setTimeout(function() {
        $('.form-msg').fadeOut(1000);
    }, 3000);
}

function effect_msg() {
    // $('.msg').hide();
    $('.msg').show(1000);
    setTimeout(function() {
        $('.msg').fadeOut(1000);
    }, 3000);
}
</script>
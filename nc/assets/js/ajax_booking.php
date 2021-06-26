<script type="text/javascript">
    window.onload = function() {
		getAllBookingList();
    <?php
        if ($this->session->flashdata('msg') != '') {
            echo "effect_msg();";
        }
    ?>
    }
	
  function getAllBookingList() {
		$.get('<?php echo base_url('Booking/view_action'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-booking-list').html(data);
			refresh();
		});
	}

	// $(document).on("click", "#btn-filter", function() {
	// 	var bruto1 = $('#start_bruto').val();
	// 	var bruto2 = $('#end_bruto').val();
	// 	var fromdate = $('#fromdate').val();
	// 	var todate = $('#todate').val();
	// 	$.ajax({
	// 		method: "POST",
	// 		url: "<?php echo base_url('home/ajax_list'); ?>",
	// 		data: "bruto1="+ bruto1 + "&bruto2=" + bruto2 + "&fromdate=" + fromdate + "&todate=" + todate
	// 	})
	// 	.done(function(data) {
	// 		MyTable.fnDestroy();
	// 		$('#data-custom-moduls').html(data);
	// 		refresh();
	// 	})
	// })

	// $(document).on("click", "#btn-penegahan", function() {

	// 	$.ajax({
	// 		method: "POST",
	// 		url: "<?php echo base_url('home/filter_penegahan'); ?>",
	// 	})
	// 	.done(function(data) {
	// 		MyTable.fnDestroy();
	// 		$('#data-custom-moduls').html(data);
	// 		refresh();
	// 	})
	// })

	// $(document).on("click", "#btn-release", function() {

	// 	$.ajax({
	// 		method: "POST",
	// 		url: "<?php echo base_url('home/filter_release'); ?>",
	// 	})
	// 	.done(function(data) {
	// 		MyTable.fnDestroy();
	// 		$('#data-custom-moduls').html(data);
	// 		refresh();
	// 	})
	// })
	
  //   var id_custom;
	// $(document).on("click", ".konfirmasiHapus-custom", function() {
	// 	id_custom = $(this).attr("data-id");
	// })

	// $(document).on("click", ".hapus-dataCustomModul", function() {
	// 	var id = id_custom;
		
	// 	$.ajax({
	// 		method: "POST",
	// 		url: "<?php echo base_url('Home/delete'); ?>",
	// 		data: "id=" +id
	// 	})
	// 	.done(function(data) {
	// 		$('#konfirmasiHapus').modal('hide');
	// 		getAllBookingList();
	// 		$('.msg').html(data);
	// 		effect_msg();
	// 	})
	// })

	// $(document).on("click", ".update-dataCustomModul", function() {
	// 	var id = $(this).attr("data-id");
	// 	var id_codeco = $(this).attr("data-id-codeco");
		
	// 	$.ajax({
	// 		method: "POST",
	// 		url: "<?php echo base_url('home/update'); ?>",
	// 		data: "id=" +id + "&codeco=" + id_codeco
	// 	})
	// 	.done(function(data) {
	// 		$('#tempat-modal').html(data);
	// 		$('#update-custom-modul').modal('show');
	// 	})
	// })

	// $(document).on('submit', '#form-tambah-custom-modul', function(e){
	// 	var data = $(this).serialize();

	// 	$.ajax({
	// 		method: 'POST',
	// 		url: '<?php echo base_url('home/create_action'); ?>',
	// 		data: data
	// 	})
	// 	.done(function(data) {
	// 		var out = jQuery.parseJSON(data);

	// 		getAllBookingList();
	// 		if (out.status == 'form') {
	// 			$('.form-msg').html(out.msg);
	// 			effect_msg_form();
	// 		} else {
	// 			document.getElementById("form-tambah-custom-modul").reset();
	// 			$('#tambah-custom-modul').modal('hide');
	// 			$('.msg').html(out.msg);
	// 			effect_msg();
	// 		}
	// 	})
		
	// 	e.preventDefault();
	// });

	// $(document).on('submit', '#form-update-custom-modul', function(e){
	// 	var data = $(this).serialize();

	// 	$.ajax({
	// 		method: 'POST',
	// 		url: '<?php echo base_url('home/update_action'); ?>',
	// 		data: data
	// 	})
	// 	.done(function(data) {
	// 		var out = jQuery.parseJSON(data);

	// 		getAllBookingList();
	// 		if (out.status == 'form') {
	// 			$('.form-msg').html(out.msg);
	// 			effect_msg_form();
	// 		} else {
	// 			document.getElementById("form-update-custom-modul").reset();
	// 			$('#update-custom-modul').modal('hide');
	// 			$('.msg').html(out.msg);
	// 			effect_msg();
	// 		}
	// 	})
		
	// 	e.preventDefault();
	// });

	// $('#tambah-custom-modul').on('hidden.bs.modal', function () {
	//   $('.form-msg').html('');
	// })

	// $('#update-custom-modul').on('hidden.bs.modal', function () {
	//   $('.form-msg').html('');
	// })

</script>
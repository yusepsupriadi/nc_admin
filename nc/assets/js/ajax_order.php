<script type="text/javascript">
window.onload = function() {
	getAllOrderList();
    <?php
        if ($this->session->flashdata('msg') != '') {
            echo "effect_msg();";
        }
    ?>
    }

	function getAllOrderList() {
		$.get('<?php echo base_url('Order/view_action'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-order-list').html(data);
			refresh();
		});
	}

    $('#add-order').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$(document).ready(function(){
		// Set option selected onchange
		$('#changeBook').change(function(){
		var value = $(this).val();

			$.ajax({
				method: "POST",
				// url: "<?php echo base_url('Order/getData'); ?>",
				url: "<?php echo base_url(); ?>/Order/getData/"+value,
				dataType: 'json'
			})
			.success(function(data) {
				console.log(data.res);
				var CollectionName=data.res[0].CollectionName;
				var CollectionAddress=data.res[0].CollectionAddress;
				var CollectionContactNo=data.res[0].CollectionContactNo;

				var DeliveryName=data.res[0].DeliveryName;
				var DeliveryAddress=data.res[0].DeliveryAddress;
				var DeliveryContactNo=data.res[0].DeliveryContactNo;

				var Item=data.res[0].Item;
				var TotalPkgs=data.res[0].TotalPkgs;
				// alert(a);
				$(".form-group #coll_name").val( CollectionName );
				$(".form-group #coll_address").val( CollectionAddress );
				$(".form-group #coll_phone").val( CollectionContactNo );

				$(".form-group #deli_name").val( DeliveryName );
				$(".form-group #deli_address").val( DeliveryAddress );
				$(".form-group #deli_phone").val( DeliveryContactNo );

				$(".form-group #inv_items").val( Item );
				$(".form-group #inv_tot_packages").val( TotalPkgs );
			})

		});
		return false;
	});

	$(document).on('submit', '#form-add-order', function(e){
		var data = $(this).serialize();
		// alert("masuk");
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Order/insert_order_action'); ?>',
			data: data
		})
		// alert(data);
		// console.log(data);
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			getAllOrderList();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-add-order").reset();
				$('#add-order').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

</script>

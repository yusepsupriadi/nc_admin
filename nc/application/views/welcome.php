<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>Customs Modul</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/coming-soon.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/notify.css" rel="stylesheet">

    <style>
      body {font-family: Arial, Helvetica, sans-serif;}

      /* The Modal (background) */
      .modal {
          position: absolute; /* Stay in place */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      .modal-content-green {
          background-color:#008000;
          margin: auto;
		      padding: 20px;
          border: 1px solid #888;
          width: 100%;
          height: 100%;
      }

      .modal-content-red {
          background-color:#FF0000;
          margin: auto;
		      padding: 20px;
          border: 1px solid #888;
          width: 100%;
          height: 100%;
      }


      /* The Close Button */
      .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }

      .close:hover,
      .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
      }

      .closeSuccess {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }

      .closeSuccess:hover,
      .closeSuccess:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
      }

      img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width:40%;		
      }
      </style>
  </head>

  <body>

    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
      <source src="<?php echo base_url(); ?>assets/mp4/bg.mp4" type="video/mp4">
    </video>
    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
            <h2 class="mb-3">Customs Modul</h2>
             
            <form id="form-search-data" method="POST">     
              <div class="input-group input-group-newsletter">
                <input type="text" id="nomor" name="nomor" required="required" class="form-control" placeholder="Please input HAWB Number..." aria-label="Enter email..." aria-describedby="basic-addon">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit" >Search</button>
                </div>
              </div>
            </form>
              <p class="mb-5">Login for Customs Modul 
                <strong><a href="<?php echo base_url(); ?>auth">Click Here</a></strong></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- The Modal -->
    <div id="modalFailed" class="modal">
      <!-- Modal content -->
      <div class="modal-content-red">
        <span class="close">&times;</span>
        <div class="modal-body">
            <p> </p>
        </div>
      </div>
    </div>

    <!-- The Modal -->
    <div id="modalSuccess" class="modal">
      <!-- Modal content -->
      <div class="modal-content-green">
        <span class="closeSuccess">&times;</span>
        <div class="modal-body">
            <p> </p>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/js/coming-soon.min.js"></script>

    
    <script>
    var modalFailed = document.getElementById('modalFailed');
    var modalSuccess = document.getElementById('modalSuccess');
    var span = document.getElementsByClassName("close")[0];
    var span1 = document.getElementsByClassName("closeSuccess")[0];
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modalFailed.style.display = "none";
    }

    span1.onclick = function() {
      modalSuccess.style.display = "none";
    }


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalFailed) {
          modalFailed.style.display = "none";
        }else if (event.target == modalSuccess) {
          modalSuccess.style.display = "none";
        }
    } 
   	$(document).on("submit",'#form-search-data', function(e) {
        var data = $(this).serialize();
        $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Welcome/search'); ?>',
          data: data
        })

        .done(function(data) {
          var out = jQuery.parseJSON(data);

          if (out.status == 'BELUM SPPB') {
            var statusHTML = '<p style="color:white;text-align:center;font-size:70px;">' + out.StatusText +  ' </p>';
            $("#modalFailed .modal-body").html(statusHTML);

            modalSuccess.style.display = "none";
            modalFailed.style.display = "block";
            setTimeout(function(){
              modalFailed.style.display = "none";
            }, 4000);

          }else if (out.status == 'RELEASE') {
            var hawbHTML = '<p style="color:white;text-align:center;font-size:70px;">HAWB : ' + out.hawb +  ' </p>';
            var sppbHTML = '<p style="color:white;text-align:center;font-size:70px;">SPPB : ' + out.sppb +  ' </p>';
			var pibHTML = '<p style="color:white;text-align:center;font-size:70px;">PIB : ' + out.pib +  ' </p>';
            var tglSppbHTML = '<p style="color:white;text-align:center;font-size:70px;">TANGGAL SPPB : ' + out.tglSPPB +  ' </p>';
			var NotesHTML = '<p style="color:white;text-align:center;font-size:40px;"><a href="http://my.speedmark.co.id/tps/coariCodecoKemasan/index" target="_blank">Please Submit Report!!</a> </p>';
            $("#modalSuccess .modal-body").html(hawbHTML + sppbHTML + tglSppbHTML + pibHTML + NotesHTML);

            modalSuccess.style.display = "block";
            modalFailed.style.display = "none";
            setTimeout(function(){
              modalSuccess.style.display = "none";
            }, 6000);

          } else if (out.status == 'PENEGAHAN') {
            var statusHTML = '<p style="color:white;text-align:center;font-size:70px;">' + out.StatusText +  ' </p>';
            $("#modalFailed .modal-body").html(statusHTML);

            modalSuccess.style.display = "none";
            modalFailed.style.display = "block";
            setTimeout(function(){
              modalFailed.style.display = "none";
            }, 6000);
          }else
          {
              alert('Please check data coari codeco..');
          }
        })
        
        e.preventDefault();
      });
    </script>
  </body>

</html>


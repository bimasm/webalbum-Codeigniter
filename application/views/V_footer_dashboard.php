 <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>
 <script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
 <script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'></script>

 <script type="text/javascript">
 	$(document).ready(function() {
 		$('#example').DataTable();
 	} );
 </script>
 <script>
 	function isNumber(evt) {
 		evt = (evt) ? evt : window.event;
 		var charCode = (evt.which) ? evt.which : evt.keyCode;
 		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
 			return false;
 		}
 		return true;
 	}
 </script>


 

 <script  src="<?php echo base_url(); ?>assets/dashboard/js/index.js"></script>




</body>

</html>

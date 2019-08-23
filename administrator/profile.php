<?php
session_start();
include("db.php");
if(!isset($_SESSION["adminEmail"]) || $_SESSION["adminEmail"]==""){
	header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Goods Shipping Management System :: Admin Profile</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link href="css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">
    
    <link href="css/base-admin-3.css" rel="stylesheet">
    <link href="css/base-admin-3-responsive.css" rel="stylesheet">
    
    <link href="css/pages/plans.css" rel="stylesheet"> 

    <link href="css/custom.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>
    	.form-group label{
    		text-align: right;
    	}
    	.pills_container{
    		margin-bottom: 15px;
    	}
    	.pill{
    		text-align: center;
		    padding: 10px 0px;
		    border: 1px solid #292929;
		    margin-left: 5px;
		    cursor: pointer;
    	}
    	.current_tab{
		    background: #292929;
		    color: white;
    	}
    	.footer{
    		position: fixed;
		    bottom: 0px;
		    width: 100%;
		    clear: both;
    	}
    	.row{
    		margin-right: -15px;
    		margin-left: -15px;
    	}
    	.form-right-block{
    		margin-left:50px;
    	}
    	.custom_radio{
    		float: left;
		    border: 1px solid #292929;
		    padding: 3px 18%;
		    cursor: pointer;
    	}
    	.current_custom_radio{
    		background: #292929;
    		color:white;
    	}
    	#redeem_points{
    		margin-top: 26px;
    		width: 170px;
    	}
    	.custom_buttons_margin{
    		margin-left: 35px;
    	}
    	#add_transaction_button{
    		width:100%;
    	}
    	#redeem_points_container{
    		width:auto;
    		left:5%;
    		top:10%;
    		background: white;
    		position: fixed;
    		z-index:10000;
    		padding:20px;
    		display: none;
    	}
    	#redeem_points_container_background{
    		position: fixed;
    		top:0px;
    		left:0px;
    		width: 100%;
    		height: 100%;
    		background: black;
    		opacity: .5;
    		z-index: 1000;
    		display: none;
    	}
    	.col-md-12 h1{
    		margin-bottom: 0px;
    	}
    	#loading{
    		position: fixed;
    		top:0px;
    		left:0px;
    		width: 100%;
    		height: 100%;
    		background: black;
    		opacity: .5;
    		z-index: 200000;
    		display: none;
    	}
    </style>
  </head>

<body>

<nav class="navbar navbar-inverse" role="navigation">

	<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <i class="icon-cog"></i>
    </button>
    <a class="navbar-brand" href="search.php" style="padding: 0px;"><!--<img src="img/logo.jpg" style="width:90px;"> --></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
    	<li>
    		<a href="search.php">Home</a>
		</li>
		<li>
    		<a href="logout.php">Logout</a>
    	</li>
    </ul>
    
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        
      </div>
    </form>

  </div><!-- /.navbar-collapse -->
</div> <!-- /.container -->
</nav>

<br>
    
<div class="main">
    <div class="container">

      <div class="row pills_container">
      	  <div class="col-md-12">
      	  	 <div class="col-lg-2 pill current_tab" id="basic_information">Find Shipping</div>
      	  	 <div class="col-lg-2 pill" id="get_transactions">All Shippings</div>
      	  </div>
      </div>

      <div class="row custom_container" id="basic_information_container">
      	<div class="col-md-12">

      		<div class="widget stacked">

      			<div class="widget-header">
					<i class="icon-tasks"></i>
					<h3>Shipping Details</h3>
				</div> <!-- /.widget-header -->


				<div class="widget-content">
				<div class="row">
					<div class="col-md-3">

					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>Tracking Number</label>
							<input type="text" id="bookingId" value="" class="form-control" placeholder="Please enter Tracking Number / Booking Id">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">

					</div>
					<div class="col-md-6">
						<button class="btn btn-default" type="button" id="search_booking">Search</button>
					</div>
				</div>
				</div> <!-- /.widget-content -->


      		</div> <!-- /.widget -->

		  </div>

		  <div id="bookin_content"></div>

      </div> <!-- /.row -->

      <div class="row custom_container" id="transactions_container">

      	<div class="col-md-12" id="transactions_content"></div>

      </div>

    </div> <!-- /container -->
</div> <!-- /main -->


    
    
<div class="footer">
		
	<div class="container">
		
		<div class="row">
			
			<div id="footer-copyright" class="col-md-6">
				&copy; 2019-20 Mounika
			</div> <!-- /span6 -->

		</div> <!-- /row -->
		
	</div> <!-- /container -->
	
</div> <!-- /footer -->

<!-- Hidden Value-->
<input type="text" id="customerEmail" style="display:none;" value="<?php echo $_SESSION["userEmail"];?>">
    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/libs/jquery-1.9.1.min.js"></script>
<script src="js/libs/jquery-ui-1.10.0.custom.min.js"></script>
<script src="js/libs/bootstrap.min.js"></script>

<script src="js/plugins/validate/jquery.validate.js"></script>

<script src="js/Application.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		$("#get_transactions").click(function(){
				 $("#loading").show();
				 $.ajax({
					type:"POST",
					url:"get_bookings.php",
					data:{customerEmail:$("#customerEmail").val()},
					cache:false,
					success:function(result){
						$("#transactions_content").html(result);
						$("#loading").hide();
					},
					error:function(){
						$("#loading").hide();
					}
				});

			$(".pill").removeClass("current_tab");
			$("#get_transactions").addClass("current_tab");
			$(".custom_container").hide();
			$("#transactions_container").show();
		});

		$("#basic_information").click(function(){
			$(".pill").removeClass("current_tab");
			$("#basic_information").addClass("current_tab");
			$(".custom_container").hide();
			$("#basic_information_container").show();
		});

		$("#search_booking").click(function(){
				 $("#loading").show();
				 $.ajax({
					type:"POST",
					url:"booking_details.php",
					data:{bookingId:$("#bookingId").val()},
					cache:false,
					success:function(result){
						$("#bookin_content").html(result);
						$("#loading").hide();
					},
					error:function(){
						$("#loading").hide();
					}
				});
		});

		$(document).on("click","#updateDetails", function(){
			var status = $("#statusChange").val();
			var expectedDate = $("#expectedDate").val();
			var notes = $("#notes").val();
			$("#loading").show();
				 $.ajax({
					type:"POST",
					url:"update_booking_details.php",
					data:{bookingId:$("#bookingId").val(), status:status, expectedDate:expectedDate,notes:notes},
					cache:false,
					success:function(result){
						alert("Details Updated Successfully");
						$("#loading").hide();
						location.reload();
					},
					error:function(){
						$("#loading").hide();
					}
				});
		});
	});
</script>

	<div id="ajax_result" style="display:none;">
		
	</div>
	<div id="loading">
		
	</div>
  </body>
</html>

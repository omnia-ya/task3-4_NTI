<?php
session_start(); 
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bank Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  	.container{
  		padding-top:50px; 
  		padding-right: 300px;
  		padding-left: 300px;
  	}
  	a{
  		text-decoration: none !important;
  	}
  </style>
</head>
<body>
	<div class="container">
		
		<h1 style="text-align: center;">Bank Application <span style="color: #f7e220">$</span></h1>
		<form method="post" action="bank3-4.php" style="margin-top: 50px">
			<div class="row">
			    <div class="col">
			      <input name="name" type="text" class="form-control" placeholder="Client name">
			    </div>
			    <div class="col">
			      <input name="loan" type="text" class="form-control" placeholder="Loan">
			    </div>
			</div>
			<div style="margin-top: 20px">
			      <input name="years" type="text" class="form-control" placeholder="Number of years">
			</div>
			<div style="margin-top: 20px">
			    <button type="submit" class="btn btn-dark btn-block">Calculate</button>
			</div>

			<?php
					if(isset($_SESSION['msg'])){
						echo($_SESSION['msg']);
					}
					if(isset($_SESSION['msg2'])){
						echo ($_SESSION['msg2']);
					}
			?>
		</form>
	</div>

</body>
</html>
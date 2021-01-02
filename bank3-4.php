<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Client data</title>
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
		<?php
			if($_POST['name'] == '' OR $_POST['loan'] == '' OR $_POST['years'] == ''){
				header('Location:task3-4.php');
				$msg = "<div class='alert alert-danger' style='margin-top:20px'>Please inter the data</div>";
				$_SESSION['msg'] = $msg;
			
			}
			if(!is_numeric($_POST['loan']) OR !is_numeric($_POST['years'])){
				header('Location:task3-4.php');
				$msg2 = "<div class='alert alert-danger' style='margin-top:20px'>Please inter a correct number</div>";
				$_SESSION['msg2'] = $msg2;
			}
			if($_POST['years'] <= 3){
				$rateValue = ($_POST['loan'] * 0.1) *$_POST['years'];
			}
			else if ($_POST['name'] > 3){
				$rateValue = ($_POST['loan'] * 0.15) *$_POST['years'];
			}
		 ?>
		<div class="alert alert-primary">
			<b>Client:</b> <?php print_r(ucfirst($_POST['name'])) ?>
		</div>
		<div class="alert alert-primary">
			<b>Rate value:</b> <?php echo $rateValue; ?>
		</div>
		<div class="alert alert-secondary">
			<b>Total after rate:</b> <?php echo $total = $_POST['loan'] + $rateValue; ?> 
		</div>
		<div class="alert alert-secondary">
			<b>Payment: </b> <?php echo $total = $total / ($_POST['years']*12); ?> <b>in month</b>
		</div>
		<a href="logout3-4.php"><button type="submit" class="btn btn-outline-danger btn-block col" >Logout</button></a>
		
	</div>
</body>
</html>
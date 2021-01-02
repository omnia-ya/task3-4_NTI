<?php
	session_start();
	session_unset();
	session_destroy();
	header('Location:task3-4.php');
 ?>
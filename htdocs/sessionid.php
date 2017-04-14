<?php
	
	require "pagseguro/app/Checkout.class.php";
	
	$checkout = new Checkout();
	$checkout->printSessionId();
	
?>
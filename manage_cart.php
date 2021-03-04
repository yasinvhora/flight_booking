<?php
	include 'simple_config.php';	
	include 'add_ticket.php';
	print_r($_POST);	
	$flight_id=$_POST['flight_id'];
	
	$type=$_POST['type'];

	$obj=new add_to_cart();

	if($type=='add'){
		$obj->addTicket($flight_id);
		?>
			
		<?php
	}

	if($type=='remove'){
		$obj->updateTicket($flight_id);
	}

	if($type=='update'){
		$obj->removeTicket($flight_id);
	}
	echo $obj->totalTicket(); 

?>
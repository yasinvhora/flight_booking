<?php

	class add_to_cart{
		function addTicket($flight_id){
			$_SESSION['cart'][$flight_id]=$flight_id;
		
		}

		function updateTicket($flight_id,$seat){
			if(isset($_SESSION['cart'][$flight_id])){
				$_SESSION['cart'][$flight_id]=$flight_id;
			}
		}

		function removeTicket($flight_id){
			if(isset($_SESSION['cart'][$flight_id])){
				unset($_SESSION['cart'][$flight_id]);
			}
			
		}

		function emptyTicket(){
			unset($_SESSION['cart']);
			
		}

		function totalTicket(){
			if(isset($_SESSION['cart'])) {
				return count($_SESSION['cart']);
			}
			else{
				return 0;
			}
			
			
		}
	}


?>
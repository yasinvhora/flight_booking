<?php



function get_flight($conn,$flight_id=''){
	$sql="SELECT flight_list.id  as flight_id,flight_list.*,
                            airlines_list.id,airlines_list.airline_name,airlines_list.logo_image,
                             airport_list.id,airport_list.airport, 
                             airport_list_2.id,airport_list_2.airport as airport1 
                             FROM flight_list,airlines_list,airport_list,airport_list_2 WHERE flight_list.airline_name=airlines_list.id AND flight_list.to_airport=airport_list.id AND flight_list.from_airport=airport_list_2.id AND flight_list.status='1'AND ";

	if($flight_id!=''){
		$sql.= " flight_list.id=$flight_id ";
	}

	$res=mysqli_query($conn,$sql);
	$data = array();

	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
}

function get_flight_search($conn,$flight_id='',$search_str=''){
	$sql="SELECT flight_list.id  as flight_id,flight_list.*,
                            airlines_list.id,airlines_list.airline_name,airlines_list.logo_image,
                             airport_list.id,airport_list.airport, 
                             airport_list_2.id,airport_list_2.airport as airport1 
                             FROM flight_list,airlines_list,airport_list,airport_list_2 WHERE flight_list.airline_name=airlines_list.id AND flight_list.to_airport=airport_list.id AND flight_list.from_airport=airport_list_2.id AND flight_list.status='1'AND ";

   if($search_str!=''){
                   
                    $from_flight=$search_str['from_flight'];
                    $to_flight=$search_str['to_flight'];
		$sql.="airport_list.airport='$from_flight' and airport_list_2.airport='$to_flight' ";
		 
	}
	$res=mysqli_query($conn,$sql);
	$data = array();

	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
}

function get_all_list($conn){
	$sql="SELECT flight_list.id  as flight_id,flight_list.*,
                            airlines_list.id,airlines_list.airline_name,airlines_list.logo_image,
                             airport_list.id,airport_list.airport, 
                             airport_list_2.id,airport_list_2.airport as airport1 
                             FROM flight_list,airlines_list,airport_list,airport_list_2 WHERE flight_list.airline_name=airlines_list.id AND flight_list.to_airport=airport_list.id AND flight_list.from_airport=airport_list_2.id AND flight_list.status='1'";

	$res=mysqli_query($conn,$sql);
	$data = array();

	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
	 
}

?>





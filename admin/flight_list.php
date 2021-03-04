<?php
	include "./include/header.php";
    $conn=mysqli_connect("localhost","root","root","flight_booking_db");
    if(isset($_GET['type']) && $_GET['type']!=''){
  $type=mysqli_real_escape_string($conn,$_GET['type']);
  if($type=='status'){
    $operation=mysqli_real_escape_string($conn,$_GET['operation']);
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    if($operation=='active'){
      $status='1';
    }else{
      $status='0';
    }
    $update_status_sql="update flight_list set status='$status' where id='$id'";
    mysqli_query($conn,$update_status_sql);
  
  }

}
?>

			<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            	 <div class="overview-wrap">
                                    <h2 class="title-1">Flight List Data</h2>
                                    <a href="manage_flight_list.php" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</a>
                                </div><br>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Airline Name</th>
                                                <th>to Airport</th>
                                                <th>From Airport</th>
                                                
                                                <th>Status</th>
                                                <th>Update</th>
                                                
                                                <th class="text-right">Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php

                                              $sql_1="SELECT flight_list.id as flight_id,flight_list.*, airport_list.id,airport_list.airport, airport_list_2.id,airport_list_2.airport as airport1 FROM flight_list,airport_list,airport_list_2 WHERE flight_list.to_airport=airport_list.id AND flight_list.from_airport=airport_list_2.id"; 


                                                $res_1=mysqli_query($conn,$sql_1);

                                                        while($list=mysqli_fetch_assoc($res_1)){
                                    
                                                        ?>
                                            <tr>
                                                <td><?php echo $list['airline_name'] ?></td>
                                                <td><?php echo $list['airport'] ?></td>
                                                <td><?php echo $list['airport1'] ?></td>
                                                
                                                <td> 
                            <?php
                                if($list['status'] == 1)
                                    {
                                    echo "<span class='btn btn-primary btn-sm'><a href='?type=status&operation=deactive&id=".$list['flight_id']."' style='color:white;'>Active</a></span>&nbsp;";
                                    }
                                else
                                    {
                                    echo "<span class='btn btn-danger btn-sm'><a href='?type=status&operation=active&id=".$list['flight_id']."' style='color:white;'>Deactive</a></span>&nbsp;&nbsp;&nbsp;";
                                    }
                            ?>  
                            </td>                                                
                                                <td><a href="manage_city.php?id=<?php echo $list['id'] ?>" type="button" style="color: white;" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>&nbsp;Update</a></td>
                                                <td><a href="?type=delete&id=<?php echo $list['id'] ?>" type="button" style="color: white;" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>&nbsp;Delete</a></td>
                                              
                                            </tr>
                                           <?php
                                           	
                                           	}
                                           ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
	include "./include/footer.php";
?>
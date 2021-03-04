<?php
	include "./include/header.php";
    $obj=new query();
    if(isset($_GET['type']) && $_GET['type']=='delete'){
    $id=$obj->get_safe_str($_GET['id']);
    $condition_arr=array('id'=>$id);
    $obj->deleteData('airport_list',$condition_arr);
}
    $conn=mysqli_connect("localhost","root","root","flight_booking_db");
?>

			<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            	 <div class="overview-wrap">
                                    <h2 class="title-1">Airport Data</h2>
                                    <a href="manage_airport.php" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</a>
                                </div><br>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>City Name</th>
                                                <th>Airport Name</th>
                                                <th>Added On</th>
                                                <th>Update</th>
                                                <th class="text-right">Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        		$sql="select airport_list.*,city.id as city_id,city.city_name from airport_list,city where airport_list.city_id=city.id  order by airport_list.id desc";
                                        		$res=mysqli_query($conn,$sql);
                                                while($list=mysqli_fetch_assoc($res)){	
                                        	?>
                                            <tr>
                                                <td><?php echo $list['city_name'] ?></td>
                                                <td><?php echo $list['airport'] ?></td>
                                                <td><?php echo $list['added_on'] ?></td>
                                                <td><a href="manage_airport.php?id=<?php echo $list['id'] ?>" type="button" style="color: white;" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>&nbsp;Update</a></td>
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
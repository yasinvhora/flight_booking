<?php
include "./include/header.php";
$conn=mysqli_connect("localhost","root","root","flight_booking_db");

$obj=new query();

$airline_name='';

$id='';



if(isset($_POST['submit'])){
    $airline_name=$obj->get_safe_str($_POST['airline_name']);
    $to_airport=$obj->get_safe_str($_POST['to_airport']);
    $from_airport=$obj->get_safe_str($_POST['from_airport']);
    $to_time=$obj->get_safe_str($_POST['to_time']);
    $from_time=$obj->get_safe_str($_POST['from_time']);
    $seat=$obj->get_safe_str($_POST['seat']);
    $price=$obj->get_safe_str($_POST['price']);
    $added_on=date('y-m-d h:i:s');
    $updated_on=date('y-m-d h:i:s');
    
    $condition_arr=array('airline_name'=>$airline_name,'to_airport'=>$to_airport,'from_airport'=>$from_airport,'to_time'=>$to_time,'from_time'=>$from_time,'seat'=>$seat,'price'=>$price,'status'=>'1','added_on'=>$added_on,'updated_on'=>$updated_on);
    
  
        $obj->insertData('flight_list',$condition_arr);
  
    
    //header('location:users.php');
    ?>
    <script>
    alert("Success");
    window.location.href='flight_list.php';
    </script>
    <?php
}
?>
  <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Manage Flight</h3>
                                        </div>
                                        <hr>
                                        <form method="POST" novalidate="novalidate">
                             
                                        	<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label ffor="cc-payment" class="control-label mb-1">Select Airline</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="airline_name" id="SelectLm" class="form-control-sm form-control">
                                                    	<option value="0">Please select</option>
                                                    	
                                                        <?php
                                                        	$sql="SELECT * FROM airlines_list";
                                                        	$res=mysqli_query($conn,$sql);
                                                        	while($list=mysqli_fetch_assoc($res)){
                                                        ?>
                                                        <option value="<?php echo $list['id'] ?>">
                                                        	<?php echo $list['airline_name']; ?></option>
                                                  		<?php
                                                  			}
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label ffor="cc-payment" class="control-label mb-1">To City and Airport</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="to_airport" id="SelectLm" class="form-control-sm form-control">
                                                    	<option value="0">Please select</option>
                                                    	
                                                        <?php
                                                        	$sql_1="select airport_list.*,city.id as city_id,city.city_name from airport_list,city where airport_list.city_id=city.id  order by airport_list.id desc";
                                                        	$res_1=mysqli_query($conn,$sql_1);
                                                        	while($list_1=mysqli_fetch_assoc($res_1)){
                                                        ?>
                                                        <option value="<?php echo $list_1['id'] ?>">
                                                        	<?php echo $list_1['airport'] ?>
                                                        	&nbsp;<?php echo $list_1['city_name'] ?></option>
                                                  		<?php
                                                  			}
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label ffor="cc-payment" class="control-label mb-1">From City and Airport</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="from_airport" id="SelectLm" class="form-control-sm form-control">
                                                    	<option value="0">Please select</option>
                                                    	
                                                        <?php
                                                        	$sql_2="select airport_list_2.*,city.id as city_id,city.city_name from airport_list_2,city where airport_list_2.city_id=city.id  order by airport_list_2.id desc";
                                                        	$res_2=mysqli_query($conn,$sql_2);
                                                        	while($list_2=mysqli_fetch_assoc($res_2)){
                                                        ?>
                                                        <option value="<?php echo $list_2['id'] ?>">
                                                        	<?php echo $list_2['airport']; ?>&nbsp;<?php echo $list_2['city_name'] ?></option>
                                                  		<?php
                                                  			}
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label ffor="cc-payment" class="control-label mb-1">To Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                    <input type="datetime-local" id="text-input" name="to_time" placeholder="Text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">

                                                <div class="col col-md-3">
                                                    <label ffor="cc-payment" class="control-label mb-1">From Time</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                    <input type="datetime-local" id="text-input" name="from_time" placeholder="Text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label ffor="cc-payment" class="control-label mb-1">Seats</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                    <input type="text" id="text-input" name="seat" placeholder="Text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label ffor="cc-payment" class="control-label mb-1">Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                    <input type="text" id="text-input" name="price" placeholder="Text" class="form-control">
                                                </div>
                                            </div>
                                            
                                                <button type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span>Submit</span>
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                       
<?php
	include "./include/footer.php";

?>
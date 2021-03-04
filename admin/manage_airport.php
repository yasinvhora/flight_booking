<?php
include "./include/header.php";
$conn=mysqli_connect("localhost","root","root","flight_booking_db");
	$obj=new query();

$result=$obj->getData('city','*','','id','desc');



$airport='';
$city_id='';
$id='';

if(isset($_GET['id']) && $_GET['id']!=''){
	$id=$obj->get_safe_str($_GET['id']);
	$condition_arr=array('id'=>$id);
	$result=$obj->getData('airport_list','*',$condition_arr,'','','','');
	
	$city_id=$result['0']['city_id'];
	$airport=$result['0']['airport'];
	
}
if(isset($_POST['submit'])){
	$city_id=$obj->get_safe_str($_POST['city_id']);
	$airport=$obj->get_safe_str($_POST['airport']);

	$added_on=date('y-m-d h:i:s');
	$updated_on=date('y-m-d h:i:s');
	
	$condition_arr=array('city_id'=>$city_id,'airport'=>$airport,'added_on'=>$added_on,'updeted_on'=>$updated_on);
	
	
		if($id==''){
		$obj->insertData('airport_list',$condition_arr);
	}else{
		$obj->updateData('airport_list',$condition_arr,'id',$id);
	}
	
	
	
	//header('location:users.php');
	?>
	<script>
	alert("Success");
	window.location.href='airport.php';
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
                                            <h3 class="text-center title-2">Manage Airport</h3>
                                        </div>
                                        <hr>
                                        <form method="POST" novalidate="novalidate">
                                        	<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label ffor="cc-payment" class="control-label mb-1">Select City</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="city_id" id="SelectLm" class="form-control-sm form-control">
                                                    	<option value="0">Please select</option>
                                                    	
                                                        <?php
                                                        	$sql="SELECT * FROM city";
                                                        	$res=mysqli_query($conn,$sql);
                                                        	while($list=mysqli_fetch_assoc($res)){
                                                        ?>
                                                        <option value="<?php echo $list['id'] ?>">
                                                        	<?php echo $list['city_name']; ?></option>
                                                  		<?php
                                                  			}
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Airport Name</label>
                                                <input type="text" id="cc-pament" name="airport"  class="form-control" value="<?php echo $airport;?>" placeholder="Enter Airport">
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
<?php
include "./include/header.php";
$obj=new query();

$city_name='';
$id='';

if(isset($_GET['id']) && $_GET['id']!=''){
	echo $id=$obj->get_safe_str($_GET['id']);
	$condition_arr=array('id'=>$id);
	$result=$obj->getData('city','*',$condition_arr,'','','','');
	
	$city_name=$result['0']['city_name'];
	
}

if(isset($_POST['submit'])){
	$city_name=$obj->get_safe_str($_POST['city_name']);
	$added_on=date('y-m-d h:i:s');
	$updated_on=date('y-m-d h:i:s');
	
	$condition_arr=array('city_name'=>$city_name,'added_on'=>$added_on,'updated_on'=>$updated_on);
	
	if($id==''){
		$obj->insertData('city',$condition_arr);
	}else{
		$obj->updateData('city',$condition_arr,'id',$id);
	}
	
	//header('location:users.php');
	?>
	<script>
	alert("Success");
	window.location.href='city.php';
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
                                            <h3 class="text-center title-2">Add City</h3>
                                        </div>
                                        <hr>
                                        <form method="POST" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">City Name</label>
                                                <input type="text" id="cc-pament" name="city_name"  class="form-control" value="<?php echo $city_name ?>" placeholder="Enter City">
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
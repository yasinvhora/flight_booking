<?php
include "./include/header.php";
$obj=new query();

$airline_name='';

$id='';

if(isset($_GET['id']) && $_GET['id']!=''){
	$id=$obj->get_safe_str($_GET['id']);
	$condition_arr=array('id'=>$id);
	$result=$obj->getData('airlines_list','*',$condition_arr,'','','','');
	
	$airline_name=$result['0']['airline_name'];
	
}

if(isset($_POST['submit'])){
	 if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $time_stmp_FileName = date('Y-m-d h:i:s').'.'.$file_ext;
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"./images/".$time_stmp_FileName);
         
      }else{
         print_r($errors);
      }
   }

	$airline_name=$obj->get_safe_str($_POST['airline_name']);
	$added_on=date('y-m-d h:i:s');
	$updated_on=date('y-m-d h:i:s');
	
	$condition_arr=array('airline_name'=>$airline_name,'logo_image'=>$time_stmp_FileName,'added_on'=>$added_on,'updeted_on'=>$updated_on);
	
	if($id==''){
		$obj->insertData('airlines_list',$condition_arr);
	}else{
		$obj->updateData('airlines_list',$condition_arr,'id',$id);
	}
	
	//header('location:users.php');
	?>
	<script>
	alert("Success");
	window.location.href='airline.php';
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
                                            <h3 class="text-center title-2">Manage Airlines</h3>
                                        </div>
                                        <hr>
                                        <form method="POST" novalidate="novalidate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Airline Name</label>
                                                <input type="text" id="cc-pament" name="airline_name"  class="form-control" value="<?php echo $airline_name ?>" placeholder="Enter Airline Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Airline Name</label>
                                                <input type="file" id="cc-pament" name="image"  class="form-control" value="">
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
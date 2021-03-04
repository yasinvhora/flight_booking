<?php
	include "./include/header.php";
	$obj=new query();
	if(isset($_GET['type']) && $_GET['type']=='delete'){
	$id=$obj->get_safe_str($_GET['id']);
	$condition_arr=array('id'=>$id);
	$obj->deleteData('airlines_list',$condition_arr);
}

$result=$obj->getData('airlines_list','*','','id','desc');
?>

			<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            	 <div class="overview-wrap">
                                    <h2 class="title-1">Airlines Data</h2>
                                    <a href="manage_airlines.php" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</a>
                                </div><br>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Airline Name</th>
                                                <th>Logo Image</th>
                                                <th>Added on</th>
                                                <th>Update</th>

                                                <th class="text-right">Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        		if(isset($result['0'])){
                                        			foreach ($result as $list) {	
                                        			
                                        	?>
                                            <tr>
                                                <td><?php echo $list['airline_name'] ?></td>
                                                <td><img src="./images/<?php echo $list['logo_image'] ?>" style="width:60px; height: 50px;"></td>
                                                <td><?php echo $list['added_on'] ?></td>
                                                <td><a href="manage_airlines.php?id=<?php echo $list['id'] ?>" type="button" style="color: white;" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>&nbsp;Update</a></td>
                                                <td><a href="?type=delete&id=<?php echo $list['id'] ?>" type="button" style="color: white;" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>&nbsp;Delete</a></td>
                                              
                                            </tr>
                                           <?php
                                           	}
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
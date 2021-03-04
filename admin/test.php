<?php
	include "./database/config.inc.php";
	$obj=new query();
	$result=$obj->getdata('airport','*','city','id','','','desc');
	
	//$obj1=new query();
//	$added_on=date('y-m-d h:i:s');
//	$updated_on=date('y-m-d h:i:s');
//	$condition_arr=array('city_name'=>'rajkoy','added_on'=>$added_on,'updated_on'=>$updated_on);
//	$result=$obj1->insertData('city',$condition_arr);
//	echo '<pre>';
	print_r($result);
?>
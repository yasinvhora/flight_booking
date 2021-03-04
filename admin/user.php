<?php
include "./include/header.php";
$obj=new query();
if(isset($_GET['type']) && $_GET['type']=='delete'){
$id=$obj->get_safe_str($_GET['id']);
$condition_arr=array('id'=>$id);
$obj->deleteData('users',$condition_arr);
}

$result=$obj->getData('users','*','','id','desc');
?>

<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="overview-wrap">
<h2 class="title-1">User Data</h2>

</div><br>
<div class="table-responsive table--no-card m-b-30">
<table class="table table-borderless table-striped table-earning">
<thead>
<tr>
<th>username</th>
<th>email</th>
<th>mobile</th>

<th>Delete</th>

</tr>
</thead>
<tbody>
<?php
if(isset($result['0'])){
foreach ($result as $list) {

?>
<tr>
<td><?php echo $list['user_name'] ?></td>
<td><?php echo $list['email'] ?></td>
<td><?php echo $list['mobile'] ?></td>


<td><a href="?type=delete&id=<?php echo $list['id'] ?>" type="button" style="color: white;" class="btn btn-danger btn-sm">
<i class="fa fa-trash"></i>Delete</a></td>

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
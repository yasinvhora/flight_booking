<?php
  include "./include/header2.php";
  if(isset($_GET['flight_search'])){

        $from_flight=$_GET['from_flight'];
         $to_flight=$_GET['to_flight'];
         $departing_time=$_GET['departing_time'];
                 
                $search_data=array('from_flight'=>$from_flight,'to_flight'=>$to_flight,'departing_time'=>$departing_time);
               

                
  }
?>

 <!-- page output -->
    <div class="padding-tb-40px background-light-grey">
        <div class="container">

            <div class="row">

                <!-- Sidebar -->
                <div class="col-lg-12 sticky-sidebar">
                    
                    <!-- Hotels Search -->
                    

                    <!-- Price Search -->
                
                    <!-- Price Search -->

                    <!-- Price Search -->
                
                                       <!-- Price Search -->

               
 <?php
    
                            
                        $flight_array=get_flight_search($conn,$key,$search_data);
                        $avi=sizeof($flight_array);
                        
                       if($avi!=0){
                       for($i=0;$i<sizeof($flight_array);$i++){
                       
                       $flight_id1=$flight_array[$i]['flight_id'];
                    
                        $airline_name=$flight_array[$i]['airline_name'];
                        $airport=$flight_array[$i]['airport'];
                        $airport1=$flight_array[$i]['airport1'];
                        $logo_image=$flight_array[$i]['logo_image'];
                        $to_time=$flight_array[$i]['to_time'];
                        $from_time=$flight_array[$i]['from_time'];
                        $price=$flight_array[$i]['price'];

                          
?>
                    <!-- flight post -->
                    <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="./admin/images/<?php echo $logo_image; ?>" alt="">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px">from:  <?php echo $airport ?></span>to: <?php echo $airport1 ?></a></h3>
                                    <br>

                                    <a href="javascript:void(0)" onclick="manage_cart('<?php echo $flight_id1 ?>','add')" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Booking Now </a>
                                    <small class="text-uppercase text-extra-small margin-right-30px">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                                            Desparture :  <span class="text-third-color margin-right-5px"><?php echo $to_time ?></span> </a>
                                        </small>
                                    <small class="text-uppercase text-extra-small">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-down margin-right-5px"></i>
                                            Return :  <span class="text-third-color margin-right-5px"><?php echo $from_time ?></span> </a>
                                        </small>
                                    <div class="claerfix"></div>
                                    <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">Rs. <?php echo $price ?></strong>
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Oneway flight</span></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
       
                    <!-- // flight post -->
								<?php }}
										else{
										echo "<h6>No flights are available !</h6>";}
								

 									?>

                    <!-- flight post -->
                   

                    
                </div>
                <!-- //  Content -->

            </div>
            <!--// row -->

        </div>
    </div>
    <!-- //  page output -->


 
<?php
	include "./include/footer.php";
?>
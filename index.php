<?php
	include "./include/header.php";
   
?>
 <!-- ======= New Hotels  ======= -->
<div class="padding-tb-40px background-light-grey">
        <div class="container">

            <div class="row">
		  <!-- Content -->
                <div class="col-lg-12">
                    <div class="row">
                        <?php
                            $sql_1="SELECT flight_list.id  as flight_id,flight_list.*,
                            airlines_list.id,airlines_list.airline_name,airlines_list.logo_image,
                             airport_list.id,airport_list.airport, 
                             airport_list_2.id,airport_list_2.airport as airport1 
                             FROM flight_list,airlines_list,airport_list,airport_list_2 WHERE flight_list.airline_name=airlines_list.id AND flight_list.to_airport=airport_list.id AND flight_list.from_airport=airport_list_2.id AND flight_list.status='1'"; 
                            $res_1=mysqli_query($conn,$sql_1);
                                while($list=mysqli_fetch_assoc($res_1)){
                        ?>

                        <!-- flight post -->
                        <div class="col-sm-6 col-lg-4 margin-bottom-30px">
                             <div class="hotel-grid background-white border border-grey-1 with-hover">
                                <div class="hotel-img position-relative">
                                    <img src="./admin/images/<?php echo $list['logo_image'] ?>">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                                <div class="padding-40px">
                                    <h3 class="text-uppercase text-medium"><a href="#" class="text-dark font-weight-700"><?php echo $list['airline_name'] ?></a></h3>
                                    <small class="d-block text-uppercase text-extra-small margin-bottom-10px">
                                    <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                                    Desparture :  <span class="text-third-color margin-right-5px"><?php echo $list['to_time'] ?></span> </a>
                                </small>
                                    <small class="d-block text-uppercase text-extra-small">
                                    <a href="#" class="text-grey-4"><i class="fa fa-chevron-down margin-right-5px"></i>
                                    Return :  <span class="text-third-color margin-right-5px"><?php echo $list['from_time'] ?></span> </a>
                                </small>
                                    <i class="d-block padding-tb-8px text-grey-2 "><span class="margin-right-30px">from: <?php echo $list['airport'] ?></span>to: <?php echo $list['airport1'] ?></i>
                                    <div class="claerfix"></div>
                                    <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">Rs. <?php echo $list['price'] ?></strong>
                                        <br>
                                        Seats : <?php echo $list['seat'] ?>
                                        <i class="d-block padding-tb-8px text-grey-2"><span class="margin-right-40px">Oneway flight</span></i>
                                    </div>
                                    <a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['flight_id'] ?>','add')" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase ">Booking Now </a>
                                </div>
                            </div>
                        </div>
                        <!-- // flight post -->
                        <?php
                            }
                        ?>
                    </div>
                    <!-- //  Content -->
                </div>
            </div>
            <!--// row -->

        </div>
    </div>

<?php
	include "./include/footer.php";
?>
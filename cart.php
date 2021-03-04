<?php
	include './include/header2.php';
    $user_session_id=$_SESSION['id'];
    if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
    ?>
    <script>
        window.location.href='index.php';
    </script>
    <?php
}
?>              

    <!-- page output -->
    <div class="padding-tb-40px background-light-grey">
        <div class="container">
            <div class="row justify-content-center">
					

                <div class="col-lg-9">

                    <!-- flight post -->
                    <?php
                     foreach ($_SESSION['cart'] as $key => $value) {
                        $flight_array=get_flight($conn,$key);
                        $flight_id=$flight_array[0]['flight_id'];
                        $airline_name=$flight_array[0]['airline_name'];
                        $airport=$flight_array[0]['airport'];
                        $airport1=$flight_array[0]['airport1'];
                        $logo_image=$flight_array[0]['logo_image'];
                        $to_time=$flight_array[0]['to_time'];
                        $from_time=$flight_array[0]['from_time'];
                        $price=$flight_array[0]['price'];
                        
                          
                    ?>
                                        <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">

                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="./admin/images/<?php echo $logo_image ?>">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px">from: <?php echo $airport1 ?></span>to: <?php echo $airport ?></a></h3>
                                    <a href="index.php" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px text-small">Change Flight </a>
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
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">Rs. <?php echo $price ?></strong>Person
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Oneway flight</span></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php
                        	}
                        ?>
                    <!-- // flight post -->

                    <!-- form -->
                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Product Billing Detais</h3>
                        <div class="padding-top-10px">
                            <form method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Full Name</label>
                                        <input type="text" name="first_name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Last Name </label>
                                        <input type="text" name="last_name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Email </label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Mobile  </label>
                                        <input type="text" name="mobile" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Country  </label>
                                        <input type="text" name="country" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">City   </label>
                                        <input type="text" name="city" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Address</label>
                                    <textarea class="form-control" name="address" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Payment Method</label>
                                    <input type="radio" class="form-control" value="cod"  name="payment_method" rows="3">Cash On Delivery</input>
                                    <input type="radio" class="form-control" value="pay_you"  name="payment_method" rows="3">Pay you</input>
                                </div>
                                <a href="index.php" class="btn-sm btn-lg text-dark text-center font-weight-bold text-uppercase rounded-0 padding-tb-10px padding-lr-30px background-grey-1 margin-right-20px">Go Home</a>
                                <button type="submit" name="book_flight_btn"  class="btn-sm btn-lg  background-main-color text-white text-center font-weight-bold text-uppercase rounded-0 padding-tb-10px padding-lr-30px">CONFIRM BOOKING</button>
                            </form>
                        </div>
                    </div>
                    <!-- form -->


                </div>
                <!-- // col-lg-8 -->

            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </div>
    <!-- //  page output -->
<?php
    if(isset($_POST['book_flight_btn'])){

         




        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $country=$_POST['country'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $payment_method=$_POST['payment_method'];
        $payment_status='pending';
        if($payment_method=='cod'){
            $payment_status='success';
        }
        $added_on=date('y-m-d h:i:s');

        $book_flight_sql="INSERT INTO `booked_flight` (`user_id`, `flight_id`, `airline_name`, `to_airport`, `from_airport`, `to_time`, `from_time`, `price`, `first_name`, `last_name`, `email`, `mobile`, `city`, `country`, `address`, `payment_method`, `payment_status`, `added_on`) VALUES ('$user_session_id', '$flight_id', '$airline_name', '$airport', '$airport1', '$to_time', '$from_time', '$price', '$first_name', '$last_name', '$email', '$mobile', '$city', '$country', '$address', '$payment_method', '$payment_status', '$added_on');";
        $result_1=mysqli_query($conn,$book_flight_sql);
       echo  $new_book_flight_id=mysqli_insert_id($conn);

       $sql_2="INSERT INTO `book_flight_ticket_detalis` (`booked_flight_id`, `price`, `added_on`) VALUES ('$new_book_flight_id', '$price', '$added_on')";
       mysqli_query($conn,$sql_2);
       ?>
       <script type="text/javascript">
           alert("Thank you !! Your Ticked Placed Successfully");
           window.location.href='thank_you.php';
       </script>
       <?php
    
    }
?>

<?php                           
   include './include/footer.php';

?>
<?php
	include "./include/header2.php";
?>

<?php
 $user_session_id=$_SESSION['id'];
 $ticket_sql="SELECT * FROM `booked_flight` WHERE user_id='$user_session_id'";
 $res=mysqli_query($conn,$ticket_sql);
?>




    <!-- page output -->
    <div class="padding-tb-40px background-light-grey">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8">
                    <?php
                        while($row=mysqli_fetch_assoc($res)){
                    ?>
                    <!-- form -->
                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px"><i class="fa fa-check-circle-o text-lime" aria-hidden="true"></i> Booking is complete</h3>

                        <ul class="margin-0px padding-0px list-unstyled">
                            <li class="padding-tb-8px border-bottom-1 border-grey-1"><strong class="margin-right-30px">User Id</strong><?php echo $row['user_id'] ?></li>
                            <li class="padding-tb-8px border-bottom-1 border-grey-1"><strong class="margin-right-30px">Flight No.</strong><?php echo $row['flight_id'] ?></li>
                            <li class="padding-tb-8px border-bottom-1 border-grey-1"><strong class="margin-right-30px">Airline Name</strong><?php echo $row['airline_name'] ?></li>
                            <li class="padding-tb-8px border-bottom-1 border-grey-1"><strong class="margin-right-30px">To Airport & From Airport</strong><?php echo $row['to_airport'] ?> From Airport : <?php echo $row['from_airport'] ?></li>
                           


                            <li class="padding-tb-8px border-bottom-1 border-grey-1"><strong class="margin-right-30px">To Time & From Time</strong><?php echo $row['to_time'] ?> From Time : <?php echo $row['from_time'] ?> </li>
                            
                            <li class="padding-tb-8px border-bottom-1 border-grey-1"><strong class="margin-right-30px">Price</strong>Rs. <?php echo $row['from_time'] ?></li>
                            <li class="padding-tb-8px border-bottom-1 border-grey-1"><strong class="margin-right-30px">Name </strong><?php echo $row['first_name'] ?> &nbsp;<?php echo $row['last_name'] ?> </li>
                            <li class="padding-tb-8px border-bottom-1 border-grey-1"><strong class="margin-right-30px">Email & Mobile</strong><?php echo $row['email'] ?>&nbsp; <?php echo $row['mobile'] ?></li>
                            <li class="padding-tb-8px border-bottom-1 border-grey-1"><strong class="margin-right-30px">Payment Method</strong><?php echo $row['payment_method'] ?></li>
                            <li class="padding-tb-8px border-bottom-1 border-grey-1"><strong class="margin-right-30px">Payment Status</strong><?php echo $row['payment_status'] ?></li>
                            
                        </ul>
                        <div class="margin-top-15px">
                            <a href="#" class="btn-sm btn-lg text-dark text-center font-weight-bold text-uppercase rounded-0 padding-tb-10px padding-lr-30px background-grey-1 margin-right-20px">Go Home</a>
                            <a href="#" class="btn-sm btn-lg  background-main-color text-white text-center font-weight-bold text-uppercase rounded-0 padding-tb-10px padding-lr-30px">print  Page</a>
                        </div>
                    </div>
                    <!-- form -->
                    <?php
                        }
                    ?>
                    <div class="background-second-color border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 padding-bottom-8px">NEED HELP?</h3>
                        <div class="text-uppercase text-extra-large text-white font-weight-700 padding-bottom-8px">+222 370 447 17</div>
                        <div class="text-uppercase text-medium">Sunday to Friday 9.00am - 7.30pm</div>
                    </div>
                </div>
                <!-- // col-lg-8 -->

            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </div>
    <!-- //  page output -->


  
   
<?php
	include "./include/footer.php";
?>
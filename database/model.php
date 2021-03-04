
<?php
//include 'controller.php';

require_once('controller.php');

       class model{

          	   function getlogin($conn,$data,$table)
          	  {

          	  		$username= $data['username'];
          	  		$password= $data['password'];
                    $sql = "SELECT * from $table where user_name='$username' AND password = '$password'";
                          $query1 = $conn->query($sql);
          	  		if($query1 ->num_rows > 0)
          	  		{
                              $_SESSION['my_user']='yes';
          	  			$_SESSION['user_front_login']=$username;
                                $row = $query1->fetch_assoc();
                                $_SESSION['id']=$row['id'];

                                
          	  			?>
          	  			<script type="text/javascript">

          	  				window.location.href='index.php';
          	  			</script>
          	  			<?php

          	  		}
          	  		else
          	  		{
          	  			echo "<script>alert('invalid username and password')</script>";
          	  		}
          	  		
          	  }
          	  function getsignup($conn,$data,$table)
          	  {
          	  	    $username= $data['username'];
		     	  	$password = $data['password'];
		     	  	 $Mobile = $data['mobile'];
		     	  	 $Address = $data['address'];
		     	  	 $email = $data['email'];
		     	  	 $added_on=date('y-m-d h:i:s');
		     	  	 $updated_on=date('y-m-d h:i:s');

		     	 $sql = "INSERT INTO $table (`user_name`, `email`, `mobile`, `address`, `password`,`added_on`, `updeted_on`) VALUES ('$username','$email','$Mobile','$Address','$password','$added_on','$updated_on')";
		     	  $query = $conn->query($sql);
		     	  if($query)
		     	  {
                          
          	  			?>
          	  			<script type="text/javascript">
          	  				 alert("insert data success");
          	  				window.location.href='login.php';
          	  			</script>
          	  			<?php
		     	  }	else
		     	  {
		     	  	echo mysqli_error($conn);
                    // echo "<script>alert('invalid username and password')</script>".$conn->error($query);
		     	  } 
          	  }
                 function getupdate($conn,$data,$table)
                 {
                        $username2= $data['username'];
                         $password2 = $data['password'];
                          $Mobile2 = $data['mobile'];
                          $Address2 = $data['address'];
                          $email2 = $data['email'];
                          $updated_on2=date('y-m-d h:i:s');

                           $user_id='';
                        $user_id=$_SESSION['id'];
                      

                     //$sql = "INSERT INTO $table (`user_name`, `email`, `mobile`, `address`, `password`,`added_on`, `updeted_on`) VALUES ('$username','$email','$Mobile','$Address','$password','$added_on','$updated_on')";

                     $sql = "UPDATE $table SET `user_name`='$username2',`email`='$email2',`mobile`='$Mobile2',`address`='$Address2',`password`='$password2',`updeted_on`='$updated_on2' WHERE `users`.`id` = '$user_id'";
                    

                      $query = $conn->query($sql);
                      if($query)
                      {
                           $_SESSION['my_user']='yes';
                              $_SESSION['user_front_login']=$username2;
                              ?>
                              <script type="text/javascript">

                                    alert("data update success");
                                       
                              
                                   window.location.href='index.php';
                              </script>
                              <?php
                      }  else
                      {
                         echo mysqli_error($conn);
                    // echo "<script>alert('invalid username and password')</script>".$conn->error($query);
                      } 
                 }
         }
?>
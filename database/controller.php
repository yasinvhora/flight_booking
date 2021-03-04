<?php
    ini_set("display_errors", "1");
        error_reporting(E_ALL);
include 'model.php';
include './simple_config.php';
          $model = new model();
     	  if(isset($_POST['login']))
     	  {    
     	  	$username= $_POST['username'];
     	  	$password = $_POST['password'];
     	  	$data=array('username'=>$username,'password'=>$password);
     	  	$model->getlogin($conn,$data,"users");
     	  }
          
     	  if(isset($_POST['signup']))
     	  {
     	  	$username= $_POST['username'];
     	  	$password = $_POST['password'];
     	  	 $Mobile = $_POST['Mobile'];
     	  	 $Address = $_POST['Address'];
     	  	 $email = $_POST['email'];
     	  	$data=array('username'=>$username,'mobile'=>$Mobile,'address'=>$Address,
     	  		'email'=>$email,'password'=>$password);
     	  	$model->getsignup($conn,$data,"users");
     	  }

            if(isset($_POST['update']))
            {    
              $username= $_POST['username'];
               $password = $_POST['password'];
                $Mobile = $_POST['Mobile'];
                $Address = $_POST['Address'];
                $email = $_POST['email'];
               $data=array('username'=>$username,'mobile'=>$Mobile,'address'=>$Address,
                    'email'=>$email,'password'=>$password);
               $model->getupdate($conn,$data,"users");
            }
          

?>
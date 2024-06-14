<?php
include"dbconfig.php";
if(isset($_REQUEST['okay']))
{
	extract($_REQUEST);
header("location:search.php?city=$city&cat=$category&subcategory=$subcategory");
	}
	########################################
	
if(isset($_REQUEST['booknow']))
{
	extract($_REQUEST);
	echo $q="INSERT INTO `booking`(`work`, `city`, `name`, `mobile`, `address`, `date`, `days`, `hours`, `reg_id`, `status`)  VALUES 
	('$cat','$city','$name','$mobile','$address','$date','$days','$hours','$regid','0')";
	$n=iud($q);
	if($n==1)
	{
		echo'<script>alert("Booking Success We Will Contact You Very Soon");
		window.location="search.php?city='.$city.'&cat='.$cat.'&subcategory='.$subcategory.'";</script>';
	}
}	
##################################################################
if(isset($_REQUEST['login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	$valid=true;
	$query="select * from user where email='$email' and password='$password'";
	
	
	if($valid)
	{
	$login_data=select($query);
	echo $n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		$_SESSION['id']=$email;
		header("location:userhome.php?id=$email");
		}
		
		
			}
	else
	{
		echo "You are not Approved";
	}
	}
		
	}
    


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
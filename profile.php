<?php
//index.php
include "dbconfig.php";
$userid = $_SESSION['id'];
 $query = "SELECT * FROM registration where id=".$_SESSION['id']."";

$result = select($query);

if($row = mysqli_fetch_array($result))
{
$name = $row[1];
$mobile = $row[2];
$email = $row[3];

$city = $row[5];
$address = $row[6];
$experience = $row[7];
$id_proof = $row[8];
$id_picture = $row[9];
$work_type = $row[10];
$subcategory = $row[11];
$picture = $row[12];
}

 $query1 = "SELECT * FROM category where id='$work_type'";

$result1 = select($query1);
if($row1 = mysqli_fetch_array($result1))
{
$category = $row1[1];
}

$query2 = "SELECT * FROM subcategory where id='$subcategory'";

$result2 = select($query2);
if($row2 = mysqli_fetch_array($result2))
{
$subcategory = $row2[2];
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>




<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
      <?php include "nav2.php"?>





</br></br></br></br></br></br></br></br></br>
<div class="container-fluid">
<div class="row">
<div class="col-lg-2">

<div style="margin-left:60px">
 <img src="images/<?=$picture?>" style="height:100px;  border-radius: 50%;"></div>
 <div style="margin-left:30px">

 <h4 style="font-weight:bold;background-color:#299B4F;text-align:center;color:white;font-size:22px"><?=ucwords($name)?>
 </h4>
 </div>
<div style="margin-left:70px">
 <a href="logout.php"><button class="btn btn-danger pill px-4 py-2">Logout</button></a>
 </div>
 </div>
		 


<div class="col-lg-9">

                       
						
						
                           

<br>


<style>
    .div1{
    color:green;
    }
    .div2{
    color:red;
    }
</style>
<div class="container" style="margin-top:1%;margin-bottom:5%;background:white;border-radius:2%;border:1px solid grey">
    <h2 style="font-weight:bold;font-family : 'Monotype Corsiva' ; color : #E6120E ;margin-top:5%" align="center">My Profile</h2><hr>

	<form method="post">
<div align="left" class="container-fluid" style="width:80%;margin-bottom:5% ; font-size : 20px">
    <hr><div class="row">
        <div class="col-md-6 div2" >
            <strong>Full Name:</strong>
        </div>
        <div class="col-md-6 div1">
            <input type = "text" value="<?=$name?>" name="firstname"> 
        </div>
    </div><hr>


    <div class="row">
        <div class="col-md-6 div2">
            <strong>Contact:</strong>
        </div>
        <div class="col-md-6">
           <input type = "text" value="<?=$mobile;?>" name="contact"> 
        </div></div><hr>

    <div class="row">
        <div class="col-md-6 div2">
            <strong>Email Id :</strong>
        </div>
        <div class="col-md-6 div1">
            <input type = "email" value="<?=$email;?>" name="email" readonly> 
        </div>
    </div><hr>
    

     <div class="row">
        <div class="col-md-6 div2">
            <strong>City :</strong>
        </div>
        <div class="col-md-6 div1">
          <input type = "text" value="<?=$city;?>" name="city"> 
        </div>
    </div><hr>

    <div class="row">
        <div class="col-md-6 div2">
            <strong>Address :</strong>
        </div>
        <div class="col-md-6 div1">
            <textarea name="address"><?=$address;?></textarea>
        </div>
    </div><hr>
    

     <div class="row">
        <div class="col-md-6 div2">
            <strong>Experience(In Years) :</strong>
        </div>
        <div class="col-md-6 div1">
           <input type = "text" value="<?=$experience;?>" name="experience"> 
        </div>
    </div><hr>

   
	
	<div class="row">
        <div class="col-md-6 div2">
            <strong>Work SubType:</strong>
        </div>
        <div class="col-md-6 div1">
           <?=$category;?> [<?=$subcategory;?>]
        </div>
    </div><hr>


     <div class="row">
        <div class="col-md-6 div2">
            <strong>ID Proof :</strong>
        </div>
        <div class="col-md-6 div1">
          <img src="images/<?=$id_picture?>" style="height:100px;  border-radius: 10%;">
        </div>
     </div><hr>

    
    <input type="submit" name="edit" value="Update Profile" class="btn btn-primary" style="width:100%">
    </div></div>

</form>		
                           
                    </div>

</div>
<div class="col-lg-1">


</div>


</div>
</div></br></br>

                    <!-- Modal content-->
      <?php include"footer.php";?>
  
  </div>               
              

<?php 
include "dbconfigure.php";
if(isset($_POST['edit']))
{
$firstname1 = $_POST['firstname'];
$contact1 = $_POST['contact'];
//$email1 = $_POST['email'];

$city1 = $_POST['city'];
$address1 = $_POST['address'];
$experience1 = $_POST['experience'];
$query5 = "update registration set name='$firstname1' , mobile='$contact1',city='$city1',address='$address1',experience='$experience1' where id=$userid";
$n = my_iud($query5);
if($n ==1)
{
echo '<script>alert("Profile Updated Successfully");
window.location = "profile.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong,Try Again!")</script>';
}
}
?>
			  
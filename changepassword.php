<?php
//index.php
include "dbconfig.php";

$userid = $_SESSION['id'];
 $query = "SELECT * FROM registration where id=".$_SESSION['id']."";

$result = select($query);



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
    
	<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}   

</script>
	
	
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
<?php while($p=mysqli_fetch_array($result))
{extract($p);	
?>
<div style="margin-left:60px">
 <img src="images/<?=$picture?>" style="height:100px;  border-radius: 50%;"></div>
 <div style="margin-left:30px">

 <h4 style="font-weight:bold;background-color:#299B4F;text-align:center;color:white;font-size:22px"><?=ucwords($name)?>
 </h4>
 </div>
 <?php
}
 ?><div style="margin-left:70px">
 <a href="logout.php"><button class="btn btn-danger pill px-4 py-2">Logout</button></a>
 </div>
 </div>
		 


<div class="col-lg-9">
<div class="modal-content">
                        <div class="modal-header"><p style="font-weight:bold;font-size:22px;color:#3BB05D" class="modal-title">
                               Change Password                             </p>
                             
                        </div>
                        <div class="modal-body">
						
						
                           

<br>
<form method = "post" name="changepassword" onsubmit="return checkpass();">
<label><b>Current Password</b></label>
<input class = "form-control" style = "color : purple" type = "password" name = "oldpassword">
<label><b>New Password</b></label>
<input class = "form-control" style = "color : purple" type = "password" name = "newpassword">
<label><b>Confirm Password</b></label>
<input class = "form-control" type = password style = "color : purple" name = "confirmpassword">
<br>
<input type = submit value = "Submit" name = "submit" class="btn btn-primary">
</form>

							
							
							
                            </div>
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
if(isset($_POST['submit']))
{
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];


$confirmpassword = $_POST['confirmpassword'];

$query4 = "select id from registration where id=$userid and password='$oldpassword'";

$rs = my_select($query4);

$count = mysqli_num_rows($rs);

if($count>0)
{
$query5 = "update registration set password='$newpassword' where id=$userid";
$n = my_iud($query5);
if($n ==1)
{
echo '<script>alert("Password Updated Successfully");
window.location = "login.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong,Try Again!")</script>';
}
}
else
{
echo '<script>alert("Your current password is wrong")</script>';
}
}
?>  
                
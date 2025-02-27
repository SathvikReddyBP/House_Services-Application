<?php include "dbconfigure.php"; ?>
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
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <?php include "nav.php"?>
  
    <div style="height: 113px;"></div>

    <div class="site-blocks-cover overlay" style="background-image: url('images/banner1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12" data-aos="fade">
            <h1 style="font-weight:bold">Smart Way Easy Life...</h1>
            <h3 style="color:white">Expert in Serivce. Repair. Maintenance.</h3>
            
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Popular Categories</h2>
          </div>
        </div>
        <div class="row">
		<?php 
		$query123 = "select * from category";
		$rs123 = my_select($query123);
		while($row123 = mysqli_fetch_array($rs123))
		{
		?>
           <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="700">
             <a href="select.php?cat=<?php echo $row123[1];?>" class="h-100 feature-item">
 <img src="images/serviceman.png" style="width:80px"></br></br> <h2 style="font-weight:bold"><?php echo $row123[1] ?> </h2>
 
             <span class="counting"><?php totalelectrician($row123[0]); ?></span>
            </a>
          </div>
		  <?php
		  }
		  ?>
          

      </div>
    </div>


   

    


    <div class="site-blocks-cover overlay inner-page" style="background-image: url('images/banner.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
             <h1 style="font-weight:bold">Smart Way Easy Life...</h1>
            <h3 style="color:white">Expert in Serivce. Repair. Maintenance.</h3>
            
          </div>
        </div>
      </div>
    </div>

    

    

    


   


       
        <div class="row">
          
        </div>
      </div>
    </div>
    


    
   <?php include"footer.php"; ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>


    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  </body>
</html>


<?php 

function totalelectrician($id)
{
$query = "select * from registration where work_type='$id'";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
echo $n;
}


function totalplumber()
{
$query = "select * from category where categoryname='Plumber'";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function totalcarpenter()
{
$query = "select * from category where categoryname='Carpenter'";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function totalpainter()
{
$query = "select * from category where categoryname='Painter'";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function totalmaid()
{
$query = "select * from category where categoryname='Maid'";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function totalmechanic()
{
$query = "select * from category where categoryname='Mechanic'";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function totalmoverandpacker()
{
$query = "select * from category where categoryname='Mover And Packer'";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}


function totallaundry()
{
$query = "select * from category where categoryname='Laundry Man'";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function totalwatersupplier()
{
$query = "select * from category where categoryname='Water Supplier'";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}
?>
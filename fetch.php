<?php

 $connect = mysqli_connect("localhost", "root", "", "test");
 $output = '';
 
  $query = "SELECT * FROM subcategory WHERE categoryid = '".$_POST["categoryId"]."' order by subcategoryname";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="">Select SubCategory</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["id"].'">'.$row["subcategoryname"].'</option>';
  }
 
 
 echo $output;

?>
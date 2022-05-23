<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Document</title>
</head>
<body>
    

<?php  
include 'dbconnect.php';
include 'header.php';
$location = mysqli_real_escape_string($conn,$_POST['location']);

$propertytype = mysqli_real_escape_string($conn,$_POST['propertytype']);

$buysell = mysqli_real_escape_string($conn,$_POST['buysell']);





if (isset($_POST['search2'])) {
   
  $sql1 = "select * from property where city like '%$location%' or property_type like '%$propertytype%' or property_status like '%$buysell%'";
  $res = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
      // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
      // echo "<a href='view.php?id=".$row['property_id']."'>".$row['property_name'];

      echo '<div class="hostel container">
      <div class="hostel__card">
        
           
          
            
        
  
        <p class="hostel__card__call">'.$row['property_type'].'</p>
        <h5 class="hostel__card__name">'. $row['property_name'].'</h5>
        <p class="hostel__card__type">'.$row['property_status'].'</p>
        <p class="hostel__card__address">
          <span><i class="fa-solid fa-location-dot"></i></span>
          '.$row['address'].'?>
        </p>
        <div class="hostel__card__room">
          <div class="hostel__card__room__details">
            <p class="hostel__card__room__details__info">Price</p>
            <p class="hostel__card__room__details__num">'.$row['property_price'].'bdt</p>
          </div>
          <a href="view.php?id='.$row['property_id'].'" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
              <?php } ?>
        
        </div>
      </div>
   
    </div>';
     
      echo '<br>';
      
    
    }
  } else {
    echo 'no data found';
  }
}

?>

</body>
</html>
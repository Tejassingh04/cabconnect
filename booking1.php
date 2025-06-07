<?php
include 'booking.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="website icon" type="png" href="/logo.png">
</head>
<body>
     <?php
          if(empty($details)):?>
            <p>No cabs available</p>
     <?php 
     foreach($details as $detail):?>
     <div>
        <p><?php echo $detail['cab_name'];?></p> 
        <p><?php echo $detail['cab_number'];?></p>
        <p><?php echo $detail['cab_type'];?></p>
        <p><?php echo $detail['cab_seats'];?></p>
        <p><?php echo $detail['cab_fare'];?></p>        
        </div>
     <?php endforeach; ?>
     <?php endif; ?>
    
</body>
</html>
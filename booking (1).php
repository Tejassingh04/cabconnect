<?php
include 'connect.php';
$booking= "SELECT * from cabs_available where cab_location = 'indore'";
$result = $conn->query($booking);

$details= [];
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        session_start();
        $cabname=[];
        $cabname[] = $row['cab_name'];
        $_SESSION['row']=$cabname;
        $_SESSION['cab_name'] = $cabname['cab_name'];

    }
}
else{
    echo "No cabs available";
}



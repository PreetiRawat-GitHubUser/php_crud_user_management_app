<?php 
include_once __DIR__ .'/../db/config.php';

// if($conn){
//     echo "Connection Successfull! DB is now connected";
// }

$id = $_POST['id'] ?? 0;
$query= "SELECT * FROM users WHERE id= $id"; 
$result = mysqli_query($conn , $query);

if($row =mysqli_fetch_assoc($result)){
    echo json_encode($row);
}

?> 
<?php 
include_once __DIR__ .'/../db/config.php';

// if($conn){
//     echo "Connection Successfull! DB is now connected";
// }

$id = $_POST['id'] ?? 0;
$query= "DELETE FROM users WHERE id= $id"; 

if($id>0){
    mysqli_query($conn, $query);
    echo "success";
}else{
    echo "error";
}
?>
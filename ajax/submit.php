<?php 
include_once __DIR__ .'/../db/config.php';

// if($conn){
//     echo "Connection Successfull! DB is now connected";
// }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid request";
    exit;
} 

$id = $_POST['id'] ?? '';
$name = $_POST['name']?? '';
$email= $_POST['email']?? '';
$age= $_POST['age'] ?? '';
$gender= $_POST['gender'] ?? '';

if($name == '' || $email == '' || $age == '' || $gender == ''){
    echo "All fields are required!";
    exit;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //check email id for duplicate entries


    
// if(RegexIterator($email)){
    
// }


    echo "Invalid format!";
    exit;
}

if(!is_numeric($age) || $age<0 || $age>=120){
    echo "Age must be a valid number!";
    exit;
}


if($id != '') {
    // edit update
    $query = "UPDATE users SET 
                name='$name', email = '$email' , age='$age', gender='$gender'
                WHERE id=$id";
   mysqli_query($conn, $query);
   
    echo " record updated successfully!";
}
else{
$query = "INSERT INTO users(name , email , age , gender)values('$name', '$email' , '$age' , '$gender')";
 mysqli_query($conn, $query);

// echo "form  submited successfully!";

    echo "form submitted successfully!";
}

// $conn->close();

?>
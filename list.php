<?php 
include_once __DIR__ .'/db/config.php';

//testing connection
// if($conn){
//     echo "Connection Successfull! DB is now connected";
// }

//selecting data from db
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

//echoing tr data
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){

    echo "<tr>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "<td>{$row['gender']}</td>";
            // echo "<td>
            //     <a href='#' onclick='editUser({$row['id']})'>Edit</a> |
            //     <a href='#' onclick='deleteUser({$row['id']})'>Delete</a>
            //     </td>";

             echo "<td>
            <button type='button' class='link-btn' onclick='editUser({$row['id']})'>Edit</button>
            |
            <button type='button' class='link-btn' onclick='deleteUser({$row['id']})'>Delete</button>
        </td>";

    echo "</tr>"; 

}
}else{
    echo "<tr><td colspan='5'>No records found</td></tr>";
}


?>
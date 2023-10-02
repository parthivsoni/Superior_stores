<?php  
// // INSERT INTO `` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
// $insert = false;
// $update = false;
// $delete = false;
// Connect to the Database 

// use FTP\Connection;

$servername = "localhost";
$username = "root";
$password = "";
$database = "sup_store";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
// else {
//     echo "Connection successful";
// }
?>
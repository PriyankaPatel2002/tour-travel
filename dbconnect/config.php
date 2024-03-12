<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'tour';
$con = mysqli_connect($host,$user,$pass,$database);
if(isset($con)){
    //echo "connection successfully";
}
// else{
//     echo "error".mysqli_error($con);
// }
?>
<?php include '../dbconnect/config.php';
if($_GET['id'])
{
    $id = $_GET['id'];
    $query = "DELETE FROM contact where id=$id";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo "<script>
        alert('Your data is deleted successfully');
        window.location.href='contactlist.php';
        </script>";
    }
    else{
        echo "something  went wrong".mysqli_error($con);
    }
}
else{
    header('Location:contactlist.php');
}
<?php include 'layout/header.php';
    include '../dbconnect/config.php';
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $response = $_POST['response'];
         $uquery = "UPDATE contact SET name='$name', email='$email', phone='$phone', message='$message', response='$response' where id=$id";
         $res = mysqli_query($con,$uquery);
         if($res)
         {
            echo "<script>
            alert('Your Data Updated Successfully');
            window.location.href='contactlist.php';
            </script>";
         }
         else{
            echo mysqli_error($con);
         }
    }
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM contact where id=$id";
        $result = mysqli_query($con,$query);
       if(mysqli_num_rows($result) > 0)
       {
        $row = mysqli_fetch_assoc($result);
       }
     
?>
<section class="py-5">
    <div class="container ">
        <div class="row">
            <h1 class="text-center">UPDATE CONTACT</h1>
            <div class="col-lg-3"></div>
            <div class="col-lg-6 mt-5">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <input type="hidden" name="id" value="<?php echo $row['id']?>" />
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name"
                            value="<?php echo $row['name'] ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email"
                            value="<?php echo $row['email'] ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone"
                            value="<?php echo $row['phone'] ?>">
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message"
                            name="message"><?php echo $row['message'] ?></textarea>
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="response" class="form-label">Response</label>
                        <textarea class="form-control" id="response"
                            name="response"><?php echo $row['response'] ?></textarea>
                    </div>
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary" value="Update" name="update">
                    </div>
                </form>
                
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<?php 

}   else{
    echo mysqli_error($con);
}
?>
<?php include 'layout/footer.php'; ?>
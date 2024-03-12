<?php include 'layout/header.php';
include 'dbconnect/config.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['signin'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "INSERT INTO singup(email,password)VALUES('$email','$password')";
            $result = mysqli_query($con,$query);
            if($result)
            {
                echo "
                    <script>
                    alert('You are SingIn successfully');
                    window.location.href('idex.php');
                    </script>
                ";
            }
        }
    }
?>
<section class=" login-slider">
		<div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-1 ">
                  
                </div>
                <div class="col-lg-6 col-md-8 col-sm-10 ">
                    <img src="images/login4-removebg-preview.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
            </div>
		</div>
	</section>
    <section class="login-form-section">
    <div class="container">
        <div class="row">
            <h1 class="text-center" c>Sign In</h1>
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Valid Email">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Enter Your Password">
                    </div>
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary" value="Sign In" name="signin">
                        <a href="signup.php"><input type="button" class="btn btn-primary" value="Forget Password" name="signup"></a>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</section>

<?php include 'layout/footer.php';?>
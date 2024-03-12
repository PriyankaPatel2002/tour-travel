<?php include 'layout/header.php';
  include 'dbconnect/config.php';
  $firsterr=$lasterr=$emailerr=$passerr='';
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
      if(isset($_POST['signup'])){
       if(empty($_POST['firstname'])||$_POST['firstname']=='')
       {
          $firsterr="*Please Enter First Name";
       }
       elseif(empty($_POST['lastname'])||$_POST['lastname']==''){
            $lasterr ="*Please Enter Your Last name";
       }  
       elseif(empty($_POST['email'])||$_POST['email']==''){
          $emailerr="*Please Enter Your Email";
       }
       elseif(empty($_POST['password'])||$_POST['password']==''){
          $passerr="*Please Enter Your Phone password";
       }
       else{
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $pass = $_POST['password'];
          $query = "INSERT INTO login(firstname,lastname,email,password)VALUES('$firstname','$lastname','$email','$pass')";
          $result = mysqli_query($con,$query);
          if($result){
              echo "<script>
              alert('You are connected with us successfully Please wait for response from email');
              window.location.href='login.php';
              </script>";
          }
          else{
              echo mysqli_error($con);
          }
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
            <h1 class="text-center" c>Sign Up</h1>
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter Your First name">
                        <small style="color:red;"><?php echo $firsterr; ?> </small>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Your Last name">
                        <small style="color:red;"><?php echo $lasterr; ?> </small>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                        <small style="color:red;"><?php echo $emailerr;?> </small>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Enter Your Password">
                        <small style="color:red;"><?php echo $passerr; ?> </small>
                    </div>
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary" value="Sign up" name="signup">
                        <a href="signin.php"><input type="button" class="btn btn-primary" value="Already have an account" name="signup"></a>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</section>
<?php include 'layout/footer.php'; ?>
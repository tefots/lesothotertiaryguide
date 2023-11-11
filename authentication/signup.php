<?php 
  //   $hashPass = md5('tefotsiu');
  // echo $hashPass;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

<body>
  <div class="container">
    <div class="form-box box row">
      <header>Sign Up</header>
      <hr>
      <div class="col-sm-12">
        <form action="studentSignup.php" method="POST">

          <!-- notification of the successful signup or not -->
          <?php if (isset($_GET['error']))
                       { ?>
                        <div class="alert alert-danger">
                                  <?=$_GET['error']?> 
                        </div>
                        <?php  } ?>
          <div class="form-box">
          
              <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="FirstName" name="firstname" required>
              </div>

              <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="LastName" name="lastname" required>
              </div>

              <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="email" placeholder="Email Address" name="email" required>
              </div>

              <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="number" placeholder="Contacts" name="contact" required>
              </div>

              <div class="input-container">
                <i class="fa fa-lock icon"></i>
                <input class="input-field password" type="password" placeholder="Password" name="password" required>
                <i class="fa fa-eye icon toggle"></i>
              </div>
            </div>

            <center><input type="submit" name="signup" id="submit" value="Signup" class="btn"></center>

            <div class="links">
              Already have an account? <a href="signin.php">Signin Now</a>
            </div>
          </form>
        </div>
      </div>
      
    </div>

  <script>
    const toggle = document.querySelector(".toggle"),
      input = document.querySelector(".password");
    toggle.addEventListener("click", () => {
      if (input.type === "password") {
        input.type = "text";
        toggle.classList.replace("fa-eye-slash", "fa-eye");
      } else {
        input.type = "password";
      }
    });
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign in</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

        <!-- bootstrap for offline access -->
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
        <link rel="stylesheet" href="../css/style1.css">

    </head>
    <body class="login_body">
         <div class="container d-flex justify-content-center align-items-center">
         	<div class=" form-box box">

         		 <header class="text-center p-3">Login</header>
         		 <hr>
               <form class="border shadow p-3 rounded" action="login.php" method="POST">
                  <div class="form-box">
                    <?php if (isset($_GET['error']))
                       { ?>
                        <div class="alert alert-danger">
	                                <?=$_GET['error']?> 
                        </div>
	                      <?php  } ?>

	                    <div class="input-container">
              <i class="fa fa-envelope icon"></i>
              <input class="input-field" type="email" placeholder="Email Address" name="email">
            </div>
	                    <div class="input-container">
				              <i class="fa fa-lock icon"></i>
				              <input class="input-field password" type="password" placeholder="Password" name="password">
				              <i class="fa fa-eye toggle icon"></i>
				            </div>
	                    

	                    <button type="submit" name="login" id="login" class="btn btn-primary">Login</button>	                   
                        <div><a href="signup.php" name="register" >Sign up </a> if you do'nt have an account</div> 
               </form>
            </div>
         </div>  
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>user register</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

        <!-- bootstrap for offline access -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

        <link rel="stylesheet" href="./css/styling.css">

    </head>
    <body class="login_body">
        <section>
            <div class="container d-flex justify-content-center align-items-center">
                <form class="border shadow p-3 rounded" action="signup.php">
                      <div class="mb-3">
                        <label for="FirstName" 
                        class="form-label">First Name:</label>
                        <input type="text" name="firstname"  
                        class="form-control"
                        id="FirstName">
                    </div>
                      <div class="mb-3">
                        <label for="LastName" 
                        class="form-label">Last Name:</label>
                        <input type="text" name="LastName"  
                        class="form-control"
                        id="LastName">
                    </div>
                      <div class="mb-3">
                        <label for="Email" 
                        class="form-label">Email:</label>
                        <input type="email" name="email"  
                        class="form-control"
                        id="Email">
                    </div>
                      <div class="mb-3">
                        <label for="Contacts" 
                        class="form-label">Contacts:</label>
                        <input type="number" name="Contacts"  
                        class="form-control"
                        id="Contacts">
                    </div>
                      <div class="mb-3">

                        <input type="radio" name="male"   
                        id="idmale" value="Male" class="mx-1">
                        <label for="Male"  
                        class="form-label">Male</label>
                        <div class="">
                            <input type="radio" name="female" 
                            id="idfemale" value="Female" class="mx-1">
                            <label for="Female"  
                            class="form-label">Female</label>
                        </div>
                    </div>
                       <select class="form-select mb-3" name="role" aria-label="Default select example">
                        <option >District</option>
                        <option value="User">Qacha</option>
                        <option value="Admin">Quthing</option>
                        <option value="Admin">Mohale' s Hoek</option>
                        <option value="Admin">Mafeteng</option>
                        <option value="Admin">Maseru</option>
                        <option value="Admin">Berea</option>
                        <option value="Admin">Leribe</option>
                        <option value="Admin">Butha Buthe</option>
                        <option value="Admin">Mokhotlong</option>
                        <option value="Admin">Thaba Tseka</option>                        
                    </select>
                    <div class="mb-3">
                        <label for="Email" 
                        class="form-label">Password:</label>
                        <input type="password" name="password"  
                        class="form-control"
                        id="Password">
                    </div>

                    <center><button type="submit" name="register" id="login" class="btn btn-primary">Sign up</button></center>
                    <center class="mb-2">
                        <a href="login.php" name="register" >Sign in </a>
                        </center>  
                </form>
            </div>
        </section>
    </body>
</html>

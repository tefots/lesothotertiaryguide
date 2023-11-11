<?php 
include 'db_connection.php';

if(isset($_POST['signup'])){

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $contacts = $_POST['contact'];
  $password = $_POST['password'];
  $date = '';

  //checking if user is already registered

  //sql statement
  $sql = "SELECT * FROM studentregister WHERE Email='$email'";
  //execute the query
  $result = mysqli_query($connector, $sql);

  //if user available or not
  if (mysqli_num_rows($result) > 0)
   {
    header("Location: signup.php?error=User is already registered try again with other email ");
  }
  else
  {
    //hashing the password
    $secured_password = md5($password);
   // Insert the user data into the database
  $sql = "INSERT INTO studentregister(FirstName, LastName, Email, Contacts, Password) values ('$firstname','$lastname', '$email', '$contacts', '$secured_password')";

  $result = $connector->query($sql);
    if ($result) {
      // succssfully registered
      header("Location: signin.php");

    }
    else
    {
      //not succssfully registered
      header("Location: signup.php?error=Unsuccessfull! please try again.. ");
      
    }

  }

  mysqli_close($connector);
}
else
{
  echo 'No connection at all!!';
}

?>
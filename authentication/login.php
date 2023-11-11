<?php
	//beggining with session
	session_start();
	//including the connection file to the database
	include "db_connection.php";


    if (isset($_POST['login']))
	{ 
		//form validation
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);

			return $data;
		}
		//vaiables to hold form inputs
		$email = test_input($_POST['email']);
		$password = test_input($_POST['password']);
		

		if (empty($email)) {
			header("Location: signin.php?error=Email required");
		}
		else if(empty($password)) {
			header("Location: signin.php?error=Password is required ");
		}
		else
		{

			//hashing the password
			$password = md5($password);

			//sql query
			$sql_query = "SELECT * FROM studentregister WHERE Email='$email' AND Password=
			'$password'";

			$result = mysqli_query($connector, $sql_query);

			//checking if there is anything found
			if (mysqli_num_rows($result) === 1) {
				// username must be unique
				$row = mysqli_fetch_assoc($result);
				//displaying the full details from the database
				
				if ($row['Password'] === $password) {
					 $_SESSION['FirstName'] = $row['FirstName'];
					 $_SESSION['LastName'] = $row['LastName'];
					 $_SESSION['Email'] = $row['Email'];

					 header ("Location: ../student_dashboard.php");

				}
				//when user type is wrong
				else
				{
				    header("Location: signin.php?error=1.Wrong Email or Password ");	
				}
			}
			//wrong email or password
			else 
			{
			    header("Location: signin.php?error=Wrong Email or Password ");
			}
		}
		
	/*	$email=$_POST["email"];
		$password = $_POST['password'];
		$role = $_POST['role'];

		echo "Your email is: $email <br>";
		echo "Your password is: $password <br>";
		echo "Your role is: $role <br>";*/
	}
	else 
	{
		echo "Failed";
	}

	?>

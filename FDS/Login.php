<!DOCTYPE html>
<html>
	<body>
		<?php
			//Declaration
			$host="localhost";
			$username="root";
			$password="";
			$db="foodds";
			
			//Connect to mysqli server
			if (!($connection=mysqli_connect($host, $username, $password, $db)))
				die("Cannot connect to the database</body></html>");
		
			//Access the database
			if (!mysqli_select_db($connection, $db) )
				die("Could not open company database</body></html>" );
		
			if (isset($_POST['username'])and isset($_POST['password'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
				$password= MD5($password);
				
				if (empty($_POST['username']) && empty($_POST['password'])){
					echo "<script type='text/javascript'> alert('All fields should not be empty');window.location='Login.html'</script>";
				}
				else{
					$query= "SELECT Username, Password FROM `login_form` WHERE Username='$username' and Password='$password' ";
					$result = mysqli_query($connection, $query);
					$count = mysqli_num_rows($result);
					if ($count == 1){
						echo "<script type='text/javascript'> alert('Logged in successfully! Welcome $username to FoodBear');window.location='web-interface.html'</script>";
					}
					else{
						echo "<script type='text/javascript'> alert('Invalid Username or Password. Please try it again.');window.location='Login.html'</script>";
					}
				}
			}
			
			// Disconnect from server
			mysqli_close($connection);
		?>
	</body>
</html>

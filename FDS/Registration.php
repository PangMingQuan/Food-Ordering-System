<!DOCTYPE html>
<html>
	<body>
		<?php
			$host="localhost";
			$username="root";
			$password="";
			$db="foodds";
	
			//Connect to mysqli server
			if (!($connection=mysqli_connect($host, $username, $password, $db)))
				die("Cannot connect to the database</body></html>");
		
			//Access the database
			if (!mysqli_select_db($connection, "foodds") )
				die("Could not open company database</body></html>" );
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			$pwd=MD5($password);
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$address=$_POST['address'];

			if (!empty($username) && !empty($password) && !empty($email) && !empty($contact) && !empty($address)){
				$check_duplicate_username = "SELECT Username FROM register_form WHERE Username = '$username' ";
				$result = mysqli_query($connection, $check_duplicate_username);
				$count = mysqli_num_rows($result);
				if($count > 0){
					echo"<script type='text/javascript'> alert('Username already taken!'); window.location= 'Registration.html'</script>";
				}else{
					$sql= "INSERT INTO register_form(Username, Password, Email, Contact, Address) VALUES ( '$username', '$pwd', '$email', '$contact', '$address')";
					$sql2= "INSERT INTO login_form(Username, Password) VALUES ( '$username', '$pwd')";
					$result2= mysqli_query($connection, $sql);  mysqli_query($connection, $sql2);
					if ($result2){
						echo "<script type='text/javascript'> alert('New user successfully created!'); window.location= 'Login.html'</script>";
					}
					else{
						echo "<script type='text/javascript'> alert('Error!'); window.location= 'Registration.html'</script>";
					}
				}
				mysqli_close($connection);
			}
			else{
				echo"<script type='text/javascript'> alert('All fields should not be empty !'); window.location= 'Registration.html'</script>";
			}
		?>
	</body>
</html>			









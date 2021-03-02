<html>
<head><title>Checkout</title>
	<style>
	body{
	
	background-color: #D6EAF8 ;
	
		.container{
			margin:100px 50px;
			font-size: 20px;
			}
	
	</style>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	</head>
<body>
		<p style = "font-family:Comic Sans;"><span style="background-color: #EC7063"><h1><p><center>FoodBear</center></p></h1></mark>
		<h1><p><center>Foods always be there for you</center></p></h1></span></p>
		
<center><?php
	$total = $_POST["btn7"];	
	$final = $_POST["btn20"];
	echo nl2br("Total price equal to RM ");
	echo $total;
	echo nl2br("\nThis is your submit payment RM ");
	echo $final;
	
	if ($final == $total){
		echo nl2br("\nYour payment is done and the order is made");
		echo nl2br("\nKindly please be patience waiting your order to reach you");
		echo nl2br("\nThank You for choosing us");
	}
	else if ( $final < $total ){
	echo nl2br("\nYour payment is less than the original amount, Please pay again. Thank you");
	}
	else 
		echo nl2br("\nYour payment is more than the original amout, Pleasse pay again. Thank you");
	
?></center>
<br><br/>

	<center><input class="btn btn-primary" type="button" value="Back" onclick="window.location.href='oldtownmenu2.html'"/>
	<input class="btn btn-primary" type="button" value="Back to Homepage" onclick="window.location.href='web-interface.html'"/>
	</center>
		
</body>
</html>
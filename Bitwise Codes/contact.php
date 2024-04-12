<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','hello');

// get the post records

$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$cardNumber = $_POST['cardNumber'];
$cvv = $_POST['cvv'];
// database insert SQL code
$sql = "INSERT INTO hello.form (name,phoneNumber,cardNumber,cvv) VALUES ( '$name', '$phoneNumber', '$cardNumber','$cvv')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	$message=1;
?>
	<html>
		
		<body></br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>

		<center><h1 style="color:black; font family :Arial, Helvetica, sans-serif;"  >Successful</br>
	
	<a href= "./pay1.html"> Proceed to Payment</a>
	</h1>
</center>
</body>
<style>
body {
  background-image: url('./home_bg.jpg');
}

</style>

	</html>
<?php
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
<?php 
// database connection code 
if(isset($_POST['name'])) 
{ 
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database'); 
$con = mysqli_connect('localhost', 'root', '','loginin'); 
 
// get the post records 
 
$name = $_POST['name']; 
$email = $_POST['email']; 
$password = $_POST['password']; 
// database insert SQL code 
$sql = "INSERT INTO hello.form (name,email,password) VALUES ( '$name', '$email', 'password')"; 
 
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
  
 <a href= "file:///Y:/WT%20New%20project/try%201.html#"> Continue</a> 
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

<?php
//include the database connection
include("db.php"); 
$tbl_name="user_levels"; // Table name 

$username=$_POST['username']; // username sent from form 
$password=$_POST['password']; // password sent from form 


// clean the strings 
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

//Query
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
// mysqli_num_row is counting table row
if(mysqli_num_rows($result) > 0){
$rows = mysqli_fetch_assoc($result);



//Direct pages with different user levels
if ($rows['userlevel'] == '1') {
	header('location: HR/Home.php'); //User1 
	 $_SESSION['user_name'] = $row['username'];
	
}
else
if ($rows['userlevel'] == '2') {
	header('location: admin'); //User2 
	session_register("username");
	session_register("password"); 
	
} 
else
if ($rows['userlevel'] == '3') {
	header('location: HR/Home.php');//user 3 
	session_register("username");
	session_register("password"); 

} 

}
else
{ 
	// Error login
echo "<script>alert('Access Denied!');
						window.location='home.php';
						</script>";
}

?>

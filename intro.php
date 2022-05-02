<?php
session_start();
//Get session variables stores when login is successful
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    header("location:index.php"); // redirects to viewbooking page
        exit;   
}
 


?>
<!DOCTYPE html>
<html>
<body>

<h2>
<?php
        ob_start();
       include "dbconnect.php"; // Using database connection file here
        ob_end_clean();
        //Show users name
        $insert = mysqli_query($db,"SELECT * from `login` WHERE (`Email`='$email') ");
        while($data = mysqli_fetch_array($insert)){
          echo "Welcome ".$data['Name']."<br>";
        }
       
?>
</h2>
<form action="logout.php">
  <input type="submit" value="Logout" onclick="return confirm('Are you sure you want to logout?')">
</form> 


</body>
</html>
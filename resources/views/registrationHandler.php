<?php // // CST-256 page by Elijah.

// Starts the session and redirects the user back to the login page.
session_start();
header('location:login.php');

// The default XAMPP information.
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'userregistration');

// Posts the username and password variable.
$name = $_POST['user'];
$pass = $_POST['password'];

// Database query.
$s = " SELECT * from usertable where name = '$name'"; 
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result); // For number of rows.

if($num == 1){ // If there is a result that turns up.
    echo " username was already taken.";
}
else{
    $reg = " insert into usertable(name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo " Registration complete!"; // Successfully registers a new user now.
}

?>
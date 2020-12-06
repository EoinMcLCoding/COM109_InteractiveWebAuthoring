<!-- THIS IS THE PHP FOR THE WEB FORM -->
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Linking HTML to PHP Vars 
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$confirmemail = $_POST['confirmemail'];
$company = $_POST['company'];
$phonenumber = $_POST['phonenumber'];
$address = $_SERVER["REMOTE ADDR"];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `cv_requests` (`fname`, `sname`,`phonenumber`, `email`, `confirmemail`, `company`) VALUES ('$fname', '$sname','$phonenumber','$email', '$confirmemail', '$company')";

if ($conn->query($sql) === TRUE) {
    // alert("New record has been created successfully");
	header('Location: ../html/CV Webpage.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

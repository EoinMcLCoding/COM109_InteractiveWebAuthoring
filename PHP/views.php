<!-- THIS IS THE PHP FOR THE WEB FORM -->
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";
$divName = "contactinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'SELECT company FROM cv_requests GROUP BY company HAVING count(*) > 0';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<div id=$divName>";
    echo "<h1><br> PREVIOUS COMPANY REQUESTS </h1> ";
    echo "---------------------------";
    while($row = $result->fetch_assoc()) {
        echo "<h1 id=''>".$row["company"]. "</h1>";

    }
   	echo "---------------------------";
   	echo "<h1>DON'T MISS OUT ON MY CV</h1> ";
	

} else {
    echo "<div id=$divName>";
    echo "<h1><br> PREVIOUS COMPANY REQUEST </h1> ";
    echo "---------------------------";
    echo "NO RESULTS OF COMPANIES TO SHOW";
}

$conn->close();
?>
<html> 
<head> 
<link rel="stylesheet" type="text/css" href="../CSS/CV Webpage.css"> 
</head>
</html>

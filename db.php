<?php

$servername = "localhost";

$username = "root";

$password = "Thanks@123";



// Create connection

$conn = new mysqli($servername, $username, $password);



// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

echo "Connected successfully";

?>
<?php

$servername = "localhost";

$username = "username";

$password = "password";



// Create connection

$conn = new mysqli($servername, $username, $password);



// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

echo "Connected successfully";


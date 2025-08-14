<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "<h2>Form Submitted</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
	
	echo "Hello World"
}
?>

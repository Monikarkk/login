<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // In a real app, you'd store this in a database
    echo "<h2>Signup Successful!</h2>";
    echo "<p>Welcome, $name</p>";
}
?>
<a href='index.html'>Back to Login</a>

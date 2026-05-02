<?php
session_start();

// Destroy session
$_SESSION = [];
session_destroy();

// Prevent back button cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Thank you for using!</h2>

    <a href="login.php">
        <button>Log In Again</button>
    </a>
</div>

</body>
</html>

<?php
session_start();

// Prevent back button access
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Welcome, <?php echo $user; ?>!</h2>

    <p>Session Details:</p>
    <p>Logged in as: <b><?php echo $user; ?></b></p>

    <a href="logout.php">
        <button>Logout</button>
    </a>
</div>

</body>
</html>

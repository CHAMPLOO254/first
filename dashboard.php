<?php
require 'functions.php';

if (!isLoggedIn()) {
    redirect('login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
        <p>Session ID: <?= session_id() ?></p>
        <p>Last activity: <?= date('Y-m-d H:i:s', $_SESSION['last_activity']) ?></p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
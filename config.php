<?php
// Database configuration
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'secure_login');
define('DB_USER', 'root');
define('DB_PASS', 'Jimmy@2005L_');

// Session security settings
session_name('SECURE_SESSION');
session_set_cookie_params([
    'lifetime' => 3600, // 1 hour
    'path' => '/',
    'domain' => 'localhost',
    'secure' => true,    // Requires HTTPS
    'httponly' => true,  // No JavaScript access
    'samesite' => 'Strict'
]);
session_start();

// Regenerate ID every 30 mins
if (!isset($_SESSION['created'])) {
    session_regenerate_id(true);
    $_SESSION['created'] = time();
} elseif (time() - $_SESSION['created'] > 1800) {
    session_regenerate_id(true);
    $_SESSION['created'] = time();
}
?>
<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime'=>1800,
    'domain'=>'localhost',
    'path'=>'/',
    'secure'=>true,
    'httponly'=>true
]);

session_start();

// Check if $_SESSION["last_regeneration"] is set
if (!isset($_SESSION["last_regeneration"])) {
    // If not set, set it to the current time
    $_SESSION["last_regeneration"] = time();
} else {
    // If set, check if regeneration is needed based on the interval
    $interval = 60 * 30; // 30 minutes interval
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        // Regenerate session ID if interval is exceeded
        session_regenerate_id();
        $_SESSION["last_regeneration"] = time();
    }
}



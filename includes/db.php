<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    // LOCAL DATABASE (XAMPP)
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "garuda_blog";   // your local DB name
} else {
    // LIVE DATABASE (InfinityFree)
    $host = "sql113.infinityfree.com";
    $user = "if0_41052790_user";
    $pass = "garuda3d123";
    $db   = "if0_41052790_garuda3dphp";
}

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB connection failed");
}
?>

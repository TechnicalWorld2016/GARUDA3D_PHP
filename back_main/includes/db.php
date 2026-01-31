<?php
$conn = new mysqli("localhost", "root", "", "garuda_blog");

if ($conn->connect_error) {
    die("Database connection failed");
}

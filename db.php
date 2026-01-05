<?php
$conn = new mysqli("localhost", "root", "", "drweb_ecommerce");
if ($conn->connect_error) {
    die("Connection failed");
}
session_start();
?>
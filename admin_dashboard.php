<?php
include "../includes/db.php";
if (!isset($_SESSION['user'])) header("Location: ../auth/login_register.php");
include "sidebar.php";
?>
<h1>Welcome <?= $_SESSION['user']['email'] ?></h1>
<p>Admin Dashboard</p>
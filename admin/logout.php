<?php
session_start();
unset($_SESSION['isAdmin']);
unset($_SESSION['admin']);
header('location: index.php');
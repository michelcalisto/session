<?php
session_start();
if(isset($_SESSION['username'])) {
    echo "Welcome back, " . $_SESSION['username'];
} else {
    echo "You need to log in.";
}

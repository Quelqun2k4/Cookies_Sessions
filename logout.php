<?php

session_start();
unset($_SESSION['loginname']);
session_destroy();
header("location: login.php");
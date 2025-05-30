<?php

include 'connect.php';

session_start();
session_unset();
session_destroy();

header('location:../moderator/moder_login.php');

?>
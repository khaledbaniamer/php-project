<?php

session_start();
unset( $_SESSION['admin_id'] );
unset( $_SESSION['admin_name'] );
session_destroy();
header("Location:../registration/Admin_login.php");

?>

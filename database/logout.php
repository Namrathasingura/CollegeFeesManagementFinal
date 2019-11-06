<?php
session_start();
session_destroy();
header("location:http://localhost:8088/jquery/index1.php");
?>
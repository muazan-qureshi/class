<?php session_start();
session_destroy();
header("location:login.php");
#echo('<script> window.location.href="" </script>');



?>
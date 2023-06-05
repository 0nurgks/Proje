<?php 
session_start();
$_SESSION["giriskontrol"] = 1;
unset($_SESSION["ID"]);
header("Location: index.php?i=cikis");
session_destroy();

?>
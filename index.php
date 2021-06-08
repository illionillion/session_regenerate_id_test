<?php
session_start();
echo "初期".session_id();
$_SESSION['id']="a";
session_regenerate_id();
echo "<br>再発行".session_id();
echo "<br>".$_SESSION['id'];
?>
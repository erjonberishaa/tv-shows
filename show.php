<?php include'includes/header.php'; ?>

<?php

if(isset($_GET['show'])){
    $show_id = $_GET['show'];

    $mysqli = new mysqli('localhost', 'root', '', 'seriale') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM `shows` WHERE id='$show_id'") or die($mysqli->error);

?>
<?php
    $connect = new mysqli("localhost", "root", "", "test") or die(mysqli_error());
    $query = $connect->query("SELECT * FROM formulario");
    $row = $query->fetch_all(MYSQLI_ASSOC);
    echo json_encode($row);
?>
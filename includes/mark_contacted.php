<?php
require 'db.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $prev_status = $_GET['prev_status'];
    $present_status = $prev_status ? 0 : 1;
    $query = "UPDATE contact SET is_contacted = $present_status WHERE id = $id";
    mysqli_query($db,$query);
header('location:../admin/index.php?managecontact');
}

?>
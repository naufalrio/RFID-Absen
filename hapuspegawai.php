<?php
// include database connection file
include_once("configg.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM pegawai WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:timeline.php");
?>
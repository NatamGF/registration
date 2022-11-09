<?php
include "conection.php";
//creating the extructure to delete a data on the DataBase
$id = $_GET['id'];
$sql = "DELETE FROM residents WHERE id = $id";
$result = $conn->query($sql);
if ($result){
    header("Location: index.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
}

?>
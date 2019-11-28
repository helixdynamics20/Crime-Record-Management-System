<?php
$conn = mysqli_connect('localhost','root','','nia');
$sql = "DELETE FROM `officer` WHERE io_id='" . $_GET["io_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

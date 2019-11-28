<?php
$conn = mysqli_connect('localhost','root','','nia');
$sql = "DELETE FROM `victim` WHERE victim_id='" . $_GET["victim_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost','root','','nia');
$sql = "DELETE FROM `petitioner` WHERE petitioner_id='" . $_GET["petitioner_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

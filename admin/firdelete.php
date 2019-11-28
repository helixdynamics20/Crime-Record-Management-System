<?php
$conn = mysqli_connect('localhost','root','','nia');
$sql = "DELETE FROM `fir` WHERE fir_num='" . $_GET["fir_num"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

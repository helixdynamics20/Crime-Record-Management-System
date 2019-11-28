<?php
$conn = mysqli_connect('localhost','root','','nia');
$sql = "DELETE FROM `case` WHERE `case_id`='" . $_GET["case_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost','root','','nia');
$sql = "DELETE FROM `caseoutcome` WHERE case_outcome_id='" . $_GET["case_outcome_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

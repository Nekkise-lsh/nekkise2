<?php
$conn = mysqli_connect('localhost', 'root', 'llllll');
mysqli_select_db($conn, 'opentutorials2');
$sql  = "SELECT * FROM `topic`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
   echo $row['title'].'<br/>';
}
 ?>

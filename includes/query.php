<?php
$sql = "SELECT * FROM sumber_air s, indikator i 
WHERE s.id = i.id_sumber";
$result = mysqli_query($conn,$sql);
$rowCount = mysqli_num_rows($result);
?>
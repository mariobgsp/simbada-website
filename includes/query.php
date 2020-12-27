<?php
$sql = "SELECT * FROM sumber_air s, indikator i 
WHERE s.id = i.id_sumber";
$result = mysqli_query($conn,$sql);
$rowCount = mysqli_num_rows($result);
?>

<?php
$sql_ind = "SELECT * FROM sumber_air s, indikator i 
WHERE s.id = i.id_sumber";
$result_ind = mysqli_query($conn,$sql_ind);
$rowCount_ind = mysqli_num_rows($result_ind);
?>
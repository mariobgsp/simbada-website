<?php
require_once "includes/header.php"
?>

<!-- search box -->
<div class="main">
    <h1>Kualitas Air</h1>
    <form action="search.php" method="POST">
        <input type="text" name="search_bar" placeholder="Search">
        <button class="button" type="submit" name="submit">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>

<div class="wrapper">
    <div class="table">    
        <div class="row header">
            <div class="cell">
                Nama Sungai
            </div>
            <div class="cell">
                Lokasi
            </div>
            <div class="cell">
                Jenis
            </div>
            <div class="cell">
                Water Quality Index (WQI)
            </div>
            <div class="cell">
                Quality
            </div>
        </div>
        
 

<?php

// Query

if(isset($_POST["submit"])){
    $search = mysqli_real_escape_string($conn,$_POST["search_bar"]);
    $sql = "SELECT * FROM sumber_air WHERE nama LIKE '%$search%' 
            OR lokasi LIKE '%$search%' OR jenis LIKE '%$search%' OR kualitas LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);
    $rowCount = mysqli_num_rows($result);

    if($rowCount > 0){
    while($row=mysqli_fetch_assoc($result)){
        echo '     
                <div class="row">
                    <div class="cell" data-title="nama_sungai">
                        '.$row['nama'].'
                    </div>
                    <div class="cell" data-title="kotakab">
                        '.$row['lokasi'].'
                    </div>
                    <div class="cell" data-title="jenis">
                        '.$row['jenis'].'
                    </div>
                    <div class="cell" data-title="index_quality">
                        '.$row['WQI'].'
                    </div>
                    <div class="cell" data-title="quality">
                        '.$row['kualitas'].'
                    </div>
                </div>';
    }
}else{
    echo "No result found";
};
}

?>
   </div>
</div>


<?php 
require_once "includes/footer.php";
?>
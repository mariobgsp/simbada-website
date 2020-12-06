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
        
 
<?php include 'includes/variable.php' ?>
<?php include 'includes/function.php' ?>

<?php
// Query

if(isset($_POST["submit"])){
    $search = mysqli_real_escape_string($conn,$_POST["search_bar"]);
    $sql = "SELECT * FROM sumber_air s, indikator i 
            WHERE s.id = i.id_sumber 
            AND (s.nama LIKE '%$search%' 
                    OR s.lokasi LIKE '%$search%'
                    OR s.jenis LIKE '%$search%'
                )";
    $result = mysqli_query($conn,$sql);
    $rowCount = mysqli_num_rows($result);

    if($rowCount > 0){
        while($row=mysqli_fetch_assoc($result)){
                        $ind_ph = $row['ind_pH'];
                        $ind_do = $row['ind_DO'];
                        $ind_bod = $row['ind_BOD'];
                        $ind_tds = $row['ind_TDS'];
                        $ind_turbidity = $row['ind_turbidity'];
                        $ind_po4 = $row['ind_PO4'];
                        $ind_no3 = $row['ind_NO3'];
                        $ind_cl = $row['ind_CI'];   
                        $ind_hard = $row['ind_tot_hardness'];
                        $ind_cond = $row['ind_conductivity'];
                        $ind_alk = $row['ind_alkalinity'];

                        $ind = array($ind_ph,
                            $ind_do,
                            $ind_bod,
                            $ind_tds,
                            $ind_turbidity,
                            $ind_po4,
                            $ind_no3,
                            $ind_cl,
                            $ind_hard,
                            $ind_cond,
                            $ind_alk
                        );
                        $qi=calcQi($ind,$si,$li);
                        $wqi=calcWqi($wi,$qi);
                        $wqiString=number_format($wqi,2);
                        $quality=qualityDeterminer($wqi);



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
                            '.$wqiString.'
                        </div>
                        <div class="cell" data-title="quality">
                            '.$quality.'
                        </div>
                    </div>';
            };
    }else{
            echo "No result found";
    };
};

?>
   </div>
</div>


<?php 
require_once "includes/footer.php";
?>
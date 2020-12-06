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

// Variable
$wi_ph = 0.133;
        $wi_do = 0.2;
        $wi_bod = 0.2;
        $wi_tds = 0.001;
        $wi_turbidity = 0.2;
        $wi_po4 = 0.2;
        $wi_no3 = 0.02;
        $wi_cl = 0.003;
        $wi_hard = 0.002;
        $wi_cond = 0.004;
        $wi_alk = 0.005;

        $si_ph = 7.5;
        $si_do = 5;
        $si_bod = 5;
        $si_tds = 1000;
        $si_turbidity = 5;
        $si_po4 = 5;
        $si_no3 = 50;
        $si_cl = 350;
        $si_hard = 500;
        $si_cond = 250;
        $si_alk = 200;

        $li_ph = 7;
        $li_do = 14.6;
        $li_bod = 0;
        $li_tds = 0;
        $li_turbidity = 0;
        $li_po4 = 0;
        $li_no3 = 0;
        $li_cl = 0;
        $li_hard = 0;
        $li_cond = 0;
        $li_alk = 0;

        $wi = array($wi_ph, 
            $wi_do,
            $wi_bod,
            $wi_tds,
            $wi_turbidity,
            $wi_po4,
            $wi_no3,
            $wi_cl,
            $wi_hard,
            $wi_cond,
            $wi_alk
        );

        $si = array($si_ph,
            $si_do,
            $si_bod,
            $si_tds,
            $si_turbidity,
            $si_po4,
            $si_no3,
            $si_cl,
            $si_hard,
            $si_cond,
            $si_alk
        );

        $li = array($li_ph,
            $li_do,
            $li_bod,
            $li_tds,
            $li_turbidity,
            $li_po4,
            $li_no3,
            $li_cl,
            $li_hard,
            $li_cond,
            $li_alk
        );

// Function
function calcQi($ind,$si,$li){
    for($i=0;$i<11;++$i){
        $indMinusLi = $ind[$i]-$li[$i];
        $siMinusLi = $si[$i]-$li[$i];
        $qi[]=($indMinusLi/$siMinusLi)*100;
    };
    return $qi;
};

function calcWqi($wi,$qi){
    $sum = 0;
    for($x=0;$x<11;++$x){
        $wiTimesQi = $wi[$x]*$qi[$x];
        $sum = $sum + $wiTimesQi;
    };
    return $sum;
};

function qualityDeterminer($wqi){
    switch($wqi){
        case ($wqi<25):
            $quality='Excellent';
            break;
        case ($wqi<50):
            $quality='Good';
            break;
        case ($wqi<75):
            $quality='Poor';
            break;
        case ($wqi<100):
            $quality='Very Poor';
            break;
        default:
            $quality='Unsafe for drink';
            break;
    };
    return $quality;
};

// Query

if(isset($_POST["submit"])){
    $search = mysqli_real_escape_string($conn,$_POST["search_bar"]);
    $sql = "SELECT * FROM sumber_air WHERE nama LIKE '%$search%' 
            OR lokasi LIKE '%$search%' OR jenis LIKE '%$search%' OR kualitas LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);
    $rowCount = mysqli_num_rows($result);

    if($rowCount > 0){
        while($row=mysqli_fetch_assoc($result)){
                $id = $row['id_sumber'];
    
                $sql_ind = "SELECT * FROM indikator WHERE id_sumber=$id";
                $result_ind = mysqli_query($conn,$sql_ind);
                $rowCount_ind = mysqli_num_rows($result_ind);
    
    
                if($rowCount_ind > 0){
                    while($row_ind=mysqli_fetch_assoc($result_ind)){
                        $ind_ph = $row_ind['ind_pH'];
                        $ind_do = $row_ind['ind_DO'];
                        $ind_bod = $row_ind['ind_BOD'];
                        $ind_tds = $row_ind['ind_TDS'];
                        $ind_turbidity = $row_ind['ind_turbidity'];
                        $ind_po4 = $row_ind['ind_PO4'];
                        $ind_no3 = $row_ind['ind_NO3'];
                        $ind_cl = $row_ind['ind_CI'];
                        $ind_hard = $row_ind['ind_tot_hardness'];
                        $ind_cond = $row_ind['ind_conductivity'];
                        $ind_alk = $row_ind['ind_alkalinity'];

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
                    };
                };


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
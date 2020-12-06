<?php
require_once "includes/header.php"
?>
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
                
                $qi = calcQi($ind,$si,$li);
                $wqi = calcWqi($wi,$qi);
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
                            '.$row['WQI'].'
                        </div>
                        <div class="cell" data-title="quality">
                            '.$row['kualitas'].'
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
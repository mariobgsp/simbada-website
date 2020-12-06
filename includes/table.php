<?php
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
    
        echo '<tr>
                <td class="stasion_name">'.$row['id'].'</td>
                <td class="river_name">'.$row['nama'].'</td>
                <td class="location">'.$row['lokasi'].'</td>
                <td class="water_index">'.$wqiString.'</td>
                <td class="quality_index">'.$quality.'</td>
            </tr>';
    };
}else{
    echo "No result found";
};
?>
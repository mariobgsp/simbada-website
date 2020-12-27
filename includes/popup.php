<?php
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
	echo '
		<div class="modal modal'.$row_ind['id_sumber'].'">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="header-frame">
				<span class="close" onClick="closePopup()">&times;</span>
			  <h4 class="header4">Indikator '.$row_ind['nama'].'</h4>	
			</div>
		  <div class="content-frame">
			  <table class="table table-bordered">
				  <tbody>			
					  <tr>
						  <th>pH </th>
						  <th>D.O. (mg/l)</th>
						  <th>B.O.D. (mg/l) </th>
						  <th>TDS (mg/l)</th>
						  <th>Turbidity (NTU)</th>
						  <th>PO4 (mg/l)</th>
					  </tr>
					  <tr>
						  <td>'.$row_ind['ind_pH'].'</td>
						  <td>'.$row_ind['ind_DO'].'</td>
						  <td>'.$row_ind['ind_BOD'].'</td>
						  <td>'.$row_ind['ind_TDS'].'</td>
						  <td>'.$row_ind['ind_turbidity'].'</td>
						  <td>'.$row_ind['ind_PO4'].'</td>
					  </tr>
						  <th>NO3 (mg/l)</th>
						  <th>Total Hardness</th>
						  <th>Conductivity (µmhos/cm)</th>
						  <th>Cl (mg/l)</th>
						  <th>Alkalinity (mg/l)</th>
						  <th>WQI</th>
					  </tr>
					  <tr>
						  <td>'.$row_ind['ind_NO3'].'</td>
						  <td>'.$row_ind['ind_tot_hardness'].'</td>
						  <td>'.$row_ind['ind_conductivity'].'</td>
						  <td>'.$row_ind['ind_CI'].'</td>
						  <td>'.$row_ind['ind_alkalinity'].'</td>
						  <td>'.$wqiString.'</td>
					  </tr>
				  </tbody>    		      	
			  </table>
		  </div>   
		</div>
	  </div>';
    };
}else{
    echo "No result found";
};
?>

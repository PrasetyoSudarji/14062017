<?php
    
	echo "

		<div class='container-fluid' style='background:#fff;margin-top:0px; padding-top:30px; padding-bottom:15px; border-bottom:solid thin #e8e8e8; box-shadow:         0px -6px 22px 0px rgba(0, 0, 0, 0.2); border-radius: 0px;'>
        <h2> Daily Report : EPF </h2><br><br>
        <h3> Date Today : ".$today." </h3><br><br>
		<div class='table-responsive'>
		<table class='table table-hover table-bordered' width='100%'>
        <thead>
            <tr class='active'>
                <th rowspan='2' width='5%'>SAS OIL<br>(BOPD)</th>
                <th colspan='2' width='20%'>OIL (BOPD)
        		</th>
				<th rowspan='2' width='5%'>%</th>
                <th rowspan='2' width='5%'>Up/Down</th>
                <th rowspan='2' colspan='2' width='10%'>YTD</th>
    			<th rowspan='2' width='5%'>SAS GAS<br>(MMSCFD)</th>
    			<th colspan='2' width='10%'>GAS (MMSCFD)</th>
    			<th rowspan='2' width='5%'>%</th>
    			<th rowspan='2' width='5%'>Up/Down</th>
    			<th rowspan='2' colspan='2' width='20%'>YTD</th>
    			<th rowspan='2' width='10%'>GAS SERAH<br>(MMSCFD)</th>
    			
            </tr>
            <tr class='active'>
    			<th>
					TODAY
				</th>
				<th>
					YEST
				</th>
				<th>
					TODAY
				</th>
				<th>
					YEST
				</th>
            </tr>
        </thead>
        <tbody>
        	<tr>
        		<th> <!-- SAS OIL (BOPD) -->
        			".$sas_oil."
        		</th>
        		<th><!-- BOPD TODAY-->
        			".$total_bopd_now."
        		</th>
        		<th> <!-- BOPD YEST-->
        			".$total_bopd_yest."
        		</th>
        		<th><!-- % -->
        			".$persen_oil."
        		</th>
        		<th><!-- Up/Down-->
        			".$updown_oil."
        		</th>
        		<th><!-- YTD -->
        			".$ytd_oil."
        		</th>
        		<th><!-- YTD % -->
        			".$persen_ytd_oil."
        		</th>
        		<th><!-- SAS GAS (MMSCFD) -->
        			".$sas_gas."
        		</th>
        		<th><!-- GAS TODAY-->
        			".$total_gas_total_now."
        		</th>
        		<th><!-- GAS YEST -->
        			".$total_gas_total_yest."
        		</th>
        		<th><!-- % -->
        			".$persen_gas."
        		</th>
        		<th><!-- Up/Down -->
        			".$updown_gas."
        		</th>
        		<th><!-- YTD -->
        			".$ytd_gas."
        		</th>
        		<th><!-- YTD %-->
        			".$persen_ytd_gas."
        		</th>
        		<th><!-- GAS SERAH (MMSCFD) -->
        			".$total_gas_serah."
        		</th>
        	</tr>
        </tbody>
	</table>
	</div>
	</div>
	";

    
?>
<div class="container-fluid">
<div class="container-map">
	<div class="col-md-9">
		<div class='table-responsive'>
			<table class='table' border='5px'>
				<tr>
					<td>
					<div id="map" >
						<div id="popup" class="ol-popup">
							<a href="#" id="popup-closer" class="ol-popup-closer"></a>
							<div id="popup-content"></div>
						</div>
					</div>
					<script src="<?=base_url()?>assets/resources/qgis2web_expressions.js"></script>
					<script src="<?=base_url()?>assets/resources/polyfills.js"></script>
					<script src="<?=base_url()?>assets/./resources/ol.js"></script>
					<script src="http://cdn.polyfill.io/v2/polyfill.min.js?features=Element.prototype.classList,URL"></script>
					<script src="<?=base_url()?>assets/resources/horsey.min.js"></script>
					<script src="<?=base_url()?>assets/resources/ol3-search-layer.min.js"></script>
					<script src="<?=base_url()?>assets/./resources/ol3-layerswitcher.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/hutan_pgdp0.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/medco_singaPpagardewa1.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/PIPAGASPGN2.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/PIPAPPGS3.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/Pipeline_PGDP_20164.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/JalanBesar5.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/jln_pro6.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/keamanan_lokasi_pgdp7.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/Koord_patok_As_Built_All8.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/Persil_pemilik9.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/Persil_All10.js"></script>
					<script src="<?=base_url()?>application/views/map/layers/smr_all_2015_maret11.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/hutan_pgdp0_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/medco_singaPpagardewa1_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/PIPAGASPGN2_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/PIPAPPGS3_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/Pipeline_PGDP_20164_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/JalanBesar5_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/jln_pro6_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/keamanan_lokasi_pgdp7_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/Koord_patok_As_Built_All8_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/Persil_pemilik9_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/Persil_All10_style.js"></script>
					<script src="<?=base_url()?>application/views/map/styles/smr_all_2015_maret11_style.js"></script>
					<script src="<?=base_url()?>application/views/map/./layers/layers.js" type="text/javascript"></script>
					<script src="<?=base_url()?>assets/./resources/qgis2web.js"></script>
					<script src="<?=base_url()?>assets/./resources/Autolinker.min.js"></script>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>


	<div class="col-md-3">
		<ul class="pager">
			<div id = "submenu">
			<?php 
				$submenu = $this->Model->getSubmenuAll();
				foreach ($submenu->result_array() as $data){
					if ($data['status']== "1"){
						echo "<table>";
						echo "<head><tr><td colspan=2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
						echo "<li><a href='#' onclick='submenu_prev(".$data['id'].");'><</a></li>&nbsp&nbsp" ;
						echo "<label>".$data['name']."</label>";
						echo "&nbsp&nbsp<li><a href='#' onclick='submenu_next(".$data['id'].");'>></a></li>";
						echo "</td></tr></head>";
					}
					
					if ($data['status'] == "1" && $data['id']==1){
						
						echo "<body>";
						echo "<tr>";
						echo "<td><input type='checkbox' value='sumur' id='lyr_smr_all_2015_maret11' checked> </input></td><td>Sumur</td></tr>";
						echo "<tr><td><input type='checkbox' value='Persil all' id='lyr_Persil_All10' checked> </input></td><td>Persil All</td></tr>";
						echo "<tr><td><input type='checkbox' value='Persil pemilik' id='lyr_Persil_pemilik9' checked></input></td><td>Persil Pemilik</td></tr>";
						echo "<tr><td><input type='checkbox' value='patok' id='lyr_Koord_patok_As_Built_All8' checked></input></td><td>Patok</td></tr>";
						echo "<tr><td><input type='checkbox' value='keamanan' id='lyr_keamanan_lokasi_pgdp7' checked></input></td><td>Keamanan</td></tr>";
						echo "<tr><td><input type='checkbox' value='jalanpro' id='lyr_jln_pro6' checked></input></td><td>Jalan Provinsi</td></tr>";
						echo "<tr><td><input type='checkbox' value='jalanbesar' id='lyr_JalanBesar5' checked></input></td><td>Jalan Besar</td></tr>";
						echo "<tr><td><input type='checkbox' value='pipeline' id='lyr_Pipeline_PGDP_20164' checked></input></td><td>Pipeline</td></tr>";
						echo "<tr><td><input type='checkbox' value='pipappgs' id='lyr_PIPAPPGS3' checked></input></td><td>Pipa PPGS</td></tr>";
						echo "<tr><td><input type='checkbox' value='pipappgs' id='lyr_PIPAGASPGN2' checked></input></td><td>PipaGAS PGN</td></tr>";
						echo "<tr><td><input type='checkbox' value='medco_singaPpagardewa1' id='lyr_medco_singaPpagardewa1' checked> </input></td><td>Medco</td></tr>";
						echo "<tr><td><input type='checkbox' value='hutan' id='lyr_hutan_pgdp0' checked></input></div></td><td>Hutan</td></tr>";
						echo "<tr><td colspan=2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick='view_layer();' class='btn btn-info'>Save</button> </td></tr>";	
						echo "</body>";
						echo "</table>"	;
						
					}else if ($data['status'] == "1" && $data['id']==2){
					
						echo "<table>";
						echo "<body>";
						echo "<tr><td colspan=2>";
						echo "Lorem Ipsum</td></tr>";
						echo "</body>";
						echo "</table>"	;
					}
				}
			echo "</div>";
		echo "</ul>";
		?>
	</div>
</div>
	<?php
	
	echo "
		<div class='container-fluid' style='background:#fff;margin-top:0px; padding-top:30px; padding-bottom:15px; border-bottom:solid thin #e8e8e8; box-shadow:         0px -6px 22px 0px rgba(0, 0, 0, 0.2); border-radius: 0px;'>
			<div class='table-responsive'>
		<table class='table table-hover table-bordered' width='100%'>
        <thead>
            <tr class='active'>
                <th>Well Name</th>
                ";
                foreach ($sumur->result_array() as $key => $value) {
                	# code...
                	echo "<th>".$value['id']."</th>";
                }
        echo "</tr>
        </thead>
        <tbody>
        	<tr>
        		<th> <!-- SAS OIL (BOPD) -->
        			Status
        		</th>
        		";
                foreach ($sumur->result_array() as $key => $value) {
                	# code...
                	echo "<th>".$value['status']."</th>";
                }
        echo "
        	</tr>
        </tbody>
	</table>
	</div>
		</div>
		<div class='container-fluid' style='background:#fff;margin-top:0px; padding-top:30px; padding-bottom:15px; border-bottom:solid thin #e8e8e8; box-shadow:         0px -6px 22px 0px rgba(0, 0, 0, 0.2); border-radius: 0px;'>
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
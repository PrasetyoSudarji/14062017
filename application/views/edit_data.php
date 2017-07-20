<?php
echo "<div class='container' style='background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2); padding: 30px;'>";
	echo "<form method='POST' action='".base_url()."index.php/data/update_data'>";
		echo "<table class='table table-hover table-bordered'>
			<thead >
				<tr class='active'>
					<th rowspan='2'>
						Well Name
					</th>
					<th rowspan='2' width='5%'>
						Choke 
					</th>
					
					<th colspan='3'>
						Produksi Liquid
					</th>
					<th colspan='3'>
						Produksi Gas
					</th>
					<th colspan='4'>
						Pressure & Temperature
					</th>
					<th rowspan='2'>
						Action
					</th>
					
				</tr>
				<tr class='active'>
					<th>
						BLPD
					</th>
					<th>
						BOPD
					</th>
					<th>
						Kadar Air
					</th>
					<th>
						HP SCRUBBER
					</th>
					<th>
						LP 
					</th>
					<th>
						Total
					</th><th>
						THP
					</th>
					<th>
						FL
					</th>
					<th>
						CHP
					</th><th>
						Temp
					</th>
					
				</tr>
			</thead>
			<tbody>
				
					";
					$no = 1;
					foreach($sumur->result_array() as $listsumur){
					foreach ($produksi_liquid as $key => $value) {
						# code...
						if($listsumur['id']==$value['well_name']){
							$choke = $value['choke'];
							$bopd = $value['bopd'];
							$blpd = $value['blpd'];
							$kadar_air = $value['kadar_air'];
						}
					}
					foreach ($produksi_gas as $key => $value) {
						# code...
						if($listsumur['id']==$value['well_name']){
							$hp_scrubber = $value['hp_scrubber'];
							$lp = $value['lp'];
							$total = $value['total'];
							
						}
					}
					foreach ($pt as $key => $value) {
						# code...
						if($listsumur['id']==$value['well_name']){
							$thp = $value['thp'];
							$fl = $value['fl'];
							$chp = $value['chp'];
							$temp = $value['temp'];
						}
					}
					echo "<tr>
							<!-- id Liquid -->
								<input type='hidden' class='form-control' name='liquid".$no."' value=".$id_liquid.">
							<!-- id gas -->
								<input type='hidden' class='form-control' name='gas".$no."' value=".$id_gas.">
							<!-- id pt -->
								<input type='hidden' class='form-control' name='pt".$no."' value=".$id_pt.">
							<td> <!-- sumur -->
								<input type='text' class='form-control' name='well".$no."' value='".$listsumur['id']." 'readonly>
							</td>
							<td> <!-- choke -->
								<input type='text' class='form-control' name='choke".$no."' value='".$choke."'>
							</td> 	
							<td> <!-- blpd -->
								<input type='text' class='form-control' name='blpd".$no."' value='".$blpd."' >
							</td>
							<td> <!-- bopd -->
								<input type='text' class='form-control' name='bopd".$no."' value='".$bopd."'>
							</td>
							<td> <!-- kadar air -->
								<input type='text' class='form-control' name='kadar_air".$no."' value='".$kadar_air."'>
							</td>
							<td> <!-- hp SCRUBBER -->
								<input type='text' class='form-control' name='hp_scrubber".$no."' value='".$hp_scrubber."' >
							</td>
							<td> <!-- lp -->
								<input type='text' class='form-control' name='lp".$no."' value='".$lp."'>
							</td>
							<td> <!-- total -->
								<input type='text' class='form-control' name='total".$no."' value='".$total."' >
							</td>
							<td> <!-- thp -->
								<input type='text' class='form-control' name='thp".$no."' value='".$thp."'>
							</td>
							<td> <!-- fl -->
								<input type='text' class='form-control' name='fl".$no."' value='".$fl."' >
							</td>
							<td> <!-- chp -->
								<input type='text' class='form-control' name='chp".$no."' value='".$chp."' >
							</td>
							<td> <!-- temp -->
								<input type='text' class='form-control' name='temp".$no."' value='".$temp."'>
							</td>		
							<td>
								<input type='' class='btn btn-info' name='btn".$no."' value='Update' onclick='update_data(".$no.",".$id_liquid.",".$id_gas.",".$id_pt.",".$choke.",".$blpd.",".$bopd.",".$kadar_air.",".$hp_scrubber.",".$lp.",".$total.",".$thp.",".$fl.",".$chp.",".$temp.");'>
							</td>
						</tr>
						";
						$id_liquid++;$id_gas++;$id_pt++;$no++;
					}
				echo "
			</tbody>
		</table>
		</form>
	</div>";

?>
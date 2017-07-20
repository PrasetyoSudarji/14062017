<?php
echo "<div class='container' style='background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2); padding: 30px;'>";
	echo "<form method='POST' action='".base_url()."index.php/data/input'>";
		echo "<table class='table table-hover table-bordered'>
			<thead >
				<tr class='active'>
					<th rowspan='2'>
						Tanggal
					</th>
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
					
					echo "<tr>
							<!-- id Liquid -->
								<input type='hidden' class='form-control' name='liquid".$no."' value=".$id_liquid.">
							<!-- id gas -->
								<input type='hidden' class='form-control' name='gas".$no."' value=".$id_gas.">
							<!-- id pt -->
								<input type='hidden' class='form-control' name='pt".$no."' value=".$id_pt.">
							<td> <!-- tanggal -->
								<div class='input-group date' data-provide='datepicker' data-date-format='yyyy-mm-dd'>
								    <input type='text' class='form-control' name='tanggal".$no."' value='".$today."'>
								    <div class='input-group-addon'>
								        <span class='fa fa-calendar'></span>
								    </div>
								</div>
							</td>
							<td> <!-- sumur -->
								<input type='text' class='form-control' name='well".$no."' value=".$listsumur['id']." readonly>
							</td>
							<td> <!-- choke -->
								<input type='text' class='form-control' name='choke".$no."'>
							</td> 	
							<td> <!-- blpd -->
								<input type='text' class='form-control' name='blpd".$no."'>
							</td>
							<td> <!-- bopd -->
								<input type='text' class='form-control' name='bopd".$no."'>
							</td>
							<td> <!-- kadar air -->
								<input type='text' class='form-control' name='kadar_air".$no."' disabled>
							</td>
							<td> <!-- hp SCRUBBER -->
								<input type='text' class='form-control' name='hp_scrubber".$no."'>
							</td>
							<td> <!-- lp -->
								<input type='text' class='form-control' name='lp".$no."'>
							</td>
							<td> <!-- total -->
								<input type='text' class='form-control' name='total".$no."' disabled>
							</td>
							<td> <!-- thp -->
								<input type='text' class='form-control' name='thp".$no."'>
							</td>
							<td> <!-- fl -->
								<input type='text' class='form-control' name='fl".$no."'>
							</td>
							<td> <!-- chp -->
								<input type='text' class='form-control' name='chp".$no."'>
							</td>
							<td> <!-- temp -->
								<input type='text' class='form-control' name='temp".$no."'>
							</td>		
						</tr>
						";
						$id_liquid++;$id_gas++;$id_pt++;$no++;
					}
				echo "
					<tr>
						<td colspan='13'>
							<input type='submit' class='btn btn-info' value='Input'>
						</td>
					</tr>
			</tbody>
		</table>
		</form>
	</div>";

?>
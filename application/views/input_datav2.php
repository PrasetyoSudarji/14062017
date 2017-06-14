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
					foreach($sumur->result_array() as $listsumur){
					echo "<tr><!--
							<td> <!-- id Liquid
								<input type='text' class='form-control' name='liquid".$id_liquid."' value=".$id_liquid." invisible>
							</td>
							<td> <!-- id gas
								<input type='text' class='form-control' name='gas".$id_gas."' value=".$id_gas." invisible>
							</td>
							-->
							<td> <!-- tanggal -->
								<div class='input-group date' data-provide='datepicker' data-date-format='yyyy-mm-dd'>
								    <input type='text' class='form-control' name='tanggal' value='".date('Y-m-d')."'>
								    <div class='input-group-addon'>
								        <span class='fa fa-calendar'></span>
								    </div>
								</div>
							</td>
							<td> <!-- sumur -->
								<input type='text' class='form-control' name='choke' value=".$listsumur['id'].">
							</td>
							<td> <!-- choke -->
								<input type='text' class='form-control' name='choke'>
							</td> 	
							<td> <!-- blpd -->
								<input type='text' class='form-control' name='blpd'>
							</td>
							<td> <!-- bopd -->
								<input type='text' class='form-control' name='bopd'>
							</td>
							<td> <!-- kadar air -->
								<input type='text' class='form-control' name='kadar_air' disabled>
							</td>
							<td> <!-- hp SCRUBBER -->
								<input type='text' class='form-control' name='hp_scrubber'>
							</td>
							<td> <!-- lp -->
								<input type='text' class='form-control' name='lp'>
							</td>
							<td> <!-- total -->
								<input type='text' class='form-control' name='total' disabled>
							</td>
							<td> <!-- thp -->
								<input type='text' class='form-control' name='thp'>
							</td>
							<td> <!-- fl -->
								<input type='text' class='form-control' name='fl'>
							</td>
							<td> <!-- chp -->
								<input type='text' class='form-control' name='chp'>
							</td>
							<td> <!-- temp -->
								<input type='text' class='form-control' name='temp'>
							</td>		
						</tr>
						";

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
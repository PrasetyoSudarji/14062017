<?php
echo "<div class='container' style='background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2); padding: 30px;'>";
	echo "<form method='POST' action='".base_url()."index.php/data/update_data'>";
		echo "<table id='list' class='table table-striped table-bordered'>
			<thead >
				<tr class='active'>
					<th width='6%'>
						No
					</th>
					<th width='6%'>
						Tanggal
					</th>
					<th width='6%'>
						Well Name
					</th>
					<th width='6%'>
						Choke 
					</th>
					
					<th width='6%'>
						BLPD
					</th>
					<th width='6%'>
						BOPD
					</th>
					<th width='6%'>
						Kadar Air
					</th>
					<th width='6%'>
						HP SCRUBBER
					</th>
					<th width='6%'>
						LP 
					</th>
					<th width='6%'>
						Total
					</th>
					<th width='6%'>
						THP
					</th>
					<th width='6%'>
						FL
					</th>
					<th width='6%'>
						CHP
					</th>
					<th width='6%'>
						Temp
					</th>
					<th width='6%'>
						Action
					</th>
					
				</tr>
				
			</thead>
			<tbody>
				
					";
					echo "Today : ".$today;

					for($no = 1;$no <= $id_liquid;$no++){

						foreach ($produksi_liquid as $value1){
							if($value1['id']==$no){
								$choke = $value1['choke'];
								$bopd = $value1['bopd'];
								$blpd = $value1['blpd'];
								$kadar_air = $value1['kadar_air'];

								foreach ($produksi_gas as $value2){
									if($value2['id']==$no){
										$hp_scrubber = $value2['hp_scrubber'];
										$lp = $value2['lp'];
										$total = $value2['total'];

										foreach ($pt as $value3){
											if($value3['id']==$no){
												$thp = $value3['thp'];
												$fl = $value3['fl'];
												$chp = $value3['chp'];
												$temp = $value3['temp'];
												$well_name = $value3['well_name'];
												$tanggal = $value1['tanggal'];

												echo "<tr>
												<!-- id Liquid -->
													<input type='hidden' class='form-control' name='liquid".$no."' value=".$no.">
												<!-- id gas -->
													<input type='hidden' class='form-control' name='gas".$no."' value=".$no.">
												<!-- id pt -->
													<input type='hidden' class='form-control' name='pt".$no."' value=".$no.">
												<td> <!-- id -->
													".$no."
												</td>
												<td> <!-- tanggal -->
													".$tanggal."
												</td>
												<td> <!-- sumur -->
													<input type='hidden' class='form-control' name='well".$no."' value='".$well_name." 'readonly>
													".$well_name."
												</td>
												<td> <!-- choke -->
													<input size='1' type='text' class='form-control' name='choke".$no."' value='".$choke."'>
												</td> 	
												<td> <!-- blpd -->
													<input size='1' type='text' class='form-control' name='blpd".$no."' value='".$blpd."' >
												</td>
												<td> <!-- bopd -->
													<input size='1' type='text' class='form-control' name='bopd".$no."' value='".$bopd."'>
												</td>
												<td> <!-- kadar air -->
													<input size='1' type='text' class='form-control' name='kadar_air".$no."' value='".$kadar_air."'>
												</td>
												<td> <!-- hp SCRUBBER -->
													<input size='1' type='text' class='form-control' name='hp_scrubber".$no."' value='".$hp_scrubber."' >
												</td>
												<td> <!-- lp -->
													<input size='1' type='text' class='form-control' name='lp".$no."' value='".$lp."'>
												</td>
												<td> <!-- total -->
													<input size='1' type='text' class='form-control' name='total".$no."' value='".$total."' >
												</td>
												<td> <!-- thp -->
													<input size='1' type='text' class='form-control' name='thp".$no."' value='".$thp."'>
												</td>
												<td> <!-- fl -->
													<input size='1' type='text' class='form-control' name='fl".$no."' value='".$fl."' >
												</td>
												<td> <!-- chp -->
													<input size='1' type='text' class='form-control' name='chp".$no."' value='".$chp."' >
												</td>
												<td> <!-- temp -->
													<input size='1' type='text' class='form-control' name='temp".$no."' value='".$temp."'>
												</td>		
												<td>
													<button class='btn btn-info' name='btn".$no."' onclick='update_data(".$no.",".$id_liquid.",".$id_gas.",".$id_pt.",".$choke.",".$blpd.",".$bopd.",".$kadar_air.",".$hp_scrubber.",".$lp.",".$total.",".$thp.",".$fl.",".$chp.",".$temp.");'> Update </button>
												</td>
											</tr>
											";
											}
										}	
									}
								}
							}
						}
						
					}

				echo "
			</tbody>
		</table>
		</form>
	</div>";

?>
<?php


echo "<div class='container' style='background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2); padding: 30px;'>";
if($tab=='produksi_liquid'){
echo "<div id='produksi'>";
	echo "<ul class='nav nav-tabs'>
	  <li class=";if($link=='produksi_liquid'){echo 'active';}echo "><a href='#' onclick='tab_liquid(1);'> Produksi Liquid </a></li>
	  <li class=";if($link=='produksi_gas'){echo 'active';}echo "><a href='#' onclick='tab_gas(2);'> Produksi Gas (MMscfd) </a></li>
	  <li class=";if($link=='press_temp'){echo 'active';}echo "><a href='#' onclick='tab_presstemp(3);'> Pressure & Temperature </a></li>
	  <li class=";if($link=='sas'){echo 'active';}echo "><a href='#' onclick='tab_sas(4);'> SAS </a></li>

	</ul>";

	echo "<form method='POST' action='".base_url()."index.php/data/input_liquid'>";

		echo "<table class='table table-hover table-bordered'>
			<thead >
				<tr class='active'>
					<th rowspan='2'>
						Tanggal
					</th>
					<th rowspan='2'>
						Well Name
					</th>
					<th rowspan='2'>
						Choke 
					</th>
					
					<th colspan='3'>
						Produksi Liquid
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
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> <!-- tanggal -->
						<div class='input-group date' data-provide='datepicker' data-date-format='yyyy-mm-dd'>
						    <input type='text' class='form-control' name='tanggal' value='".date('Y-m-d')."'>
						    <div class='input-group-addon'>
						        <span class='fa fa-calendar'></span>
						    </div>
						</div>
					</td>
					<td width='110px'> <!-- sumur -->
						<select class='form-control' id='well' name='well'>
							";
							foreach($sumur->result_array() as $listsumur){
							echo "<option value='".$listsumur['id']."'>".$listsumur['id']."</option>";
							}
						echo "</select>
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
					<td>
						<input type='submit' class='btn btn-info' value='Input'>
					</td>
				</tr>
			</tbody>
		</table>
		</form>
	<h3> List Data </h3>
	<div id='listsumur'>
	<table id='list' class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Well Name</th>
                <th>Choke</th>
                <th>BLPD</th>
                <th>BOPD</th>
                <th>Kadar Air</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Well Name</th>
                <th>Choke</th>
                <th>BLPD</th>
                <th>BOPD</th>
                <th>Kadar Air</th>
                <th>Action</th>
            </tr>
        </tfoot>
			<tbody>
				";$no = 1;
				foreach($tampil->result_array() as $produksi_liquid){
					echo "
					<tr>
						<td> <!-- tanggal -->
							".$no."
						</td>
						<td> <!-- tanggal -->
							".$produksi_liquid['tanggal']."
						</td>
						<td width='110px'> <!-- sumur -->
							".$produksi_liquid['well_name']."
						</td>
						<td> <!-- choke -->
							".$produksi_liquid['choke']."
						</td> 
						<td> <!-- blpd -->
							".$produksi_liquid['blpd']."
						</td>
						<td> <!-- bopd -->
							".$produksi_liquid['bopd']."
						</td>
						<td> <!-- kadar air -->
							".$produksi_liquid['kadar_air']."
						</td>
						<td>
							<input type='button' class='btn btn-info' onclick='delete_data_liquid(".$produksi_liquid['id'].");' value='Delete'>
						</td>
					</tr>";
					$no++;
				}
			echo "</tbody>
		</table>
	</div>
</div>";
}else if($tab=='produksi_gas'){
echo "<div id='produksi'>";	

	echo "<ul class='nav nav-tabs'>
	  <li class=";if($link=='produksi_liquid'){echo 'active';}echo "><a href='#' onclick='tab_liquid(1);'> Produksi Liquid </a></li>
	  <li class=";if($link=='produksi_gas'){echo 'active';}echo "><a href='#' onclick='tab_gas(2);'> Produksi Gas (MMscfd) </a></li>
	  <li class=";if($link=='press_temp'){echo 'active';}echo "><a href='#' onclick='tab_presstemp(3);'> Pressure & Temperature </a></li>
	  <li class=";if($link=='sas'){echo 'active';}echo "><a href='#' onclick='tab_sas(4);'> SAS </a></li>
	</ul>";

	echo "<form method='POST' action='".base_url()."index.php/data/input_gas'>";
	
	echo "<table class='table table-hover table-bordered'>
			<thead >
				<tr class='active'>
					
					<th rowspan='2'>
						Tanggal
					</th>
					<th rowspan='2'>
						Well Name
					</th>
					<th rowspan='2'>
						Choke 
					</th>
					
					<th colspan='3'>
						Produksi Gas (MMscfd)	
					</th>
					<th rowspan='2'>
						Action
					</th>
					
				</tr>
				<tr class='active'>
					<th>
						HP SCRUBBER
					</th>
					<th>
						LP <br>
					</th>
					<th>
						Total
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> <!-- tanggal -->
						<div class='input-group date' data-provide='datepicker' data-date-format='yyyy-mm-dd'>
						    <input type='text' class='form-control' name='tanggal' value='".date('Y-m-d')."'>
						    <div class='input-group-addon'>
						        <span class='fa fa-calendar'></span>
						    </div>
						</div>
					</td>
					<td width='110px'> <!-- sumur -->
						<select class='form-control' id='well' name='well'>
							";
							foreach($sumur->result_array() as $listsumur){
							echo "<option value='".$listsumur['id']."'>".$listsumur['id']."</option>";
							}
						echo "</select>
					</td>
					<td> <!-- choke -->
						<input type='text' class='form-control' name='choke'>
					</td> 
					<td> <!-- blpd -->
						<input type='text' class='form-control' name='hp_scrubber'>
					</td>
					<td> <!-- bopd -->
						<input type='text' class='form-control' name='lp'>
					</td>
					<td> <!-- kadar air -->
						<input type='text' class='form-control' name='total' disabled>
					</td>
					<td>
						<input type='submit' class='btn btn-info' value='Input'>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<h3> List Data </h3>
	<div id='listsumur'>
		<table id='list' class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Well Name</th>
                <th>Choke</th>
                <th>HP SCRUBBER</th>
                <th>LP</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Well Name</th>
                <th>Choke</th>
                <th>HP SCRUBBER</th>
                <th>LP</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </tfoot>
			<tbody>
				";$no = 1;
				foreach($tampil->result_array() as $produksi){
					echo "
					<tr>
						<td> <!-- id -->
							".$no."
						</td>
						<td> <!-- tanggal -->
							".$produksi['tanggal']."
						</td>
						<td width='110px'> <!-- sumur -->
							".$produksi['well_name']."
						</td>
						<td> <!-- choke -->
							".$produksi['choke']."
						</td> 
						<td> <!-- hp_scrubber -->
							".$produksi['hp_scrubber']."
						</td>
						<td> <!-- lp -->
							".$produksi['lp']."
						</td>
						<td> <!-- total -->
							".$produksi['total']."
						</td>
						<td>
							<input type='button' class='btn btn-info' onclick='delete_data_gas(".$produksi['id'].");' value='Delete'>
						</td>
					</tr>";
					$no++;
				}
			echo "</tbody>
		</table>
	</div>";
echo "</div>";
}else if($tab=='press_temp'){
echo "<div id='produksi'>";

	echo "<ul class='nav nav-tabs'>
	  <li class=";if($link=='produksi_liquid'){echo 'active';}echo "><a href='#' onclick='tab_liquid(1);'> Produksi Liquid </a></li>
	  <li class=";if($link=='produksi_gas'){echo 'active';}echo "><a href='#' onclick='tab_gas(2);'> Produksi Gas (MMscfd) </a></li>
	  <li class=";if($link=='press_temp'){echo 'active';}echo "><a href='#' onclick='tab_presstemp(3);'> Pressure & Temperature </a></li>
	  <li class=";if($link=='sas'){echo 'active';}echo "><a href='#' onclick='tab_sas(4);'> SAS </a></li>
	</ul>";

	echo "<form method='POST' action='".base_url()."index.php/data/input_presstemp'>";	
	
	echo "<table class='table table-hover table-bordered'>
			<thead >
				<tr class='active'>
					<th rowspan='2'>
						Tanggal
					</th>
					<th rowspan='2'>
						Well Name
					</th>
					<th rowspan='2'>
						Choke 
					</th>
					
					<th colspan='4'>
						Well Pressure & Temperature
					</th>
					<th rowspan='2'>
						Action
					</th>
					
				</tr>
				<tr class='active'>
					<th>
						THP
					</th>
					<th>
						FL
					</th>
					<th>
						CHP
					</th>
					<th>
						Temp
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> <!-- tanggal -->
						<div class='input-group date' data-provide='datepicker' data-date-format='yyyy-mm-dd'>
						    <input type='text' class='form-control' name='tanggal' value='".date('Y-m-d')."'>
						    <div class='input-group-addon'>
						        <span class='fa fa-calendar'></span>
						    </div>
						</div>
					</td>
					<td width='110px'> <!-- sumur -->
						<select class='form-control' id='well' name='well'>
							";
							foreach($sumur->result_array() as $listsumur){
							echo "<option value='".$listsumur['id']."'>".$listsumur['id']."</option>";
							}
						echo "</select>
					</td>
					<td> <!-- choke -->
						<input type='text' class='form-control' name='choke'>
					</td> 
					<td> <!-- blpd -->
						<input type='text' class='form-control' name='thp'>
					</td>
					<td> <!-- bopd -->
						<input type='text' class='form-control' name='fl'>
					</td>
					<td> <!-- kadar air -->
						<input type='text' class='form-control' name='chp'>
					</td>
					<td> <!-- kadar air -->
						<input type='text' class='form-control' name='temp'>
					</td>
					<td>
						<input type='submit' class='btn btn-info' value='Input'>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<h3> List Data </h3>

	<div id='listsumur'>
		<table id='list' class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Well Name</th>
                <th>Choke</th>
                <th>THP</th>
                <th>FL</th>
                <th>CHP</th>
                <th>Temp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Well Name</th>
                <th>Choke</th>
                <th>THP</th>
                <th>FL</th>
                <th>CHP</th>
                <th>Temp</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            ";$no = 1;
                foreach($tampil->result_array() as $pt){
                    echo "
                    <tr>
                        <td> <!-- tanggal -->
                            ".$no."
                        </td>
                        <td> <!-- tanggal -->
                            ".$pt['tanggal']."
                        </td>
                        <td width='110px'> <!-- sumur -->
                            ".$pt['well_name']."
                        </td>
                        <td> <!-- choke -->
                            ".$pt['choke']."
                        </td> 
                        <td> <!-- thp -->
                            ".$pt['thp']."
                        </td>
                        <td> <!-- fl -->
                            ".$pt['fl']."
                        </td>
                        <td> <!-- chp -->
                            ".$pt['chp']."
                        </td>
                        <td> <!-- Temperature -->
                            ".$pt['temp']."
                        </td>
                        <td>
                            <input type='button' class='btn btn-info' onclick='delete_data_pt(".$pt['id'].");' value='Delete'>
                        </td>
                    </tr>";
                    $no++;
                }
        echo "</tbody>
    </table>
	</div>";
echo "</div>";
}else{
	echo "<div id='produksi'>";

	echo "<ul class='nav nav-tabs'>
  <li class=";if($link=='produksi_liquid'){echo 'active';}echo "><a href='#' onclick='tab_liquid(1);'> Produksi Liquid </a></li>
  <li class=";if($link=='produksi_gas'){echo 'active';}echo "><a href='#' onclick='tab_gas(2);'> Produksi Gas (MMscfd) </a></li>
  <li class=";if($link=='press_temp'){echo 'active';}echo "><a href='#' onclick='tab_presstemp(3);'> Pressure & Temperature </a></li>
  <li class=";if($link=='sas'){echo 'active';}echo "><a href='#' onclick='tab_sas(4);'> SAS </a></li>
</ul>";
echo "<form method='POST' action='".base_url()."index.php/data/input_sas'>";	
	echo "<table class='table table-hover table-bordered'>
			<thead >
				<tr class='active'>
					<th rowspan='2'>
						Tanggal
					</th>
					<th rowspan='2'>
						OIL
					</th>
					<th rowspan='2'>
						GAS 
					</th>
					<th rowspan='2'>
						Action
					</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> <!-- tanggal -->
						<div class='input-group date' data-provide='datepicker' data-date-format='yyyy-mm-dd'>
						    <input type='text' class='form-control' name='tanggal' value='".date('Y-m-d')."'>
						    <div class='input-group-addon'>
						</div>
					</td>
					<td> <!-- oil -->
						<input type='text' class='form-control' name='oil'>
					</td> 
					<td> <!-- gas -->
						<input type='text' class='form-control' name='gas'>
					</td>
					<td>
						<input type='submit' class='btn btn-info' value='Input'>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<h3> List Data </h3>
	<div id='listsas'>
	<table id='list' class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>OIL</th>
                <th>GAS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>OIL</th>
                <th>GAS</th>
                <th>Action</th>
            </tr>
        </tfoot>
			<tbody>
				";$no = 1;
				foreach($tampil->result_array() as $sas){
					echo "
					<tr>
						<td> <!-- tanggal -->
							".$no."
						</td>
						<td> <!-- tanggal -->
							".$sas['tanggal']."
						</td>
						<td> <!-- OIL -->
							".$sas['oil']."
						</td> 
						<td> <!-- GAS -->
							".$sas['gas']."
						</td>
						<td>
							<input type='button' class='btn btn-info' onclick='delete_data_sas(".$sas['id'].");' value='Delete'>
						</td>
					</tr>";
					$no++;
				}
			echo "</tbody>
		</table>
	</div>";
echo "</div>";
}

?>
<?php
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
						        <span class='fa fa-calendar'></span>
						    </div>
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
							<input type='button' class='btn btn-info' onclick='delete_data_sas(".$sas['tanggal'].");' value='Delete'>
						</td>
					</tr>";
					$no++;
				}
			echo "</tbody>
		</table>
	</div>
</div>";
?>
<?php


echo "<div class='container' style='background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2); padding: 30px;'>";

echo "<ul class='nav nav-tabs'>
	  <li class=";if($link=='produksi_liquid'){echo 'active';}echo "><a href='".base_url()."index.php/menu/view_data/produksi_liquid'> Produksi Liquid </a></li>
	  <li class=";if($link=='produksi_gas'){echo 'active';}echo "><a href='".base_url()."index.php/menu/view_data/produksi_gas'> Produksi Gas (MMscfd) </a></li>
	  <li class=";if($link=='press_temp'){echo 'active';}echo "><a href='".base_url()."index.php/menu/view_data/press_temp'> Pressure & Temperature </a></li>
	  <li class=";if($link=='sas'){echo 'active';}echo "><a href='".base_url()."index.php/menu/view_data/sas'> SAS </a></li>

	</ul>";
if($tab=='produksi_liquid'){

	echo "<h3> List Data Liquid</h3>
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

	echo "<h3> List Data Gas</h3>
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

	echo "<h3> List Data Pressure & Temperature</h3>

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

echo "<h3> List Data Sasaran</h3>
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
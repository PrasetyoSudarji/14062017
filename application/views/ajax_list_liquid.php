<?php
echo "<table id='list' class='table table-striped table-bordered'>
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
		</table>";
?>
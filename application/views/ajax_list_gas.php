<?php
echo "<table id='list' class='table table-striped table-bordered'>
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
		</table>";
?>
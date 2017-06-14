<?php
	echo "<table id='list' class='table table-striped table-bordered'>
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
		</table>";
?>
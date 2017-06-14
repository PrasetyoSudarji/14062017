<?php
echo "<table id='list' class='table table-striped table-bordered'>
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
    </table";

?>
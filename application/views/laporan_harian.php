<?php
	echo "
        <div class='container-fluid' style='background:#fff;margin-top:0px; padding-top:30px; padding-bottom:15px; border-bottom:solid thin #e8e8e8; box-shadow:         0px -6px 22px 0px rgba(0, 0, 0, 0.2); border-radius: 0px;'>
        <h3> Date Today : ".$today." </h3><br><br>
        <div class='table-responsive'>
        <table class='table table-hover table-bordered' width='100%'>
        <thead>
            <tr class='active'>
                <th rowspan='2' width='10%'> Well Name </th>
                <th rowspan='2' width='5%'>SAS OIL<br>(BOPD)</th>
                <th colspan='2' width='15%'>OIL (BOPD)
                </th>
                <th rowspan='2' width='5%'>%</th>
                <th rowspan='2' width='5%'>Up/Down</th>
                <th rowspan='2' colspan='2' width='10%'>YTD</th>
                <th rowspan='2' width='5%'>SAS GAS<br>(MMSCFD)</th>
                <th colspan='2' width='10%'>GAS (MMSCFD)</th>
                <th rowspan='2' width='5%'>%</th>
                <th rowspan='2' width='5%'>Up/Down</th>
                <th rowspan='2' colspan='2' width='15%'>YTD</th>
                <th rowspan='2' width='10%'>GAS SERAH<br>(MMSCFD)</th>
                
            </tr>
            <tr class='active'>
                <th>
                    TODAY
                </th>
                <th>
                    YEST
                </th>
                <th>
                    TODAY
                </th>
                <th>
                    YEST
                </th>
            </tr>
        </thead>
        <tbody>";
        foreach ($sumur->result_array() as $sumur) {
            echo "<tr>";
            echo "<td>".$sumur['id']."</td>";
            foreach ($produksi_liquid as $value) {
                # code...
                if($value['well_name'] == $sumur['id'] && $value['tanggal']==$today){
                    $bopd_today = $value['bopd'];
                    foreach ($produksi_liquid as $value1) {
                        # code...
                        if($value1['well_name'] == $sumur['id'] && $value1['tanggal']==$yesterday){
                            $bopd_yest = $value1['bopd'];

                            foreach ($produksi_gas as $value2) {
                                # code...
                                if($value2['well_name'] == $sumur['id'] && $value2['tanggal']==$today){
                                    $gas_total_today = $value2['total'];
                                    $hp_scrubber = $value2['hp_scrubber'];

                                    foreach ($produksi_gas as $value3) {
                                        # code...
                                        if($value3['well_name'] == $sumur['id'] && $value3['tanggal']==$yesterday){
                                            $gas_total_yest = $value3['total'];
                                            $persen_oil = ($bopd_today / $sas_oil) * 100;
                                            $updown_oil = $bopd_today - $bopd_yest;
                                            $ytd_oil = $bopd_today / $total_data_bopd;
                                            $persen_ytd_oil = $ytd_oil / $sas_oil;
                                            $persen_gas = ($gas_total_today / $sas_gas) * 100;
                                            $updown_gas = $gas_total_today - $gas_total_yest;
                                            $ytd_gas = $gas_total_today / $total_data_gas;
                                            $persen_ytd_gas = $ytd_gas / $sas_gas;
                                            
                                            echo "<td>".$sas_oil."</td>";
                                            echo "<td>".$bopd_today."</td>";  
                                            echo "<td>".$bopd_yest."</td>";
                                            echo "<td>".number_format($persen_oil,2)."</td>";
                                            echo "<td>".number_format($updown_oil,2)."</td>";
                                            echo "<td>".number_format($ytd_oil,2)."</td>";
                                            echo "<td>".number_format($persen_ytd_oil,2)."</td>";
                                            echo "<td>".$sas_gas."</td>";
                                            echo "<td>".$gas_total_today."</td>";
                                            echo "<td>".$gas_total_yest."</td>";
                                            echo "<td>".number_format($persen_gas,2)."</td>";
                                            echo "<td>".number_format($updown_gas,2)."</td>";
                                            echo "<td>".number_format($ytd_gas,2)."</td>";
                                            echo "<td>".number_format($persen_ytd_gas,2)."</td>";
                                            echo "<td>".number_format($hp_scrubber,2)."</td>";
                                            echo "</tr>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        echo "</tbody>
    </table>
    </div>
    </div>
    ";
?>
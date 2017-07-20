<?php
    echo "
        <div class='container-fluid' style='background:#fff;margin-top:0px; padding-top:30px; padding-bottom:15px; border-bottom:solid thin #e8e8e8; box-shadow:         0px -6px 22px 0px rgba(0, 0, 0, 0.2); border-radius: 0px;'>
        <div class='table-responsive'>
        <table class='table table-hover table-bordered' width='100%'>
        <thead>
            <tr class='active'>
                <th rowspan='3' > Struktur </th>
                <th rowspan='3' > Well </th>
                <th rowspan='3' > Choke </th>
                <th colspan='3' > Produksi Liquid</th>
                <th colspan='3' > Produksi Gas</th>
                <th colspan='4' > Well Pressure & Temperature</th>
            </tr>
            <tr>
                <th rowspan='2'> BLPD </th>
                <th rowspan='2'> BOPD </th>
                <th rowspan='2'> Kadar Air %</th>
                <th rowspan='2' >HP SCRUBBER</th>
                <th rowspan='2' >LP</th>
                <th rowspan='2' >Total</th>
                <th rowspan='2' >THP</th>
                <th rowspan='2' >FL</th>
                <th rowspan='2' >CHP</th>
                <th rowspan='2' >Temp</th>
            </tr>
        </thead>
        <tbody>";
                $total_bopd_pdw = 0;
                $total_blpd_pdw = 0;
                $total_bopd_pmn = 0;
                $total_blpd_pmn = 0;
                $total_bopd_tsm = 0;
                $total_blpd_tsm = 0;
                $total_bopd_lvt = 0;
                $total_blpd_lvt = 0;
                $total_bopd_pmt = 0;
                $total_blpd_pmt = 0;
                $total_bopd_prt = 0;
                $total_blpd_prt = 0;
                $total_bopd_krd = 0;
                $total_blpd_krd = 0;
                $total_bopd_pds = 0;
                $total_blpd_pds = 0;

            foreach ($sumur->result_array() as $key => $sumur) {
                
                echo "<tr>
                        <td>".$sumur['name']."</td>
                        <td>".$sumur['id']."</td>";
                        
                foreach ($produksi_liquid as $key => $value) {
                    # code...
                    if($value['tanggal']==$today && $value['well_name']==$sumur['id']){
                        $choke = $value['choke'];
                        $bopd_today = $value['bopd'];
                        $blpd_today = $value['blpd'];
                        $kadar_air_today = $value['kadar_air'];
                        if($sumur['name']=="pagardewa"){
                            $total_bopd_pdw += $value['bopd'];
                            $total_blpd_pdw += $value['blpd'];
                        }
                        if($sumur['name']=="prabumenang"){
                            $total_bopd_pmn += $value['bopd'];
                            $total_blpd_pmn += $value['blpd'];
                        }
                        if($sumur['name']=="tasim"){
                            $total_bopd_tsm += $value['bopd'];
                            $total_blpd_tsm += $value['blpd'];
                        }
                        if($sumur['name']=="lavatera"){
                            $total_bopd_lvt += $value['bopd'];
                            $total_blpd_lvt += $value['blpd'];
                        }
                        if($sumur['name']=="pemaat"){
                            $total_bopd_pmt += $value['bopd'];
                            $total_blpd_pmt += $value['blpd'];
                        }
                        if($sumur['name']=="piretrium"){
                            $total_bopd_prt += $value['bopd'];
                            $total_blpd_prt += $value['blpd'];
                        }
                        if($sumur['name']=="karangdewa"){
                            $total_bopd_krd += $value['bopd'];
                            $total_blpd_krd += $value['blpd'];
                        }
                        if($sumur['name']=="pagardewa selatan"){
                            $total_bopd_pds += $value['bopd'];
                            $total_blpd_pds += $value['blpd'];
                        }
                        
                    }
                }
                foreach ($produksi_gas as $key => $value) {
                    # code...
                    if($value['tanggal']==$today && $value['well_name']==$sumur['id']){
                        $hp_scrubber = $value['hp_scrubber'];
                        $lp = $value['lp'];
                        $total = $value['total'];
                    }
                }

                foreach ($pt as $key => $value) {
                    # code...
                    if($value['tanggal']==$today){
                        $thp = $value['thp'];
                        $fl = $value['fl'];
                        $chp = $value['chp'];
                        $temp = $value['temp'];
                    }
                }       
                        echo "<td>".$choke."</td>
                        <td>".$bopd_today."</td>
                        <td>".$blpd_today."</td>
                        <td>".$kadar_air_today."</td>
                        <td>".$hp_scrubber."</td>
                        <td>".$lp."</td>
                        <td>".$total."</td>
                        <td>".$thp."</td>
                        <td>".$fl."</td>
                        <td>".$chp."</td>
                        <td>".$temp."</td>
                    </tr>
                    ";
            }
            
        echo "</tbody>
    </table>
    </div>
    </div>
    <div class='container-fluid' style='background:#fff;margin-top:0px; padding-top:30px; padding-bottom:15px; border-bottom:solid thin #e8e8e8; box-shadow:         0px -6px 22px 0px rgba(0, 0, 0, 0.2); border-radius: 0px;'>
        <div class='table-responsive'>
        <table class='table table-hover table-bordered' width='100%'>
        <thead>
            <tr class='active'>
                <th rowspan='2' > Struktur </th>
                <th colspan='2' > Produksi Liquid</th>
            </tr>
            <tr>
                <th> BLPD </th>
                <th> BOPD </th>
            </tr>
        </thead>
        <tbody>";
            /*$pdw = false;
            $pmn = false;
            $tsm = false;
            $lvt = false;
            $pmt = false;
            $prt = false;
            $krd = false;
            $pds = false;
            foreach ($sumur as $key => $value) {
                # code...
                if($pdw==false && $value['name']=="pagardewa"){
                    echo "<td>".$value['name']."</td>";
                    $pdw = true;
                }
                if($pmn==false && $value['name']=="prabumenang"){
                    echo "<td>".$value['name']."</td>";
                    $pmn = true;
                }
                if($tsm==false && $value['name']=="tasim"){
                    echo "<td>".$value['name']."</td>";
                    $tsm = true;
                }
                if($lvt==false && $value['name']=="lavatera"){
                    echo "<td>".$value['name']."</td>";
                    $lvt = true;
                }
                if($pmt==false && $value['name']=="pemaat"){
                    echo "<td>".$value['name']."</td>";
                    $pmt = true;
                }
                if($prt==false && $value['name']=="piretrium"){
                    echo "<td>".$value['name']."</td>";
                    $prt = true;
                }
                if($krd==false && $value['name']=="karangdewa"){
                    echo "<td>".$value['name']."</td>";
                    $krd = true;
                }
                if($pds==false && $value['name']=="pagardewa selatan"){
                    echo "<td>".$value['name']."</td>";
                    $pds = true;
                }
            }
            */
            echo "<tr>
                    <td>PAGAR DEWA</td>
                    <td>".$total_bopd_pdw."</td>
                    <td>".$total_blpd_pdw."</td>
                    </tr>
                    <tr>
                    <td>PRABUMENANG</td>
                    <td>".$total_bopd_pmn."</td>
                    <td>".$total_blpd_pmn."</td>
                    </tr>
                    <tr>
                    <td>TASIM</td>
                    <td>".$total_bopd_tsm."</td>
                    <td>".$total_blpd_tsm."</td>
                    </tr>
                    <tr>
                    <td>LAVATERA</td>
                    <td>".$total_bopd_lvt."</td>
                    <td>".$total_blpd_lvt."</td>
                    </tr>
                    <tr>
                    <td>PEMAAT</td>
                    <td>".$total_bopd_pmt."</td>
                    <td>".$total_blpd_pmt."</td>
                    </tr>
                    <tr>
                    <td>PIRETRIUM</td>
                    <td>".$total_bopd_prt."</td>
                    <td>".$total_blpd_prt."</td>
                    </tr>
                    <tr>
                    <td>KARANG DEWA</td>
                    <td>".$total_bopd_krd."</td>
                    <td>".$total_blpd_krd."</td>
                    </tr>
                    <tr>
                    <td>PAGARDEWA SELATAN</td>
                    <td>".$total_bopd_pds."</td>
                    <td>".$total_blpd_pds."</td>
                    </tr>";
            
        echo "</tbody>
    </table>
    </div>
    </div>";
?>
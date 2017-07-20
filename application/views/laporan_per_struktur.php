<?php
    echo "
        <div class='container-fluid' style='background:#fff;margin-top:0px; padding-top:30px; padding-bottom:15px; border-bottom:solid thin #e8e8e8; box-shadow:         0px -6px 22px 0px rgba(0, 0, 0, 0.2); border-radius: 0px;'>
        <div class='table-responsive'>
        <table class='table table-hover table-bordered' width='100%'>
        <thead>
            <tr class='active'>
                <th rowspan='2' > Struktur </th>
                <th colspan='2' > Produksi Liquid</th>
            </tr>
            <tr>
                <th rowspan='2'> BLPD </th>
                <th rowspan='2'> BOPD </th>
            </tr>
        </thead>
        <tbody>";
            foreach ($sumur->result_array() as $key => $value) {
                # code...
                
            }
            
        echo "</tbody>
    </table>
    </div>
    </div>
    ";
?>
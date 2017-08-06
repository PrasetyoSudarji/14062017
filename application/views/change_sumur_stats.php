<?php
    echo "
        <div class='container-fluid' style='background:#fff;margin-top:0px; padding-top:30px; padding-bottom:15px; border-bottom:solid thin #e8e8e8; box-shadow:         0px -6px 22px 0px rgba(0, 0, 0, 0.2); border-radius: 0px;'>
        
        <div id='sumurstats'>
        <div class='table-responsive'>
        <table id='list' class='table table-hover table-bordered' width='100%'>
        <thead>
            <tr class='active'>
                <th > Well Name </th>
                <th > Status </th>
                <th > Action </th>
            </tr>
        </thead>
        <tbody>
        ";

        $no = 1;
            foreach ($sumur->result_array() as $key => $value) {
                # code...
                echo "
                    <tr>
                    <th>".$value['id']."</th>
                    <th>
                    "; 
                    if($value['status']== "active"){
                        //echo "<input id='mycheckbox' value='".$value['id']."' type='checkbox' name='mycheckbox' checked></th>";
                        echo "<input type='checkbox' checked data-toggle='toggle' disabled data-on='Active' data-off='Dry'>";
                        
                    }else{
                        //echo "<input id='mycheckbox' value='".$value['id']."' type='checkbox' name='mycheckbox' ></th>";
                        echo "<input type='checkbox' data-toggle='toggle' disabled data-on='Active' data-off='Dry'>";
                    }
                    echo "<th><input type='button' class='btn btn-info' onclick='update_sumur(".$value['no'].");' value='Change'></th>
                    </tr>
                    ";
                    $no++;
            }
        echo "
        </tbody>
        
    </table>
    </div>
    </div>
    </div>
    ";
?>
<?php
echo "<div class='container' style='background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2); padding: 30px;'>";
    echo "<form method='POST' action='".base_url()."index.php/menu/proses_grafik'>
            <input size='1' type='text' class='form-control' name='tahun'>
            <br>
            <br>
            <input type='submit' class='btn btn-info' value='Search'>
        </form> ";

    foreach ($report->result_array() as $key => $value) {
        $nilai = array(
            $value['jan'],
            $value['feb'],
            $value['mar'],
            $value['apr'],
            $value['mei'],
            $value['jun'],
            $value['jul'],
            $value['aug'],
            $value['sep'],
            $value['oct'],
            $value['nov'],
            $value['des'],
        );
    }

    $bulan = array(
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    );
?>

<br>
<div id="container"></div>
</div>

<script type="text/javascript">

    Highcharts.chart('container', {

        title: {
            text: 'Laporan BOPD PGDP-PEP Tahun '+<?php echo "2017"; ?>
        },

        xAxis: {
            categories:  <?php echo json_encode($bulan);?>
        },

        yAxis: {
            title: {
                text: 'Total BOPD per Bulan'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            column: {
                depth: 25
            }
        },

        series: [{
            name: 'BOPD',
            data: [<?php 
                    for($i = 0;$i<12;$i++){
                        echo $nilai[$i].',';
                    } 
                    ?>]
        }]

    });
</script>

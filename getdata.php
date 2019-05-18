<center>
    <h1>Dida Nurwanda</h1>
    <a href="http://didanurwanda.blogspot.com">http://didanurwanda.blogspot.com</a>
</center>
<br />
<br />

<?php

require_once dirname(__FILE__) .'/phpexcel/PHPExcel/IOFactory.php';

$objPHPExcel = PHPExcel_IOFactory::load('./file.xlsx');
$sheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

$no = 1;
echo '<table border="1" width="800" align="center">';
foreach($sheet as $row):
    if($no == 1) 
    {
        echo '<tr>';
            echo '<td></td>';
            foreach($row as $key => $val)
                echo '<td><b>'. $key .'</b></td>';
        echo '</tr>';   
    }
    echo '<tr>';
    echo '<td><b>'. $no .'</b></td>';
    foreach($row as $key => $val)
        echo '<td>'. $row[$key] .'</td>';
    echo '</tr>';
    $no++;
endforeach;
echo '</table>';
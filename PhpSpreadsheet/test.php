<?php

require 'vendor/autoload.php';
include('../db.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
//use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$inputFileName = './ExportDataUser.xlsx';
$inputPubFileName = [
    './data/Publications1.xls',
    './data/Publications2.xls',
    './data/Publications3.xls',
    './data/Publications4.xls',
    './data/Publications5.xls',
    './data/Publications6.xls',
    './data/Publications7.xls',
    './data/Publications8.xls',
    './data/Publications9.xls',
    './data/Publications10.xls',
    './data/Publications11.xls',
    './data/Publications12.xls',
    './data/Publications13.xls',
    './data/Publications14.xls',
    './data/Publications15.xls',
    './data/Publications16.xls',
    './data/Publications17.xls',
    './data/Publications18.xls',
    './data/Publications19.xls',
    './data/Publications20.xls',
    './data/Publications21.xls',
    './data/Publications22.xls',
    './data/Publications23.xls',
    './data/Publications24.xls',
    './data/Publications25.xls',
    './data/Publications26.xls',
    './data/Publications27.xls',
    './data/Publications28.xls',
    './data/Publications29.xls',
    './data/Publications30.xls',
    './data/Publications31.xls',
    './data/Publications32.xls',
    './data/Publications33.xls',
    './data/Publications34.xls',
    './data/Publications35.xls',
    './data/Publications36.xls',
    './data/Publications37.xls',
    './data/Publications38.xls',
    './data/Publications39.xls',
    './data/Publications40.xls',
    './data/Publications41.xls',
    './data/Publications42.xls',
    './data/Publications43.xls',
    './data/Publications44.xls',
    './data/Publications45.xls',
    './data/Publications46.xls',
    './data/Publications47.xls',
    './data/Publications48.xls',
    './data/Publications49.xls',
    './data/Publications50.xls'
];
$inputFileType = 'Xlsx';

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
$worksheet = $spreadsheet->getActiveSheet();

echo '<table>' . PHP_EOL;
foreach ($worksheet->getRowIterator() as $row) {
    echo '<tr>' . PHP_EOL;
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
    //    even if a cell value is not set.
    // By default, only cells that have a value
    //    set will be iterated.
    $iterasi = 1;
    foreach ($cellIterator as $cell) {
        $value = $cell->getValue();
        switch ($iterasi) {
            case 2:
                $id = $value;
                break;
            case 3:
                $nama = $value;
                break;
            case 4:
                $affiliation = $value;
                break;
            case 5:
                $total_cites = $value;
                break;
            case 6:
                $h_index = $value;
                break;
            case 7:
                $i10_index = $value;
                break;
            case 8:
                $fields = $value;
        }
        $homepage = NULL;
        echo '<td>' . $value . '</td>' . PHP_EOL;

        if ($iterasi == 8) {
            DB::query('INSERT INTO user VALUES (:id,:nama,:affiliation,:total_cites,:h_index,:i10_index,:fields,:homepage)', array(
                ':id' => $id, ':nama' => $nama, ':affiliation' => $affiliation, ':total_cites' => $total_cites, ':h_index' => $h_index, ':i10_index' => $i10_index,
                ':fields' => $fields, ':homepage' => $homepage
            ));
        }
        $iterasi++;
    }
    echo '</tr>' . PHP_EOL;
}
echo '</table>' . PHP_EOL;

echo "<br>fin";

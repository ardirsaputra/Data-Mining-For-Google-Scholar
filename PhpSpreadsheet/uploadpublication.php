<?php
if (isset($_GET['id'])) {

    require 'vendor/autoload.php';
    include('../db.php');

    //use PhpOffice\PhpSpreadsheet\Spreadsheet;
    //use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $inputFileName = [
        './data/Publication0.xlsx',
        './data/Publication1.xlsx',
        './data/Publication2.xlsx',
        './data/Publication3.xlsx',
        './data/Publication4.xlsx',
        './data/Publication5.xlsx',
        './data/Publication6.xlsx',
        './data/Publication7.xlsx',
        './data/Publication8.xlsx',
        './data/Publication9.xlsx',
        './data/Publication10.xlsx',
        './data/Publication11.xlsx',
        './data/Publication12.xlsx',
        './data/Publication13.xlsx',
        './data/Publication14.xlsx',
        './data/Publication15.xlsx',
        './data/Publication16.xlsx',
        './data/Publication17.xlsx',
        './data/Publication18.xlsx',
        './data/Publication19.xlsx',
        './data/Publication20.xlsx',
        './data/Publication21.xlsx',
        './data/Publication22.xlsx',
        './data/Publication23.xlsx',
        './data/Publication24.xlsx',
        './data/Publication25.xlsx',
        './data/Publication26.xlsx',
        './data/Publication27.xlsx',
        './data/Publication28.xlsx',
        './data/Publication29.xlsx',
        './data/Publication30.xlsx',
        './data/Publication31.xlsx',
        './data/Publication32.xlsx',
        './data/Publication33.xlsx',
        './data/Publication34.xlsx',
        './data/Publication35.xlsx',
        './data/Publication36.xlsx',
        './data/Publication37.xlsx',
        './data/Publication38.xlsx',
        './data/Publication39.xlsx',
        './data/Publication40.xlsx',
        './data/Publication41.xlsx',
        './data/Publication42.xlsx',
        './data/Publication43.xlsx',
        './data/Publication44.xlsx',
        './data/Publication45.xlsx',
        './data/Publication46.xlsx',
        './data/Publication47.xlsx',
        './data/Publication48.xlsx',
        './data/Publication49.xlsx',
        './data/Publication50.xlsx'
    ];
    $inputFileType = 'Xlsx';
    // configure uplaod file 
    $dataIdUser = [
        "iJKRnI8AAAAJ",
        "iJKRnI8AAAAJ",
        "cFenRT4AAAAJ",
        "3wQdAXgAAAAJ",
        "q8kQaQIAAAAJ",
        "Ya8scsoAAAAJ",
        "vAYxYCEAAAAJ",
        "48aspzAAAAAJ",
        "1hvHmw0AAAAJ",
        "6LOMLkYAAAAJ",
        "buNtmFwAAAAJ",
        "DcVSP2wAAAAJ",
        "m8E9GkIAAAAJ",
        "Hdt7B-YAAAAJ",
        "_g36jpkAAAAJ",
        "mhlc5VwAAAAJ",
        "slJPkvwAAAAJ",
        "ZLC8oXgAAAAJ",
        "1_3WGxIAAAAJ",
        "YqabAYwAAAAJ",
        "vzfKrdAAAAAJ",
        "pYjfPacAAAAJ",
        "rCOO4P4AAAAJ",
        "aygm-fQAAAAJ",
        "VZmX3RkAAAAJ",
        "ql6gP9QAAAAJ",
        "bh2_NlAAAAAJ",
        "TTVIc6cAAAAJ",
        "LXBn-8oAAAAJ",
        "I6e272EAAAAJ",
        "8bjW7A4AAAAJ",
        "2RirDyEAAAAJ",
        "cAocFcsAAAAJ",
        "gWv-VB0AAAAJ",
        "_cU5eIUAAAAJ",
        "Ey_9mpIAAAAJ",
        "bIoUNggAAAAJ",
        "VARh7fMAAAAJ",
        "vxmNDIkAAAAJ",
        "JKUpQDYAAAAJ",
        "6Eb1FpsAAAAJ",
        "tj_Q1AcAAAAJ",
        "INnE42kAAAAJ",
        "FMOZzmEAAAAJ",
        "eXEccP4AAAAJ",
        "vTzQ64IAAAAJ",
        "I0T0cPMAAAAJ",
        "tpzw4SgAAAAJ",
        "8yUiyckAAAAJ",
        "En3_A0gAAAAJ",
        "WDXN5sUAAAAJ"
    ];
    $id = $_GET['id'];
    $nomor = $id;
    $spreadsheet    = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName[$id]);
    $user_id        =                                              $dataIdUser[$id];
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
                case 9:
                    $id = $value;
                    break;
                case 2:
                    $title = $value;
                    break;
                case 3:
                    $author = $value;
                    break;
                case 4:
                    $jurnal = $value;
                    break;
                case 5:
                    $nomor = $value;
                    break;
                case 6:
                    $cites = $value;
                    break;
                case 7:
                    $year = $value;
                    break;
                case 8:
                    $cid = $value;
            }
            echo '<td>' . $value . '</td>' . PHP_EOL;

            if ($iterasi == 9) {
                DB::query('INSERT INTO publications VALUES (\'\',:id,:title,:author,:jurnal,:nomor,:cites,:year,:cid,:user_id)', array(
                    ':id' => $id, ':title' => $title, ':author' => $author, ':jurnal' => $jurnal, ':nomor' => $nomor, ':cites' => $cites, ':year' => $year, ':cid' => $cid, ':user_id' => $user_id
                ));
            }
            $iterasi++;
        }
        echo '</tr>' . PHP_EOL;
    }
    echo '</table>' . PHP_EOL;

    echo "<br>fin";
    DB::query('DELETE FROM publications WHERE title = "title"');
}

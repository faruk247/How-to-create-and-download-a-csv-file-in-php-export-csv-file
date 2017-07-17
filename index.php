<?php
    // output headers for the file is downloaded rather than displayed
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=file.csv");
    header("Pragma: no-cache");
    header("Expires: 0");


    // data for csv file

    $employees = array(
        array("Faruk", "Development", "90000"),
        array("Siyam", "HR", "125000"),
        array("Jisan", "Marketting", "65000")
    );

    // for output stream
    $file = fopen('php://output', 'w');

    // for column headings
    fputcsv($file, array('Name', 'Department', 'Salary'));

    foreach ($employees as $employee) {
        //use fputcsv() generate correct csv lines from your array
        fputcsv($file, $employee);
    }

?>

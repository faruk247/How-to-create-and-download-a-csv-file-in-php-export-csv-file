<?php

    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=file.csv");
    header("Pragma: no-cache");
    header("Expires: 0");

    $employees = array(
        array("Faruk", "Development", "90000"),
        array("Siyam", "HR", "125000"),
        array("Jisan", "Marketting", "65000")
    );

    $file = fopen('php://output', 'w');
    fputcsv($file, array('Name', 'Department', 'Salary'));

    foreach ($employees as $employee) {
        fputcsv($file, $employee);
    }

?>

<?php

/*
 * ==================================================================
 * Execute operations upon form submit (store form data in date.csv).
 * ==================================================================
 */
if (isset($_POST['submit'])) {
    // Collect the form data.
    $fid = isset($_POST['userid']) ? $_POST['userid'] : '';
    $lname = isset($_POST['username']) ? $_POST['username'] : '';


    if (!isset($errors)) {
        // The header row of the CSV.

        // The data of the CSV.
        $data = "$fid,$lname\n";

        /*
         * The file name of the CSV.
         * 
         * NB: __DIR__ describes the location in which this file resides.
         * To go up one level use "dirname(__DIR__)".
         * 
         * NB: You will not be able to append data to an existing file if you use time components 
         * (hour, minutes, seconds) inside the file name. Imagine that you are creating a file 
         * right now, at 12:18:43 o'clock. Then the file will be named "formdata-09-01-18-12-38-43.csv".
         * One second later you will not be able to append data to it because the time will be "12:38:44".
         * Then a new file "formdata-09-01-18-12-38-44.csv" will be created.
         * 
         * I suggest using only the date whithout the time in the file name.
         * 
         * @todo Read the comment above!
         */
        $fileName = "/home/surajit/Desktop/uploads/uploaded_file.csv";

        /*
         * Create the CSV file.
         * If file exists, append the data to it. Otherwise create the file.
         */
       
          file_put_contents($fileName, $data, FILE_APPEND);
$file = file_get_contents("/home/surajit/Desktop/uploads/uploaded_file.csv");
 $data = array_map("str_getcsv", preg_split('/\r*\n+|\r+/', $file));
 $data = json_encode($data);


 print_r($data);
    }
}

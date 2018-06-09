
<?php


$file = file_get_contents("/home/surajit/Desktop/uploads/uploaded_file.csv");
 $data = array_map("str_getcsv", preg_split('/\r*\n+|\r+/', $file));
 $data = json_encode($data);


 print_r($data);

?>


<?php
// Managing Web Operations: Setting Headers and Performing Redirection
// header(header_string, replace T or F, status_code)

// reads file into $jpg
$filename = './furball_santa_rosa_433px.JPG';
$jpg = file_get_contents($filename);

// sets content type
header('Content-Type: image/jpeg');

// sets length
header('Content-Length: ' . strlen($jpg));

// sets disposition
header('Content-Disposition: inline; filename="' . $filename . '"');

// display graphic
echo $jpg;

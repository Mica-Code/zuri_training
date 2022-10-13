<?php

//get the data from the submitted form

$file = "./userdata.csv";
$handle = fopen($file, "a");

fwrite($handle, "Name: ".$_POST["name"]."\n");
fwrite($handle, "Email: ".$_POST["email"]."\n");
fwrite($handle, "Date Of Birth: ".$_POST["dob"]."\n");
fwrite($handle, "Gender: ".$_POST["gender"]."\n");
fwrite($handle, "Country: ".$_POST["country"]."\n");
fwrite($handle, "=================================\n");
fclose($handle);

print_r("Name : ".$_POST["name"]."<br>");
print_r("Email : ".$_POST["email"]."<br>");
print_r("Date of Birth : ".$_POST["dob"]."<br>");
print_r("Gender : ".$_POST["gender"]."<br>");
print_r("Country : ".$_POST["country"]."<br>");

?>
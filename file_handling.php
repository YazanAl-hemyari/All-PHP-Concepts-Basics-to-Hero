<?php

//$handle=fopen($filename, $mode);// open a file
//$myfile=fopen("amr.txt", "r");// r means read
//to close the file use fclose() function
//fclose($myfile);

// to read the file use fread()
// $filename="amr.txt";
// $myfile=fopen($filename, "r");
// $contents=fread($myfile,filesize($filename));
// echo $contents;
// fclose($myfile)

//to read the file use fwrite()
// $fp=fopen('amr.txt', 'w');
// fwrite($fp, 'lololo');
// fwrite($fp, 'php file');
// fclose($fp);
// echo"Done successfully"

//to add text to the file with out removing the previous text use append
// $fp=fopen('amr.txt', 'a');
// fwrite($fp, ' lodfslolo');
// fwrite($fp, ' phdsfrp file');
// fclose($fp);
// echo"Done successfully"

// to delete the file use unlink()

unlink("amr.txt");
echo "deleted successfully";
?>
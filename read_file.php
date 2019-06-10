<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("book1.xlsx", "r") or die("Unable to open file!");
$file_read=fread($myfile,filesize("book1.xlsx"));
echo $file_read;
fclose($myfile);
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body{
            color : blue;
            text-size-adjust:28px;
            font-size: larger;
            font-style:italic;
        }
    </style>
</head>
<body>
<?php
$tulisan="HELLO WORLD! HERE I COME! ";
$kelas="ganti-style";

echo ganti_style($tulisan,$kelas);

function ganti_style($text,$kelas){
return "<span class='$kelas'> $text </span>";
}

?>
</body>
</html>

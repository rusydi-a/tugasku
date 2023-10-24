<!DOCTYPE html>
<html lang="en">

<head>
    <title>GANJIL GENAP PRIMA</title>
</head>

<body>

    <?php
        function Prima($a) {
        if ($a <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($a); $i++) {
            if ($a % $i == 0) {
                return false;
            }
        }
        return true;
        }
        
    echo "Pengulangan Untuk Mencari kategori bilangan :<br>";

    for($j = 1; $j <= 20; $j++){
        echo "<br>";
        if( ($j % 2) == 0){
            echo "• Angka $j adalah bilangan Genap";
        }else {
            echo "• Angka $j adalah bilangan Ganjil";
        }	

        if (Prima($j)) {
            if ($j > 10) {
                echo " dan sekaligus bilangan Prima";
            } else {
                echo " sekaligus bilangan Prima";
            }
        }
        if($j >=1){
            echo "<br>";
        }else{
            echo "";
        }
    }
    ?>

</body>

</html>
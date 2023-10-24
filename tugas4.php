<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABEL LOOP</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>kolom 1</th>
            <th>kolom2</th>
            <th>kolom3</th>
            <th>kolom4</th>
            <th>kolom5</th>
        </tr>
        <?php
        for ($row=1; $row <= 15; $row++) { 
            echo "<tr>";
            for ($col=1; $col <= 5; $col++) { 

               echo "<td>Baris $row Kolom $col </td> ";
                   }
                  echo "</tr>";
            }
            ?>
    </table>
</body>
</html>
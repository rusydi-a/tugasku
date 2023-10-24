<!DOCTYPE html>
<html lang="en">

<head>
   <title>KOTAK SEGTIGA WARNA (LOOP)</title>
   <style>
      .kotak {
         text-align: center;
         display: inline-block;
         width: 30px;
         height: 30px;
         line-height: 30px;
         border: 1px solid black;
         margin: 5px;
      }

      .clear {
         display: block;
         clear: both; /* Added clear property to clear floats */
      }

      .ganjil{
         background-color: #003;
         color: #fff;
      }

      .genap{
         background-color: #999;
      }
   </style>
</head>

<body>

<?php
   for ($i=0; $i<=5; $i++) {
      for ($j=1; $j<=$i; $j++){
         if ($i % 2 == 0) {
            $color = 'genap'; /* Removed unnecessary <div> tags from $color */
         } else {
            $color = 'ganjil'; /* Removed unnecessary <div> tags from $color */
         }

         echo "<div class='kotak $color'>$j</div>"; /* Combined the $color variable with the class attribute */

      }

      echo '<div class="clear"></div>';

   }
?>
</body>

</html>

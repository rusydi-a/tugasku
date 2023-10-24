<!DOCTYPE html>
<html lang="en">

<head>
   <title>KOTAK SEGTIGA (LOOP)</title>
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
         clear: both;
      }
   </style>
</head>

<body>
   <?php
      for ($i = 0; $i <= 5; $i++) {
         for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak'>$j</div>";
         }
         echo '<div class="clear"></div>';
      }
   ?>
</body>

</html>

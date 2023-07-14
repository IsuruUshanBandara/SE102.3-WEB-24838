<!DOCTYPE html>
<html>
    <head>
        <title></title>
        
    </head>
    <body>
        <?php
         $unit=100;
        
         if($unit>=50)
         {
            $cost=3.50*$unit;
         }
         else if($unit>=100)
         {
            $cost=4*$unit;
         }
         else if($unit>=150)
         {
            $cost=5.20*$unit;
         }
         else
         {
            $cost=6.50*$unit;
         }

         

        ?>
    </body>
</html>
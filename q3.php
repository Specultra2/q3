<?php
// Your code here!

function pattern()
{
      $rows = (int)readline("Insert Odd number ");
  
    for ($i = $rows; $i > 0; $i-=2)
    {
          
        for($j = $i; $j > 0; $j--)
        {
              
            // Printing stars
            echo "* ";
        }
  
        // ending line after
        // each row
        echo "\n";
    }
}

   
    pattern();



?>

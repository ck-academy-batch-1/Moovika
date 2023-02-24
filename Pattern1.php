
<?php 
$rows = 7;
$cols = 7;

for ($i = 0; $i < $rows; $i++) {
  for ($j = 0; $j < $cols; $j++) {
    if ($j == 0 || $j == $cols - 1) {
      echo "**  &nbsp;";
    } elseif ($i == $j && $i <= $rows / 2 || $j == $cols - $i - 1 && $i <= $rows / 2) {
      echo "** ";
    } else {
      echo " &nbsp; &nbsp;";
    }
  }
  echo "<br>";
}
echo "<br>";

for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if ((($column == 1 or $column == 5) and $row != 0 and $row != 6) or (($row == 0 or $row == 6) and $column > 1 and $column < 5))
            echo "**";    
        else  
            echo " &nbsp; &nbsp;";     
	}        
  echo "<br>";
}
echo "<br>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
          if ((($column == 1 or $column == 5) and $row < 5) or ($row == 6 and $column == 3) or ($row == 5 and ($column == 2 or $column == 4)))
            echo "**";    
        else  
            echo " &nbsp; &nbsp; ";     
	}        
  echo "<br>";
}
echo "<br>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
   if ($column == 3 or ($row == 0 and $column > 0 and $column < 6) or ($row == 6 and $column > 0 and $column < 6))
            echo "**";    
        else  
            echo "&nbsp; &nbsp;  ";     
	}        
  echo "<br>";
}


?>
<?php
echo"<h1>Pyramid</h1>";
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
{
    echo"*";
}
echo"<br>";
}
for($a=5;$a>=1;$a--)
{
    for($b=1;$b<=$a;$b++)
    {
        echo"*";
    }
    echo"<br>";
}
?>
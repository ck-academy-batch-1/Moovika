<?php
    for ($row = 1; $row <= 8; $row++) {
    for ($col = 1; $col <= 8; $col++) {
        if (($row + $col) % 2 == 0) {
            echo '<div style="background-color: black; width: 60px; height: 60px; display: inline-block;  border: 2px solid black;"></div>';
        } else {
            echo '<div style="background-color: white; width: 60px; height: 60px; display: inline-block; border: 2px solid black "></div>';
        }
    }
    echo '<br>';
}
?>
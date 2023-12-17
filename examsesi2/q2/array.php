<?php

$food = array('nasi goreng','nasi lemak','nasi ganja','nasi kerabu');
$foodprice = array(6.00,5.00,5.50,6.50);

$menu = array('Makan' => $food, 'Harga' => $foodprice);

echo "<table border='1'>";
foreach($menu as $input => $value1)
{
    echo "<tr>";
    echo "<th>$input</th>";
    foreach ($value1 as $value2) {
        echo "<td>$value2</td>";
    }
    echo "</tr>";
}
echo "</table>";

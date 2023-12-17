<?php

$persondata = array("name" => "Kerol", "age" => "20", "address" => "KL" , "religion" => "Islam", "country" => "Malaysia");

echo "<h2> Person Detail</h2> ";
echo "<ul>";
foreach ($persondata as $key => $value)
{
    echo "<li>$key : $value</li>";
}
echo "</ul>"
?>;

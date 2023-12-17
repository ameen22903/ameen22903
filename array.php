<?php

echo "<h1>Numerical Array</h1>";
//1. Numerical array / indexed array
//index : start  with 0

$device = array('handphone','laptop','tablet','camera',25,57.70);

echo "Example of device:".$device[2];
echo "<br>Quantity:".$device[4];

//to check size of an array
// 1.sizeof()
// 2.count()

echo "<br>Size of array device is: ".sizeof($device);
echo "<br>Size of array device is: ".count($device);

$device[] ="kipas";
echo "<br>";
//for(initialization;rule/condition;increment/decrement)
for($index=0; $index<sizeof($device);$index++){

    echo "<br>Device for index [".$index."] is: ".$device[$index];
}
echo "<br><br>FOREACH";
//for each($var_array as $index=>$value)
foreach($device as $index =>$value){
    echo "<br>Device for index [".$index."] is: ".$device[$index];
}
echo "<br><br>";
//roughly view content of an array
print_r($device);
var_dump($device);

echo "<hr>";
echo "<h1>Associative Array</h1>";

// 2.Associative array
// No index
// use KEY for each array value

$hobby = array('hobby1'=>'Sleeping','hobby2'=>'Gaming','hobby3'=>'Eating','hobby4'=>'Watching Movie');

echo "Example of hobby 3 ".$hobby['hobby3']."<br>";

$hobby['hobby5']='Shopping';

var_dump($hobby);

echo "<br>Size of array device is: ".sizeof($hobby);
echo "<br>Size of array device is: ".count($hobby);

foreach($hobby as $key =>$value){
    echo "<br>My hobby is [".$key."] is: ".$value;
}

echo "<hr>";

echo "<h1>Multidemensional array</h1>";

// 3. Multidemensional array

$food = array('Ns Goreang Tomyam','Ns Goreng Pataya','Ns Lemak','Bihun Goreang','Chicken Chop');
$foodprice = array(7.00,8.50,2.50,1.20,15.70);

$drink = array('Ice Lemon Tea','Sirap','Limau Panas','Neslo Ais','Milo Tabur','Air Tebu');
$drinkprice = array(2,0.8,1.5,3.7,2.9,3);

//multidemensional array
$menu = array('Makan'=>$food , 'Harga Makanan'=>$foodprice, 'Minuman'=>$drink , 'Harga Minuman'=>$drinkprice);

print_r($menu);
echo "<br><br>";
foreach($menu as $keymenu =>$subarray){
    echo "$keymenu---><br>";
    foreach($subarray as $index=>$value)
    {
        echo "$value, ";
    }
    echo "<br><br>";
}

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>Menu</h2>

<table border="1">
    <tr>
        <th>Makanan</th>
        <th>Harga Makanan</th>
    </tr>
    <?php
    foreach ($menu['Makan'] as $key => $item) {
        echo "<tr>";
        echo "<td>{$item}</td>";
        echo "<td>{$menu['Harga Makanan'][$key]}</td>";
        echo "</tr>";
    }
    ?>

    <tr>
        <th>Minuman</th>
        <th>Harga Minuman</th>
    </tr>
    <?php
    foreach ($menu['Minuman'] as $key => $item) {
        echo "<tr>";
        echo "<td>{$item}</td>";
        echo "<td>{$menu['Harga Minuman'][$key]}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

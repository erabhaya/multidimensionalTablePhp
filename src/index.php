<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiDimensional Array</title>
</head>

<body>

    <?php
    $items = array(
        "Kolkata" => array(
            "Q1" => array("Milk" => 340, "Egg" => 600, "Bread" => 38),
            "Q2" => array("Milk" => 680, "Egg" => 583, "Bread" => 10),
            "Q3" => array("Milk" => 535, "Egg" => 490, "Bread" => 50)
        ),
        "Delhi" => array(
            "Q1" => array("Milk" => 335, "Egg" => 365, "Bread" => 35),
            "Q2" => array("Milk" => 684, "Egg" => 490, "Bread" => 48),
            "Q3" => array("Milk" => 389, "Egg" => 385, "Bread" => 15)
        ),
        "Mumbai" => array(
            "Q1" => array("Milk" => 336, "Egg" => 484, "Bread" => 80),
            "Q2" => array("Milk" => 595, "Egg" => 594, "Bread" => 39),
            "Q3" => array("Milk" => 366, "Egg" => 700, "Bread" => 20)
        ),
    );
    echo "<center><h1> MultiDimensional Array Table </h1></center>";
    echo "<center><table border = '2px' cellpadding='35px'cellspacing='0px'><tr><th></th><th colspan='3px'>Location='Kolkata'</th><th colspan='3px'>Location='Delhi'</th><th colspan='3px'>Location='Mumbai'</th></tr>";
    echo "<tr><th></th><th colspan='3px'>Item</th><th colspan='3px'>Item</th><th colspan='3px'>Item</th></tr>";
    echo "<tr><th>Time</th><th>Milk</th><th>Egg</th><th>Bread</th><th>Milk</th><th>Egg</th><th>Bread</th><th>Milk</th><th>Egg</th><th>Bread</th></tr>";
    echo "<tr><td>Q1</td>";
    foreach ($items as $key => $value) {
        foreach ($value as $key1 => $value1) {
            foreach ($value1 as $key2 => $value2) {
                if ($key1 == 'Q1') {
                    echo "<td>$value2</td>";
                }
            }
        }
    }
    echo "<tr>
                <td>Q2</td>";

    foreach ($items as $key => $value) {
        foreach ($value as $key1 => $value1) {
            foreach ($value1 as $key2 => $value2) {
                if ($key1 == 'Q2') {
                    echo "<td>$value2</td>";
                }
            }
        }
    }
    echo "<tr><td>Q3</td>";
    foreach ($items as $key => $value) {
        foreach ($value as $key1 => $value1) {
            foreach ($value1 as $key2 => $value2) {
                if ($key1 == 'Q3') {
                    echo "<td>$value2</td>";
                }
            }
        }
    };
    echo "</table></center>";

    echo "<h3>Maximum Eggs Sold by Quarter===========></h3>";

    $quater1 = 0;
    $quater2 = 0;
    $quater3 = 0;
    $items1=0;
    $max = 0;

    foreach ($items as $key => $value) {
        foreach ($value as $key1 => $value1) {

            // print_r($key1);
            foreach ($value1 as $key2 => $value2) {

                if ($key2 == "Egg" && $key1 == "Q1") {
                    $quater1 += $value2;
                    //    echo $quater1;
                }
                if ($key2 == "Egg" && $key1 == "Q2") {
                    $quater2 += $value2;
                    //    echo $quater1;
                }
                if ($key2 == "Egg" && $key1 == "Q3") {
                    $quater3 += $value2;
                    //    echo $quater1;
                }
            }
        }
    }
    if ($quater1> $quater2 && $quater1 > $quater3) {
        echo "Quater 1 is maximum sale of Egg is $quater1";
    }
        if($quater2> $quater1 && $quater2 > $quater3){
            echo "Quater 2 is maximum sale of Egg is $quater2";
        }
            if($quater3> $quater1 && $quater1 > $quater2){
                
                echo "Quater 2 is maximum sale of Egg is $quater3 <br>";
            }
        
    
    echo "<h3>Location with minimum consumption of Milk===========></h3>";

$kolkata=0;
$delhi=0;
$mumbai=0;


    foreach ($items as $key5 => $value5) {
        // echo $key5;
        foreach ($value5 as $key6 => $value6) {

            foreach ($value6 as $key7 => $value7) {
                // echo $key7;
                if ($key7 == "Milk") {
                    // echo "milk";
                    // echo "main hu max $max";
                    // echo "$value7 <br>";
                    if ($key5 == "Kolkata") {
                        // echo "kolkata = $value7 <br>";
                        $kolkata += $value7;
                        // echo "sum of kolkata = $kolkata";
                    }
                    if($key5 == "Delhi"){
                        $delhi += $value7;
                        // echo "sum of delhi = $delhi";
                    }
                    if($key5 == "Mumbai"){
                        $mumbai += $value7;
                        // echo "sum of Mumbai = $mumbai";
                    }
                }
            }
        }
    }
    if($kolkata<$delhi) {
        if($mumbai<$kolkata) {
           echo "Location Mumbai with minimum consumption of Milk = $mumbai";
        } else {
           echo "Location Kolkata with minimum consumption of Milk = $kolkata";
        }
    } else {
        if($delhi<$mumbai) {
           echo "Location Delhi with minimum consumption of Milk = $delhi";
        } else {
           echo "Location Mumbai with minimum consumption of Milk = $mumbai";
        }
    }


    echo "<h3>Location with minimum sale of Bread===========></h3>";
    $kolkata1=0;
    $delhi1=0;
    $mumbai1=0;
        // echo "hi $kolkata1 <br>";

    foreach ($items as $keyA => $valueA){
        // print_r("hi $keyA <br>");
        foreach ($valueA as $keyB => $valueB) {
            // echo $keyB;
            foreach ($valueB as $keyC => $valueC) {
                if($keyC=="Bread"){
                     if($keyA=="Kolkata"){
                        $kolkata1 += $valueC;
                        // echo "this is kolkata bread = $valueC <br>";
                    }
                    if($keyA=="Delhi"){
                        $delhi1 += $valueC;
                        // echo "this is delhi bread = $valueC <br>";
                    }
                    if($keyA=="Mumbai"){
                        $mumbai1 += $valueC;

                        // echo "this is mumbai bread = $valueC <br>";
                    }     
                }    
            }
            # code...
        }
    }
    if($kolkata1<$delhi1){
        if($mumbai1<$kolkata1){
            echo "Location Mumbai with minimum sale of Bread = $mumbai1";  
        }else {
            echo "Location Kolkata with minimum sale of Bread = $kolkata1";
         }
    }else {
        if($delhi1<$mumbai1) {
           echo "Location Delhi with minimum sale of Bread = $delhi1";
        } else {
           echo "Location Mumbai with minimum sale of Bread = $mumbai1";
        }
    }
 
    echo "<h3>Deleted location with Minimum sale of Bread===========></h3>";
    array_splice($items,1,1);
    print_r($items);
     
    ?>

</body>

</html>
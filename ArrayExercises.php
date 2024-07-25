<?php

// https://www.w3resource.com/php-exercises/php-array-exercises.php

/*
1. $color = array('white', 'green', 'red', 'blue', 'black');
Write a script which will display the following string -
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
and the words 'red', 'green' and 'white' will come from $color.
*/

//$color = array('white', 'green', 'red', 'blue', 'black');

//echo "The memory of that scene for me is like a fame of flim forever frozen at that moment: the $color[2] carpet, the $color[1] lawn,
    //the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";




// Q2

function q2(){
    $color = array('white', 'green', 'red');

    foreach ($color as $c){
        echo "$c, ";
    }

    // sort the colors alphabetically
    sort($color);

    // echo the start of an unordered list
    echo "<ul>";

    // Iterate through each color in the sorted array and echo them as list items
    foreach($color as $y){
        echo "<li>$y</li>";
    }

    echo "</ul>";

}

function q3(){
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
    "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
    "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
    "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", 
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

    // sort the associative array
    asort($ceu); 

    foreach($ceu as $country => $capital) {
        echo "The capital of $country is $capital<br>";
    }
    
}


function q4(){
    $x = array(1, 2, 3, 4, 5);

    // dump the variable $x to display its structure and values
    var_dump($x);

    unset($x[3]);

    // Reset the array indices after unset using array_values()
    $x = array_values($x);

    echo"<br>";

    var_dump($x);
}

function q5(){

    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
    echo array_shift($color);
}

function q6($value, $key){
    
    echo "$key : $value<br>";
}

function q6a(){
    // Define a JSON-encoded string representing a nested associative array
    $a = '{"Title": "The Cuckoos Calling",
      "Author": "Robert Galbraith",
      "Detail": { 
                  "Publisher": "Little Brown"
                 }
     }';

     // Decode the JSON string into a PHP associative array
     $j1 = json_decode($a, true);

    // use array_walk_recursive to apply the q6() function to each element in the nested array
    array_walk_recursive($j1, "q6");
}

function q7(){
    $array = array(1, 2, 3, 4, 5);

    // define a string to be inserted
    $inserted = '$';

    // use array_splice to insert the value '$' at index 3 in the original array
    array_splice($array, 3 ,0, $inserted);

    echo "After insertion: <br>";
    foreach($array as $a){
        echo $a;
    }
}

function q8(){
    $arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

    // ascending order sort by value
    asort($arr);

    // ascending order sort by key
    ksort($arr);

    // descending order sorting by value
    arsort($arr);

    // descending order sorting by key
    krsort($arr);
}


function q9(){
    $temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 
    76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

    // initialize variables for total temperature and the length of temperature array
    $tot_temperature = 0;
    $temp_array_length = count($temperature);

    foreach($temperature as $temp){
        $tot_temperature += $temp;
    }

    $avgTemp = $tot_temperature / $temp_array_length;

    echo "Average temperature is: ". $avgTemp;

    // sort temperature array in ascending order
    sort($temperature);

    // Display the list of five lowest temperature
    echo "<br> List of 5 lowest temperature: ";
    $temperature = array_unique($temperature); // make sure no duplicates
    $temperature = array_values($temperature);
    for($i = 0; $i < 5; $i++){
        echo $temperature[$i] . ", ";
    }

    // Display the list of five highest temperature
    echo "<br> List of 5 highest temperature: ";
    for($i = count($temperature) - 5; $i < count($temperature); $i++){
        echo $temperature[$i] . ", ";
    }

    echo "<br> List of 5 highest temperature: ";
    rsort($temperature);
    for($i = 0; $i < 5; $i++){
        echo $temperature[$i] . ", ";
    }
}

// bead sort algorithmn
function q10(){
    // define a function named 'columns' that transposes a 2D array
    function columns($uarr){
        $n = $uarr;

        // Check if the array is empty
        if(count($n) == 0)
        return array();

        // Check if the array has only one element
        else if(count($n) == 1)
            return array_chunk($n[0], 1);

        // Add a NULL element to the begining of the array
        array_unshift($uarr, NULL);

        // Use 'array_map' to transpose the 2D array
        $transpose = call_user_func_array('array_map', $uarr);

        // Use 'array_map' to filter out NULL values from each column
        return array_map('array_filter', $transpose);
    }

    // define a function named 'bead_sort' that performs bead sort on an array
    function bead_sort($uarr){
        // Create an array of poles based on the values in the input array
        foreach($uarr as $e){
            $poles[] = array_fill(0, $e, 1);
        }
            // Use 'array_map' to count the beads in each column of the transposed array
            return array_map('count', columns(columns($poles)));
        
    }

    echo "Original array: ";
    print_r(array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3));

    echo "<br> Array after bead sort: ";
    print_r(bead_sort(array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3)));
}



function buildPalindrome($str){
    $strArr = str_split($str);
    print_r($strArr);

    for($i = 0; $i < strlen($str); $i++){
        if($strArr[$i] !== $strArr[count($strArr) - $i - 1]){
            array_splice($strArr, count($strArr) - $i, 0, $strArr[$i]);
            print_r($strArr);
        }
    }
    return implode("",$strArr);
}

echo buildPalindrome("122");
?>
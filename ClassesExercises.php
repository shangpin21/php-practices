<?php

class MyClass {
    // Define a constructor method 
    public function __construct()
    {
        // Output a message indicating that the class has been initialized
        echo "MyClass class has initialized !". "\n";
    }
}

// create an instance of the MyClass class
$userclass = new MyClass;


// Q2
class Introduction{
    public $message = 'Hello All, I am ';

    // Define a method named introduce which accepts a parameter $name
    public function introduce($name)
    {
        // Concatenate the message with the provided name and return the result
        return $this -> message.$name;
    }
}

// Create an instance of the user_message class
$mymessage = new Introduction();

// Call the introduction method of the $mymessage object and output the result
echo $mymessage -> introduce('Scott')."\n";


// Q3
class Factorial{

    protected $_n;

    public function __construct($n)
    {
        // check if the parameter $n is not an integer
        if(!is_int($n)){
            throw new InvalidArgumentException('Not a number or missing argument');
        }

        // Assign the value of $n to the protected property $_n
        $this -> _n = $n;
    }

    // Define a method named result to calculate the factorial of the number 
    public function result()
    {
        // Initialize the factorial variable to 1
        $factorial = 1;
        // Iterate from 1 to the value of $_n
        for ($i = 1; $i <= $this-> _n; $i++) {
            // Multiply the factorial by the current value of $i
            $factorial *= $i;
        
        }

        // Return the calculated factorial
        return $factorial;
    }    
}

// Create an instance of the factorial_of_a_number class with the argument 5
$newfactorial = new Factorial(5);

// Call the result method of the $newfactorial object and output the result
echo $newfactorial -> result() . "\n";

// Q4
class Sort{

    protected $_asort;
    public function __construct(array $asort)
    {
        $this -> _asort = $asort;
    }

    // Define a method named alhsort to sort the array in ascending order
    public function alhsort(){
        $sorted = $this -> _asort;
        // Sort the copied array in ascending order
        sort($sorted);
        // Return the sorted array
        return $sorted;
    }

}

$newSort = new Sort(array(11, 2, 4, 0 , -9));

print_r($newSort -> alhsort()). "\n";


?>
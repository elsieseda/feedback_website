<?php
echo 'hello', 123;
print_r([1, 2, 3]);
var_dump(true);

define ('HOST', 'localhost');
define('DB_NAME', 'elsie');
echo HOST;

$person = [
    'first_name'=> 'al',
    'last_name' => 'ei',
    'email'=>'ejjs'
];
echo $person['first_name'];

$posts = ['friends'];
if (!empty ($posts)){
    echo $posts[0];
}else{
    echo 'no posts';
}

/* $firstperson = !empty ($posts) ? $posts[0] : 'no posts';
echo $firstperson; */

$firstperson = $posts[0] ?? null;
echo $firstperson;

$color = 'red';

switch($color){
    case 'red':
        echo "your fave color is red";
        break;
    case 'blue':
        echo 'your fave color is blue';
        break;
    default:
    echo 'your fave color is white';
}

/* For loop
for(initialize, condition, increment){
    code to be executed
}
*/

for ($x = 0; $x <=10; $x++) {
    echo $x;

}

$x = 1;
while ($x <= 15) {
    echo $x . "is less";
    $x++;
}


/* Foreach loop
foreach ($array as $value){
    code to be executed
}
*/

$posts = ['pst1', 'pst2', 'pst3'];
foreach ($posts as $post){
    echo $post;
} 

$posts = ['pst1', 'pst2', 'pst3'];
foreach ($posts as $index => $post){
   
    echo $index + 1 . '-' . $post;
}

/*
$person = [
    'first_name'=> 'al',
    'last_name' => 'ei',
    'email'=>'ejjs'
];
*/

foreach ($person as $key => $value){
    echo "$key $value";
}

function registerUser($email){
    echo "$email registered";

}

registerUser('email');

function sum($a, $b){
    return $a + $b;
}

$number = sum(3,4);

echo $number;

$subtract = fn($a, $b) => $a - $b; 
/* $subtract = function($a, $b){
    return $a-$b;
}*/

echo $subtract(5,1);


// arrays
$fruits = ['apple', 'orrange', 'blues'];

echo count($fruits); //count

var_dump(in_array('apple', $fruits)); // search item in array

//add to array
$fruits[]= 'grape';
array_push($fruits, 'blueberry'); //add below
array_unshift($fruits, 'mango');

// remove from array
array_pop($fruits); //end
array_shift($fruits); //begin
// unset($fruits[2]); remove a particular item

//split into chunks
$chunked = array_chunk($fruits, 3);
print_r($chunked);


print_r($fruits);

$arr1 =[1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2); //merge
$arr4 = [...$arr1, ...$arr2];

print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b); // a is keys and b values
print_r($c);

$keys =array_keys($c);  // show values of keys
print_r($keys);

$flipped = array_flip($c); // flips keys and values
print_r($flipped);

var_dump($_SERVER); //Server info

?>


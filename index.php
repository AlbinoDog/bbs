<?php

$number = rand();
if ($number % 2 == 0){
    echo $number."は偶数です"."<br/>";
}else {
    echo $number."は奇数です"."<br/>";
}

$fruits = array ('apple','orange','lemmon');
echo $fruits[0]."<br>";

$users[] = 'sugiyama'."<br>";
$users[] = 'chefan'."<br>";
echo $users[1];

$userdata = array(
    'name' => 'sugiyama',
    'age' => '29',
    'gender' => 'male',
    'job' => 'engineer',
);

echo $userdata['age'];
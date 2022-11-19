<?php

$data = [
    'name'=>'fumi',
    'class'=>'ss1',
    'age'=>67,
    'gender'=>'female'
];
// echo json_encode($data);
// // multi
// echo '<br>';
// $ap = [
//     [
//         'name'=>'fumi',
//         'class'=>'ss1',
//         'age'=>67,
//         'gender'=>'female'
//     ],
//     [
//         'name'=>'ade',
//         'class'=>'ss1',
//         'age'=>67,
//         'gender'=>'female'
//     ],

//     [
//         'name'=>'pelumi',
//         'class'=>'ss1',
//         'age'=>67,
//         'gender'=>'female'
//     ]
// ];

// echo json_encode($ap);


$values = ['green', 'yellow', 'blue', 'pink'];

sort($values);
print_r($values);
123;

$i = 1;
while($i <= 6){
    $i++;
    echo "The number is " . $i . "<br>";
}

$i = 1;
do{
    $i++;
    echo "The number is " . $i . "<br>";
}
while($i <= 6);

for($i=1; $i<=6; $i++){
    echo "The number is " . $i . "<br>";
}

foreach($data as $key => $value){
    echo $key . " => " . $value . "<br>";
}


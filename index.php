<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Hello world" . "<br>";

    $greetingMessage = "Hi there" . "<br>";
    echo $greetingMessage;
    //constant
    define("SITE_URL", "https://tutorialrepublic.com/");

    echo 'Thank You for visiting -' . SITE_URL . "<br>";

    echo "<h1>This is a simple heading </h1>";
    echo "<h1 style='color:red; font-family:cursive;font-style:oblique; '>This is a heading with style </h1>";

    $number = 1234;
    var_dump($number);
    echo "<br> <br>";

    $float = 12.3;
    var_dump($float);
    echo "<br><br>";

    $string = 'hello it\'s a string';
    var_dump($string);
    echo "<br> <br>";

    $boolean = true;
    var_dump($boolean);
    echo "<br><br>";

    $food = ["rice", "bread", "butter"];
    var_dump($food[0]);
    echo "<br> <br>";

    $a = NULL;
    var_dump($a);
    echo "<br> <br>";

    $my_str = 'Welcome to tutorial republic';

    echo strlen($my_str);
    echo "<br> <br>";

    $my_str = "The quick brown fox jumps over the lazy dog";

    echo  str_word_count($my_str);
    echo "<br> <br>";

    $my_str = "If the facts do not fit the theory, change the facts. facts!";
    echo str_replace("facts", "truth", $my_str, $count);
    echo "It was used $count times";

    $my_str = "You can do anything, but not everything";

    echo strrev($my_str);

    echo "<br><br>";
    $x = 20;
    $x += 30;
    echo $x;
    echo "<br><br>";

    $x = 70;
    $x -= 30;
    echo $x;
    echo "<br><br>";

    $x = 50;
    $x  *= 2;
    echo $x;
    echo "<br><br>";

    $x = 100;
    $x /= 10;
    echo $x;
    echo "<br><br>";

    $y = 10;
    $y %= 3;

    echo $y;

    $mark =  50;

    if ($mark < 39) {
        echo "<br>";
        echo 'F';
    } elseif ($mark >= 40 && $mark < 54) {
        echo 'E';
    } elseif ($mark >= 55 && $mark < 65) {
        echo 'D';
    } elseif ($mark >= 66 && $mark  < 75) {
        echo 'B';
    } elseif ($mark >= 76  && $mark < 100) {
        echo 'A';
    }

    switch (true) {
        case $mark < 39:
            echo 'F';
            break;
        case $mark >= 40 && $mark < 55:
            echo 'E';
            break;
        case $mark >= 55 && $mark < 65:
            echo 'D';
            break;
        case $mark >= 66 && $mark < 75:
            echo 'B';
            break;
        case $mark >= 76 && $mark < 100:
            echo 'A';

        default:
            echo 'invalid';
    }

    echo "<br><br><br>";



    // while loop
    $x = 1;

    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<br><br>";


    // do while loop
    $x = 6;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    echo "<br><br>";



    //for loop
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    };
    echo "<br><br>";




    //for each
    $colors = array("red", "blue", "yellow", "black");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
    echo "<br><br>";


    //for each
    $foods = array("rice", "beans", "bread", "butter");

    foreach ($foods as $food) {
        echo "$food <br>";
    }

    echo "<br><br>";
    $name = array("kim", "kylie", "zendaya", "bella");

    $fav = 0;
    while ($fav < count($name)) {
        echo "I love  " . $name[$fav] . "<br>";
        $fav++;
    }

    echo "<br><br>";

    $car = array("camry", "lexus", "jeep", "lambo");
    $ca = 0;
    do {
        echo "i like  " . $car[$ca] . "<br>";
        $ca++;
    } while ($ca < count($car));

    echo "<br><br>";


    //for loop
    $carr = array("camry", "lexus", "jeep", "lambo");
    $x = 0;
    for ($x = 0; $x <= count($carr); $x++) {
        echo $carr[$x];
        echo "<br><br>";
    }

    echo '<br><br>';

    $info = [
        'name' => 'precious',
        'age' =>  18,
        'gender' => 'female',
        'occupation' => 'nurse'

    ];
    echo json_encode($info);

    //multi
    echo "<br>";

    $data = [
        [
            'name' => 'zainab',
            'age' =>  18,
            'gender' => 'female',
            'occupation' => 'doctor'

        ],
        [
            'name' => 'favor',
            'age' =>  18,
            'gender' => 'female',
            'occupation' => 'teacher'

        ],
        [
            'name' => 'maryam',
            'age' =>  18,
            'gender' => 'female',
            'occupation' => 'banker'

        ]
    ];

    echo json_encode($data[0]);
    echo "<br>";

    $colors = ['red', 'orange', 'purple', 'peach'];

    sort($colors);
    print_r($colors);
    123;

    $i = 1;
    while ($i <= 6) {
        $i++;
        echo "The number is " . $i . "<br>";
    }

    $i = 1;
    do {
        $i++;
        echo "The number is " . $i . "<br>";
    } while ($i <= 6);

    for ($i = 1; $i <= 6; $i++) {
        echo "The number is " . $i . "<br>";
    }




















    ?>



</body>

</html>
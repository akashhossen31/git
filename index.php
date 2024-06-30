<?php
// for ($i = 0; $i < 10; $i++) {
//     echo $i . "\n";
// }


// $amount = 600;
// if ($amount === '600') {
//     echo 'coffe';
// } else if ($amount === '900') {
//     echo 'coffe with book';
// } else {
//     echo 'no offer';
// }


// for ($i = 0; $i <= 10; $i++) {
//     if ($i % 2 == 0) {
//         echo $i . ' ';
//     }
// }


// $start_year = 1971;
// $current_year = 2024;
// for ($i = $start_year; $i <= $current_year; $i++) {
//     if ($i % 4 !== 0) {
//         echo $i . ' ';
//     }
// }

$names = [
    'akash', 'shagor', 'kobir',
    [21, 22, 23]
];
// print_r($names);

// echo $names[2];
// print_r($names);

// echo $names[3][2] . ' ' . $names[2];


$names = [
    'shagor' => 21,
    'kobir' => 22,
    'akash' => 23,
    ['mohammadpur', 'duail', 'pukhoria']
];
// print_r($students);
// print_r($names);
// echo $names[0][1];

$name = 'hello world';
// echo strlen($name);

$names = ['akash', 'shagor', 'kobir'];
// $name_length = count($names);
// echo count($names);
// print_r($names);
for ($i = 0; $i < count($names); $i++) {
    // echo $names[$i] . ' ';
}


$names = ['akash', 'shagor', 'kobir'];
foreach ($names as $name) {
    echo $name . ' ';
}

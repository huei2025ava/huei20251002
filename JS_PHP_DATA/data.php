<?php

$Fake_data = [
    [
       'id' => 1,
       'name' => 'amy',
       'tel' => '0911'
    ],
    [
       'id' => 2,
       'name' => 'bob',
       'tel'  => '0922'
    ],
    [
       'id' => 3,
       'name' => 'john',
       'tel'  => '0933'
    ],
    [
       'id' => 4,
       'name' => 'mary',
       'tel'  => '0944'
    ],
    [
       'id' => 5,
       'name' => 'leo',
       'tel'  => '0955'
    ],
];
// echo '<pre>';
// print_r($Fake_data);
// echo '</pre>';

echo json_encode($Fake_data);
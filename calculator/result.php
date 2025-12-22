<?php 
// 1. 寫dd函式
function dd($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

// 2.做假資料
// $data = [
//     'num1' => 200,
//     'num2' => 80,
//     'opt' => '-',
// ];
// dd($data);

$input = $_GET;

$data = [
    'num1' => $input['num1'] ?? 0,
    'num2' => $input['num2'] ?? 0,
    'opt' => $input['opt'] ?? '+',
    'color' => $input['color'] ?? 'red',
];

// 3.switch
$num1 = $data['num1'];
$num2 = $data['num2'];
$opt = $data['opt'];

$color = $data['color'];

// dd($input);

$clacResult = 0;
$textResult = '';

switch ($opt) {
    case '+':
        $clacResult = $num1 + $num2;
        $textResult = "$num1 + $num2 = $clacResult";
        break;
    case '-':
        $clacResult = $num1 - $num2;
        $textResult = "$num1 - $num2 = $clacResult";
        break;
    case '*':
        $clacResult = $num1 * $num2;
        $textResult = "$num1 * $num2 = $clacResult";
        break;
    case '/':
        $clacResult = $num1 / $num2;
        $textResult = "$num1 / $num2 = $clacResult";
        break;
    
    default:
        break;
}

// switch ($color) {
//     case 'red':
//         // $color = 'bg-lightcoral';
//         break;
//     case 'yellow':
//         $color = 'bg-lightyellow';
//         break;
//     case 'blue':
//         $color = 'bg-lightblue';
//         break;  
//     default:
//         break;
// }

$data['calcResult'] = $clacResult;
$data['textResult'] = $textResult;

// echo $clacResult;
// echo '<br>';
// echo $textResult;

echo json_encode($data);
?>
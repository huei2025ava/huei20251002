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

];

// 3.switch
$num1 = $data['num1'];
$num2 = $data['num2'];
$opt = $data['opt'];

$color = $input['color'] ?? 'red';

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

$bgColor = '';

switch ($color) {
    case 'red':
        $bgColor = 'bg-red';
        break;
    case 'yellow':
        $bgColor = 'bg-yellow';
        break;
    case 'blue':
        $bgColor = 'bg-blue';
        break;  
    default:
        break;
}

$data['calcResult'] = $clacResult;
$data['textResult'] = $textResult;
$data['bgColor'] = $bgColor;

// echo $clacResult;
// echo '<br>';
// echo $textResult;

echo json_encode($data);
?>
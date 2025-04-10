<?php

$currentMonth = date('M');


//Before
switch ($currentMonth) {
    case 'Apr':
        $monthStatus = 'Correct month';
        break;
    case 'May':
        $monthStatus = 'Incorrect month';
        break;
    case 'Jun':
        $monthStatus = 'Incorrect month';
        break;
    default:
        $monthStatus = 'Month not specified in this check';
}

//After
$monthStatus = match ($currentMonth) {
    'Apr' => 'Correct month',
    'May', 'Jun' => 'Incorrect month',
    default => 'Month not specified in this check',
};

echo $monthStatus;
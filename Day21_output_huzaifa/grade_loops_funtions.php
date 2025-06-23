<?php
// -----------------------------
// 1. Grade Checker Using if-else
// -----------------------------
echo "=== Grade Checker using if-else ===\n";

$marks_if = 88;
echo "Marks: $marks_if\n";

if ($marks_if >= 90 && $marks_if <= 100) {
    echo "Grade: A\n";
} elseif ($marks_if >= 80 && $marks_if < 90) {
    echo "Grade: B\n";
} elseif ($marks_if >= 70 && $marks_if < 80) {
    echo "Grade: C\n";
} else {
    echo "Grade: Fail\n";
}

echo "\n";

// -----------------------------
// 2. Grade Checker Using switch
// -----------------------------
echo "=== Grade Checker using switch ===\n";

$marks_switch = 72;
echo "Marks: $marks_switch\n";

switch (true) {
    case ($marks_switch >= 90 && $marks_switch <= 100):
        $grade = "A";
        break;
    case ($marks_switch >= 80 && $marks_switch < 90):
        $grade = "B";
        break;
    case ($marks_switch >= 70 && $marks_switch < 80):
        $grade = "C";
        break;
    default:
        $grade = "Fail";
}
echo "Grade: $grade\n";

echo "\n";

// -----------------------------
// 3. For Loop (1 to 10)
// -----------------------------
echo "=== For Loop (1 to 10) ===\n";

for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}

echo "\n\n";

// -----------------------------
// 4. While Loop (Even numbers 1 to 20)
// -----------------------------
echo "=== While Loop (Even numbers 1 to 20) ===\n";

$num = 2;
while ($num <= 20) {
    echo "$num ";
    $num += 2;
}

echo "\n\n";

// -----------------------------
// 5. Function to Calculate Square
// -----------------------------
echo "=== Function to Calculate Square ===\n";

function square($number) {
    return $number * $number;
}

$val1 = 5;
$val2 = 9;

echo "Square of $val1 is: " . square($val1) . "\n";
echo "Square of $val2 is: " . square($val2) . "\n";
?>


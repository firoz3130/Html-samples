<?php
function printMatrix($a)
{
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a[$i]); $j++) {
            printf("%d   ", $a[$i][$j]);
        }
        echo "<br>";
    }
}

function transpose($a)
{
    $r = count($a);
    $c = count($a[0]);
    for ($i = 0; $i < $c; $i++) {
        for ($j = 0; $j < $r; $j++) {
            printf("%d   ", $a[$j][$i]);
        }
        echo "<br>";
    }
}

function addition($a, $b)
{
    $r1 = count($a);
    $c1 = count($a[0]);
    $r2 = count($b);
    $c2 = count($b[0]);
    $d = array();
    if ($r1 == $r2 && $c1 == $c2) {
        for ($i = 0; $i < $r1; $i++) {
            for ($j = 0; $j < $c1; $j++) {
                $d[$i][$j] = $a[$i][$j] + $b[$i][$j];
            }
            echo "<br>";
        }
        printMatrix($d);
    } else {
        echo "Addition not possible";
    }
}

function multiplication($a, $b)
{
    $r1 = count($a);
    $c1 = count($a[0]);
    $r2 = count($b);
    $c2 = count($b[0]);
    $d = array();
    if ($c1 == $r2) {
        for ($i = 0; $i < $r1; $i++) {
            for ($j = 0; $j < $c2; $j++) {
                $d[$i][$j] = 0;
                for ($k = 0; $k < $c1; $k++) {
                    $d[$i][$j] += $a[$i][$k] * $b[$k][$j];
                }
            }
        }
        printMatrix($d);
    } else {
        echo "Multiplication not possible";
    }
}
$a = array();
echo "Enter the number of rows for Matrix A: ";
$rowsA = trim(fgets(STDIN));
echo "Enter the number of columns for Matrix A: ";
$colsA = trim(fgets(STDIN));
echo "Enter the elements for Matrix A:\n";
for ($i = 0; $i < $rowsA; $i++) {
    $a[$i] = array();
    for ($j = 0; $j < $colsA; $j++) {
        echo "Enter element at position ($i, $j): ";
        $a[$i][$j] = intval(trim(fgets(STDIN)));
    }
}
$b = array();
echo "Enter the number of rows for Matrix B: ";
$rowsB = trim(fgets(STDIN));
echo "Enter the number of columns for Matrix B: ";
$colsB = trim(fgets(STDIN));
echo "Enter the elements for Matrix B:\n";
for ($i = 0; $i < $rowsB; $i++) {
    $b[$i] = array();
    for ($j = 0; $j < $colsB; $j++) {
        echo "Enter element at position ($i, $j): ";
        $b[$i][$j] = intval(trim(fgets(STDIN)));
    }
}

echo "Matrix A is <br>";
printMatrix($a);
echo "Matrix B is <br>";
printMatrix($b);
echo "Transpose of A is <br>";
transpose($a);
echo "Transpose of B is <br>";
transpose($b);
echo "Addition of A and B is <br>";
addition($a, $b);
echo "Multiplication of A and B is <br>";
multiplication($a, $b);
?>

<html>
<head>
<style>
  table, td, th {
   border: 1px solid black;
   width: 35%;
   text-align: center;
   background-color: lightgray;
  }
  table { margin: auto; }
  input,p { text-align:right; }
</style>
</head>

<body>
<form method="post" action="">
  <table>
    <caption><h2>Matrix Operations</h2></caption>
    <tr>
      <td>Enter Matrix A:</td>
      <td>
        <input type="text" name="a1" placeholder="Enter value" />
        <input type="text" name="a2" placeholder="Enter value" />
        <input type="text" name="a3" placeholder="Enter value" />
        <br>
        <input type="text" name="a4" placeholder="Enter value" />
        <input type="text" name="a5" placeholder="Enter value" />
        <input type="text" name="a6" placeholder="Enter value" />
        <br>
        <input type="text" name="a7" placeholder="Enter value" />
        <input type="text" name="a8" placeholder="Enter value" />
        <input type="text" name="a9" placeholder="Enter value" />
      </td>
    </tr>
    <tr>
      <td>Enter Matrix B:</td>
      <td>
        <input type="text" name="b1" placeholder="Enter value" />
        <input type="text" name="b2" placeholder="Enter value" />
        <br>
        <input type="text" name="b3" placeholder="Enter value" />
        <input type="text" name="b4" placeholder="Enter value" />
        <br>
        <input type="text" name="b5" placeholder="Enter value" />
        <input type="text" name="b6" placeholder="Enter value" />
      </td>
    </tr>
    <tr>
      <td colspan="2"><button type="submit" name="submit" value="calculate">Calculate</button></td>
    </tr>
  </table>
</form>

<?php
function printMatrix($a)
{
    for($i=0;$i<count($a);$i++)
    {
        for($j=0;$j<count($a[$i]);$j++)
        {
            printf("%d   ",$a[$i][$j]);
        }
        echo "<br>";
    }
}

function transpose($a)
{
    $r=count($a);
    $c=count($a[0]);
    for($i=0;$i<$c;$i++)
    {
        for($j=0;$j<$r;$j++)
        {
            printf("%d   ",$a[$j][$i]);
        }
        echo "<br>";
    }
}

function addition($a,$b)
{
    $r1=count($a);
    $c1=count($a[0]);
    $r2=count($b);
    $c2=count($b[0]);
    $d=array();
    if($r1==$r2 && $c1==$c2)
    {
        for($i=0;$i<$r1;$i++)
        {
            for($j=0;$j<$c1;$j++)
            {
                $d[$i][$j]=$a[$i][$j]+$b[$i][$j];
            }
        }
        echo "<br>Result of Addition:<br>";
        printMatrix($d);
    }
    else
    {
        echo "<br>Addition not possible";
    }
}

function multiplication($a,$b)
{
    $r1=count($a);
    $c1=count($a[0]);
    $r2=count($b);
    $c2=count($b[0]);
    $d=array();
    if($c1==$r2)
    {
        for($i=0;$i<$r1;$i++)
        {
            for($j=0;$j<$c2;$j++)
            {
                $d[$i][$j]=0;
                for($k=0;$k<$c1;$k++)
                {
                    $d[$i][$j]+=$a[$i][$k]*$b[$k][$j];
                }
            }
        }
        echo "<br>Result of Multiplication:<br>";
        printMatrix($d);
    }
    else
    {
        echo "<br>Multiplication not possible";
    }
}

if(isset($_POST['submit']))
{
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];
    $a5 = $_POST['a5'];
    $a6 = $_POST['a6'];
    $a7 = $_POST['a7'];
    $a8 = $_POST['a8'];
    $a9 = $_POST['a9'];

    $b1 = $_POST['b1'];
    $b2 = $_POST['b2'];
    $b3 = $_POST['b3'];
    $b4 = $_POST['b4'];
    $b5 = $_POST['b5'];
    $b6 = $_POST['b6'];

    $matrixA = array(array($a1, $a2, $a3), array($a4, $a5, $a6), array($a7, $a8, $a9));
    $matrixB = array(array($b1, $b2), array($b3, $b4), array($b5, $b6));

    echo "<br>Matrix A:<br>";
    printMatrix($matrixA);

    echo "<br>Matrix B:<br>";
    printMatrix($matrixB);

    echo "<br>Transpose of A:<br>";
    transpose($matrixA);

    echo "<br>Transpose of B:<br>";
    transpose($matrixB);

    echo "<br>Addition of A and B:<br>";
    addition($matrixA, $matrixB);

    echo "<br>Multiplication of A and B:<br>";
    multiplication($matrixA, $matrixB);
}
?>
</body>
</html>

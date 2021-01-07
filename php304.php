<?php
    //The PHP Comparison Operator
    echo "The PHP Comparison Operator<hr />";
    $x = 100; //Integer
    $y = "100"; //String

    var_dump($x == $y); //return true because values sre echo
    echo "<hr />";
?>

<?php
    echo "The PHP Comparison Operator<hr />";
    $a = 100;
    $b = "100";
    var_dump($a === $b);
    echo "<hr />";
?>

<?php
    echo "The PHP Comparison Operator<hr />";
    $x = 5;
    $y = 10;
    echo($x <=> $y);
    echo "<hr />";
?>

<?php
    echo "The PHP Comparison Operator<hr />";
    $x = 10;
    $y = 10;
    echo($x <=> $y);
    echo "<hr />";
?>

<?php
    echo "The PHP Comparison Operator<hr />";
    $x = 15;
    $y = 10;
    echo($x <=> $y);
    echo "<hr />";
?>
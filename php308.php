<?php
    // The Array operators
    echo"The Array operators<hr />";
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "c" => "yellow");
    print_r($x + $y); //union of $x and $y
    echo"<br />";

    var_dump($x == $y); //false(0,null), Equality of $x and $y
    echo"<hr />";

    var_dump($x != $y); //true(1), Inequality  of $x and $y
    echo"<hr />";
    
    var_dump($x === $y); //false(0) Identity of $x and $y
    echo"<hr />";

?>
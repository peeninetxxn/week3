<?php
    //2.PHP Integer
    $x = 200;
    //3.PHP float
    $y = -200;
    var_dump($x);
    var_dump($y);
    echo "<hr />";
?>

<?php
    //4.PHP Boolean;
    $a = true;
    $b = false;
    var_dump($a);
    var_dump($b);
    echo "<hr />";
?>

<?php
    //5.PHP Array
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    echo "<hr />";
?>

<?php
    //6.PHP Object : Stores data
    class Auto{
        function Car(){
            $this->model = "BMW";
        }
    }

    //create an object
    $herble = new Auto();

    //Show object properties
    echo $herble->model;
    echo "<hr />";
?>
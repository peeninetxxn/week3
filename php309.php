<?php
    // The increment/decrement operators
    //: call name is Ternary
    echo"The logical operators<hr />";
    //if  empty($user) = true, set $status = "anonymous"
    $status =(empty($user)) ? "anonymous" : "logged in"; //anonymous
    echo"<br />";

    $user = "James";
    //if  empty($user) = false, set $status
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo"<br />";
?>
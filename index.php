<?php
    //include config file & Bootstrap
    require ('Config.php');
    require ('Classes/Bootstrap.php');

//$_GET will take the values out of the query string. (http://www.x.com/forum/sh...d.php?p=499470) so you can have links like that,
// or you can have method="get" on your forms. so for the example, your variable would be $_GET['p'].
//$_POST will require method="post" on your forms and passes values "invisibly".


    $Bootstrap = new Bootstrap($_GET); // _GET is An associative array of variables passed to the current script via the URL parameters.

    echo "Hello Wrold".'<br>';

    $Controller = $Bootstrap->CreateController();



?>
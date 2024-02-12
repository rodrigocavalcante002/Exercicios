<?php 
    echo basename(__FILE__) . "<br>";
    echo basename(__FILE__, "php") . "<br>";

    echo dirname(__FILE__, 1). "<br>";
    echo dirname(__FILE__, 2). "<br>"; 
    echo dirname(__FILE__, 3). "<br>"; 
    
    echo realpath(__FILE__);
    echo "<pre>";
    print_r(pathinfo(__FILE__));
    echo "</pre> <br>";

    echo pathinfo(__FILE__)["extension"]. "<br>";
    echo pathinfo(__FILE__)["basename"]. "<br>";
    echo pathinfo(__FILE__)["filename"]. "<br>";
    echo pathinfo(__FILE__)["dirname"]. "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    print_r(pathinfo(__FILE__, PATHINFO_EXTENSION));
    echo "<br>";
    print_r(pathinfo(__FILE__, PATHINFO_BASENAME));
    echo "<br>";
    print_r (pathinfo(__FILE__, PATHINFO_FILENAME));
    echo "<br>";
    print_r(pathinfo(__FILE__, PATHINFO_DIRNAME));
    ?>
<?php

# This function is dumping data on our website on main.localhost
function dump($data) {
    echo '<div 
    style="
        display: inline-block;
        padding: 0 10px;
        bordr: 1px solid gray;
        background: lightgray;

    ">
    <pre>';

    print_r($data);

    echo '</pre>
    </div>
    </br>'
    ;

}

dump('========================== dump ====================================');
<?php 

function logiranje($varijabla){
    if(gettype($varijabla)!=='array'){

    echo gettype($varijabla);
    }
    echo '<pre>';
    print_r($varijabla);
    echo '</pre>';
    }
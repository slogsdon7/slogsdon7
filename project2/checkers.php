<?php
const UNOCCUPIED = 0;
const P1 = 1;
const P2 = 2;




function tile($piece){
    $html = "<div>". ($piece ?? '') . "</div>";
    return $html;
}
 function piece($type){
     switch($type){
         case 0: return NULL;
         case 1: return "<div class=\"piece black\"></div>";
         case 2: return "<div class=\"piece red\"></div>";
     }
    
 }

$board = [
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1],
    [0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0],
    [2,0,2,0,2,0,2,0],
    [0,2,0,2,0,2,0,2],
    [2,0,2,0,2,0,2,0],
];

    
foreach ($board as $row_num => $row) {
    foreach($row as $col_num => $type){
        echo tile(piece($type));
    }
}


?>

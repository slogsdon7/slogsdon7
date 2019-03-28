<?php



function handle_get(){
    if(filter_has_var(INPUT_GET, "row") && filter_has_var(INPUT_GET, "col")){
        get_moves($_GET['row'], $_GET['col']);
    }
}


function get_moves($row, $col){
    
}

function tile($piece){
    $html = "<div>\n\t\t". ($piece ?? '') . "</div>\n";
    return $html;
}
 function piece($type, $row, $col){
     switch($type){
         case 0: return NULL;
         case 1: $class = "black"; 
         break;
         case 2: $class = "red"; 
     }
     $html = "<div class=\"piece $class\">" . ("<a href=\"?row=$row&col=$col\"></a>") . "</div>";
     return $html;
    
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


function generate_board($board){
$html =  '<div id="board">'; 
foreach ($board as $row_num => $row) {
    foreach($row as $col_num => $type){
        $html .= tile(piece($type,$row_num,$col_num));
    }
}
$html .= '</div>';
return $html;
}
$board_html = generate_board($board);

$page = <<<PAGE
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkers</title>
    <link rel="stylesheet" href="styles.css" type="text/css"/>
</head>
<body>
$board_html
</body>
</html>
PAGE;

echo $page;
?>

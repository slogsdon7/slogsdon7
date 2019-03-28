<?php
$styles = array();


if (isset($_POST['isBold'])) $styles[] = 'b';
if (isset($_POST['isItalic'])) $styles[] = 'i';
if (isset($_POST['isUnderline'])) $styles[] = 'u';
switch($_POST['font']){
    case "timesnew": $styles[] = 'timesnew';
    break;
    case "arial": $styles[] = 'arial';
    break;
    case "georgia": $styles[] = 'georgia';
    break;
    case "courier": $styles[] = 'courier';
}
$class_string="";
foreach($styles as $class_name){
    $class_string.="$class_name ";
}
$userhtml = htmlspecialchars($_POST['usertext']); 

$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css"/>
    <style>
        p{
            font-size: {$_POST['fontSize']}px;
        }
    </style>
</head>
<body>
<p class="$class_string">$userhtml</p>
    

</body>
</html>
HTML;
echo $html;


?>
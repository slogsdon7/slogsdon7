<?php
$hours_to_show = 12;
$dt = date_create_immutable("now", timezone_open("America/New_York"));
$personList = ["Ed", "Edd", "Eddy"];
$interval = new DateInterval('PT1H');
$temp_dt = $dt;
$rows = "";
$person_cell='<td class="person"></td>';
function get_hour_string($ts)
{
    return $ts->format('g:00 A');
}

foreach (range(0, $hours_to_show) as $h) {
    $cells = str_repeat($person_cell, 3);
    $hour = get_hour_string(
                date_add(
                    date_create(date_format($dt, DATE_ATOM)), 
                    date_interval_create_from_date_string("$h hours")
                        )
                    );
    ($h%2 == 0)? $class = "even": $class = "odd";    
    $rows = $rows . "<tr class=\"$class\"><td class=\"time\">$hour</td>$cells </tr>\n";
}

$table = <<<TABLE
<div class="container">
<table id="event_table">
<caption>{$dt->format('F jS, Y g:i A')}</caption>
    <thead>
      <tr>
            <th>Time</th>
            <th>$personList[0]</th>
            <th>$personList[1]</th>
            <th>$personList[2]</th>
        </tr>

    </thead>
<tbody>
    $rows
    </tbody>
</table>
</div>
TABLE;

$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
<title>Calendar</title>    
<link rel="stylesheet" href="calendar.css" type="text/css"/>
</head>
<body>
    
$table

</body>
</html>
HTML;
 
echo $html;
?>
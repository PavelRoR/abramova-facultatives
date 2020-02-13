<?php
$date = strtotime('2020-01-22');
$now = strtotime('now');
If ($now < $date) {
    header('location: https://start.bizon365.ru/room/18087/electives');
}
else {
    header('location: https://abramova.mastervision.su/facultatives/');
}
?>
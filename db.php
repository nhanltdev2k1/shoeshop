<?php
$link = @mysqli_connect('localhost', 'root', '', 'shoeshop');

if (!$link) {
    die('Not connected: ' . mysqli_connect_error());
}

// make 'shoeshop' the current db
$db_selected = @mysqli_select_db($link, 'shoeshop');

if (!$db_selected) {
    die('Can\'t use shoeshop: ' . mysqli_error($link));
}

@mysqli_query($link, 'SET NAMES "UTF8"');

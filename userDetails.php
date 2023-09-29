<?php

require_once "ClassAutoLoad.php";

$OBJ_Layout->header();

$query = "select * from users";
$result = $conn->select($query);
$count = $conn->count_results($query);

$OBJ_Content->user_table($result, $count);
$OBJ_Layout->footer();
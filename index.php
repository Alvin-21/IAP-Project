<?php

require_once "ClassAutoLoad.php";

$OBJ_Layout->header();
$OBJ_Forms->user_details();
$OBJ_Layout->footer();

$OBJ_Process->add_user_data($conn);
<?php

function ClassAutoLoad($ClassName){
    $directories = array("forms", "layouts", "processes", "includes");
    foreach($directories AS $dir){
        $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $ClassName . ".php";
        if(is_readable($FileName)){
            require $FileName;
        }
    }
}
spl_autoload_register('ClassAutoLoad', true, true);

$conn = New dbConnection("PDO","localhost","iap_project","root","","3306");

$OBJ_Layout = NEW layouts();
$OBJ_Forms = NEW forms();
$OBJ_Process = NEW process();
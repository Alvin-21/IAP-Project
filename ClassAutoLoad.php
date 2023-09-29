<?php

function ClassAutoLoad($ClassName){
    $directories = array("forms", "layouts");
    foreach($directories AS $dir){
        $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $ClassName . ".php";
        if(is_readable($FileName)){
            require $FileName;
        }
    }
}
spl_autoload_register('ClassAutoLoad', true, true);

$OBJ_Layout = NEW layouts();
$OBJ_Forms = NEW forms();
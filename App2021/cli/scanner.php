<?php
//scanner function 
function input($msg=''){
    if($msg==''){
        exit('message is required');//echo and exit
    }
    echo $msg;
    $input=fgets(STDIN,1024);

    return trim($input);
}
echo input();
?>
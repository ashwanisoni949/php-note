<?php
//wap in php to check a array is homogenous or hetronenous
//wap in php to show argv is always homogenous
print_r($argv);
function is_homo($array=[])
{
    $key_type=gettype($array[0]);
    //echo $key_type;
    for($i=0;$i<count($array);$i++)
    {
        echo gettype($array[$i]);
        echo PHP_EOL;
        if($key_type===gettype($array[$i]))
        {
            
        }
        else 
        {
            return false;
          // return hetrogenous;
        }
    }
    return true;
    //return homogenous;
}
var_dump(is_homo($argv));
var_dump(is_homo([10,20,40,50,30]));
var_dump(is_homo([10,30,20,50,'ashwnai verma',"javahindi"]));
var_dump(is_homo(['ashwnai','sheph','radha','katreena']));
?>
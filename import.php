<?php

try{
    $fp=fopen('C://xampp//htdocs//admin-proj//customers.csv','r');
    while(($data=fgetcsv($fp,1000))!=false)
    {
        foreach($data as $value)
        {
            echo $value;
        }
    }
    fclose($fp);
}
catch(Exception $e)
{
    echo $e->getMessage();
}



?>
<?php

try{
    $fp=fopen('C://xampp//htdocs//admin-proj//customers.csv','w');
    $students=[["1","David","david@gmail.com"],
    ["2","David","david@gmail.com"],
    ["3","David","david@gmail.com"],
    ["4","David","david@gmail.com"]];
    $headers=["No","Name","Email"];
    
    fputcsv($fp,$headers);
    foreach($students as $student)
    {
        fputcsv($fp,$student);
    }
    header("Content-type:application/csv");
    header("Content-Disposition:attachment;filename=export.csv");
    echo "No,Name,Email\n";
    echo "1,David,david@gmail.com\n";

    fclose($fp);
    
}
catch(Exception $e)
{
echo $e->getMessage();
}


?>
<?php
include_once 'includes/db.php';

if(Database::connect()!=null)
{
    echo "successful connection with db";
}
else
{
    echo "No connection";
}
?>
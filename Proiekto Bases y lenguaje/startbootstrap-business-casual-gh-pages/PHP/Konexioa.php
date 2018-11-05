<?php

    function ConnectDataBase()
    {
        if (!($link=mysqli_connect("localhost","root","")))
        {
            echo "There is an error connecting the DB.";
            exit();
        }
        if (!mysqli_select_db($link,"proiektua"))
        {
            echo "There is an error selecting the DB.";
            exit();
        }
        return $link;
    }
?>

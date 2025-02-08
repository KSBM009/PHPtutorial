<?php
    /* ---------- File Handling --------- */

    /* 
      File handling is the ability to read and write files on the server.
      PHP has built in functions for reading and writing files.
    */

    $file = 'extras/users.txt';

    if(file_exists($file)){
        echo readfile($file);
    } else {
        echo "File does not exist";
    }
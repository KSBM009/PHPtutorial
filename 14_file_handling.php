<?php
    /* ---------- File Handling --------- */

    /* 
      File handling is the ability to read and write files on the server.
      PHP has built in functions for reading and writing files.
    */

    $file = 'extras/users.txt';

    if(file_exists($file)){
        // echo readfile($file);
        $handle = fopen($file, 'r'); // r = read, w = write, a = append
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    } else {
        // echo "File does not exist";
        $handle = fopen($file, 'w');
        $contents = 'Kevin Stephen Biju' . PHP_EOL . 'Ryan Reji John' . PHP_EOL . 'Rijo Biju Abraham';
        fwrite($handle, $contents);
        fclose($handle);
    }

?>
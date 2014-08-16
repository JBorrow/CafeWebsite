<?php

function directorylister($dir)
{
    //find the contents
    $directorycontents = scandir($dir);

    //now we need to parse

    $realdirs = array();

    foreach ($directorycontents as $string) {
        if ($string[0] == ".") {
            continue;
        } else {
            array_push($realdirs, $string);
        }
    }

    return $realdirs;
}

function makedivs($dir)
{
    $dirs = directorylister($dir);

    foreach ($dirs as $string) {
        if (is_dir("$dir/$string")) {
            echo "<div class = \"datesinpast\">
    <a href = \"past.php?id=$dir/$string\">$string</a>
</div>";
        } elseif (file_exists("$dir/$string") ) {
            //we need to open the file and grab the title
            $handle = fopen("$dir/$string", "r");
            $read = fread($handle, 1000);
            fclose($handle);
            preg_match("'<h1>(.*?)</h1>'si", $read, $titles);
            //preg match returns an array which we must index
            $title = strip_tags($titles[0]);
            echo "<div class = \"datesinpast\">
    <a href = \"reader.php?id=$dir/$string\">$title</a>
</div>";
        }
    }

    return true;
}

function read($file)
{
    $handle = fopen($file, 'r');
    
    $read = fread($handle, 1000000);

    fclose($handle);

    $string = strip_tags($read, "<h1><h2><h3><h4><h5><h6><a><p>");
    
    return $string;
}


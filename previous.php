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
            $string = substr($string, 0, -5);
            echo "<div class = \"datesinpast\">
    <a href = \"reader?id=$dir/$string.html\">$string</a>
</div>";
        }
    }

    return true;
}

function read($file)
{
    $f = fopen($file, 'r');

    $f = fread($f);

    $f = strip_tags($f, "<h1><h2><h3><h4><h5><h6><a><p>");

    return $f;
}


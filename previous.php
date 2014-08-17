<?php

function monthsorter($array)
{
    $months = array("January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December");
    
    $sorted = array();
    
    foreach ($months as $month) {
        if (in_array($month, $array)) {
            array_push($sorted, $month);
        }
    }
    
    if (count($sorted) == 0) {
        //if you have no months - i.e. array is years etc
        return $array;
    } else {
        return $sorted;
    }
}

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

    return monthsorter($realdirs);
}

function makedivs($dir)
{
    $dirs = directorylister($dir);
    $dirs = array_reverse($dirs);
    foreach ($dirs as $string) {
        if (is_dir("$dir/$string")) {
            echo "<h2>$string</h2>";
            //now we need to do months
            $subdirs = directorylister("$dir/$string");
            foreach ($subdirs as $subdir) {
                echo "<a href = \"past.php?id=$dir/$string/$subdir\">
                <div class = \"datesinpast\">
                $subdir
                </div></a>";
            }
        } elseif (file_exists("$dir/$string") ) {
            //we need to open the file and grab the title
            $handle = fopen("$dir/$string", "r");
            $read = fread($handle, 1000);
            fclose($handle);
            preg_match("'<h1>(.*?)</h1>'si", $read, $titles);
            //preg match returns an array which we must index
            $title = strip_tags($titles[0]);
            echo "<div class = \"textinpast\">
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

    $string = strip_tags($read, "<img><h1><h2><h3><h4><h5><h6><a><p>");
    
    //remove all of tim's nasty return chars
    $string = preg_replace('/&#160;/', " ", $string); 

    return $string;
}


<?php

include_once("previous.php");

function upcomingmakedivs($dir)
{
    //whoever inherits this, I wrote it this way (importing previous) so that
    //we reduce code re-use... I know it's a little ugly.

    $dirs = directorylister($dir);
  
    foreach ($dirs as $string) {
        $handle = fopen("$dir/$string", "r");
        $read = fread($handle, 300);
        fclose($handle);
        
        //we need to put the ... inside the <p>
        if (substr($read, -5,4) == "</p>") {
            $content = substr($read, 0, strlen($read)-10)."...</p>";
        } else {
            $content = $read."...";
        }

        echo "<a href = \"reader.php?id=$dir/$string\">
    <div class = \"upcoming\">
        $content
    </div>
</a>";
    }
}

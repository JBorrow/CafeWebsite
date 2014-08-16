<?php

require_once("previous.php");

$id = $_GET['id'];

print $id;

if (strlen($id) > 1) {
    makedivs($id);
} else {
    makedivs("Previous");
}

?>

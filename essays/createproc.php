<?php
$body = $_POST["body"]; 
$file= $title.".html";
file_put_contents($file, $_POST["body"]);


?>
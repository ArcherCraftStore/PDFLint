<?php
$title = $_POST["title"];
$body = $_POST["body"];
$head = "<!DOCTYPE HTML><html><head><title>".$title."</title></head><body>";
$ext = ".html";
$name = $title;
$file = $name.$ext;
file_put_contents($file,$head.$_POST["body"]."</body></html>");


?>
<?php
require_once 'index.php';
foreach ($students as $name => $degree) {
if($degree>50){
    echo("<h3><tr><td>$name</td>=><td>$degree</td></tr></h3><br>");
}
}
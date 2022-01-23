<?php

$headers = $_SERVER;

foreach ($headers as $key => $value) {
    echo $key . ',' . $value . PHP_EOL;
}

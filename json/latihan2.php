<?php

$data = file_get_contents('coba.json');

$biodata = json_decode($data, true);

var_dump($biodata);
echo $biodata[0]["saudara"]["saudara2"];

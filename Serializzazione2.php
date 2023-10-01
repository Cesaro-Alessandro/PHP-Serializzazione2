<?php
//prendiamo directory di lavoro
$path = getcwd() . '/input.yml';
$fileYaml = fopen($path, "r");
echo fread($fileYaml, filesize($path));
$test = fread($fileYaml, filesize($path));
fclose($fileYaml);
$yest = yaml_parse_file($fileYaml);
//può prendere diversi argomenti, in questo caso va bene solo il nome file
//altrimenti 
/*
string $filename,
int|null $pos = 0,
int|null &$ndocs,
array|null $callbacks = null
*/
$json = json_encode($test);
$scrittura = fopen("risultato.json", "w");
fwrite($scrittura, $json);
fclose($scrittura);
<?php

$foo = "To be";
$bar = "or not to be";

echo $foo . " " . $bar;

$num = 2;
$foo = $num . "be";

$bar = "or not" .$num. " be";

echo $foo . " " . $bar. '\n';

echo $num * $num * $num; 

$arr = [
    "first" => "Tom",
    "second" => "Bipin",
    "best" => "DS"
];

//$arr = [1,1,1,2,2,3,4,,5,8];
//control structure-->

if(true) {
    echo "\nTRUE\n";
}

while (true) {
    //this does not do anything
    break;
}

echo"<ul>";
foreach($arr as $key=>$val) {
    echo "<li>".$key ." is ".$val."</li>";
}
echo"</ul>";

echo json_encode(
    $arr, 
    JSON_PRETTY_PRINT|JSON_THROW_ON_ERROR
);

//naming convention

//js and php: camelCase
//pascalCase, snake_Case, kebab_case
<?php

$name ='danilo';
$employed =True;
$age =21;

if ($name == 'danieldada'){
    echo "Chama ele ".PHP_EOL;
} else{
    echo "Não chama ele" .PHP_EOL;
}

if ($name == 'daniela'){
    echo "Não Chama ele ".PHP_EOL;
} elseif($name == 'danilo'){
    echo "chama ele" .PHP_EOL;
}else{
    echo "Se foda" .PHP_EOL;
}

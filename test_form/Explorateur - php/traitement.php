<?php

$path = $_GET['micka'];
if (isset($path)) {
    if(empty($path)){
        $path = "../";
    } else{
        $path = $_GET['micka'];
    }
} else {
    $path = "../";
}

foreach($files = new directoryiterator($path) as $f){
    
    if($f->isDot()){
        continue;
    }
    
    $tab[] = [
        "name" => $f->getfilename(),
        "path" => $f->getpathname(),
        "size" => $f->getsize(),
        "dir" => $f->isdir(),
        "file" => $f->isfile()
    ];
}

echo json_encode($tab);


function traitement(){
    
} 

?>
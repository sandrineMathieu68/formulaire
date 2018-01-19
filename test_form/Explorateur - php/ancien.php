<?php

$file = '';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}            

if(!empty($_POST)){
    var_dump($_POST);
}            
          
//Chemin de base de l'explorateur        
$path = "/wamp64/www/";

        
//Appel de la fonction        
affiche($path);

// Lister tout les dossiers et fichiers        
function affiche($dir){

    //Tableau contenant chaques dossiers/fichiers contenu dans $dir
    $files = scandir($dir);
    
    //retire les 2 premiers dossiers(. et ..)
    unset($files[0], $files[1]); 
    
    //Affiche les dossiers
    foreach($files as $directory){
        if(is_dir($dir.$directory)){
            echo "<li class='folder'>".$directory."</li>";
            
            //Réutilisation de la fonction pour affichers les sous dossiers(et fichiers)
            echo "<ul class='branch'>";
            affiche($dir.$directory."/");
            echo "</ul>";
        } 
    }
    //Affiche les fichiers
    foreach($files as $file){
        if(is_file($dir.$file)){
            echo "<li class='file'>".$file."</li>";
        }
    }
}         


?>
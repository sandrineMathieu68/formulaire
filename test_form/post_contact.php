<?php

var_dump($_POST); //## On verra l'ensemble des champs qui ont été postés //
die();


//### On crée une variable pour stocker toutes les variables pour éviter d'écrire $_POST['']
$message = $_POST['message'];

//################################################
//####IL FAUT RAJOUTER UNE ZONE DE CONDITIONS ####
//################################################


if (!array_key_exists('lastname', $_POST) || $_POST['lastname'] = '')//si cette clée n'éxiste pas OU si elle est vide alors dans ce cas
{
	$errors['lastname'] = 'Vous n\'avez pas renseigné votre nom';
}

if (!array_key_exists('firstname', $_POST) || $_POST['firstname'] = '')//si cette clée n'éxiste pas OU si elle est vide alors dans ce cas
{
	$errors['firstname'] = 'Vous n\'avez pas renseigné votre prénom';
}

if (!array_key_exists('cp', $_POST) || $_POST['cp'] = '')//si cette clée n'éxiste pas OU si elle est vide alors dans ce cas
{
	$errors['name'] = 'Vous n\'avez pas renseigné votre code postal';
}
if (!array_key_exists('city', $_POST) || $_POST['city'] = '')//si cette clée n'éxiste pas OU si elle est vide alors dans ce cas
{
	$errors['city'] = 'Vous n\'avez pas renseigné votre ville';
}


//###########################################################################
//### Gestion du mail => php intégre directement un  validateur d'email  ####
//### Filter_var avec une CONSTANTE au choix, qui permet de vérifier différentS formatS

if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));//n'est pas un format email
{
	$errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if (!array_key_exists('message', $_POST) || $_POST['message'] = '')//si cette clée n'éxiste pas OU si elle est vide alors dans ce cas
{
	$errors['message'] = "Vous n'avez pas renseigné votre message";
}

//####################################################################
//####################################################################


//L'idée ici est de dire que si y a des erreurs tu renvois sur la page précédente
//en gardant ce que l'utilisateur à saissi

if(!empty($errors)){
	session_start();//J'ouvre la session en premier !
	$_SESSION['errors'] = $errors;
	$_SESSION['inputs'] = $_POST;//Dans la session ont dit => TU GARDES 
	header('Location: index.php');
}else{
	//Sinon envoi le message , il n'y a pas d'erreurs
	$message = $_POST['message'];
	$headers = 'FROM : sandrine.m@online.codeur';
	mail('sandrine.m@online.codeur', 'Formulaire de contact', $message, $headers);
}


//####################################################################
//####################################################################

$errors = [''];// c'est un tableau afin de vérifié s'il y a des erreurs et s'il est vide c'est qu'il n'y a pas d'erreur

$headers = 'FROM : sandrine.m@online.codeur';

mail('sandrine.m@online.codeur', 'Formulaire de contact', $message );// 1) a qui on envoi le mail, 2) le sujet de notre mail 3) Le message 4) des headers qui permettrons d'ajouter des arguments à notre mail tel que "from" où de la personnalisation via html et css -> accepté dans html



//Pour indiquer les erreurs à l'utilisateurs, on utilise une session afin de stocker les différentes erreurs et de les lui afficher clairement(à l'utilisateur), elles seront stocker dans un tableau qui contient les erreurs




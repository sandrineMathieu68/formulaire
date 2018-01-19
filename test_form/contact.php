<?php


$errors = [];

if (!array_key_exists('lastname', $_POST) || $_POST['lastname'] == '')
{
	$errors['lastname'] = "Vous n'avez pas renseigné votre nom";
}
if (!array_key_exists('firstname', $_POST) || $_POST['firstname'] == '')
{
	$errors['firstname'] = "Vous n'avez pas renseigné votre prénom";
}
if (!array_key_exists('cp', $_POST) || $_POST['cp'] == '')
{
	$errors['cp'] = "Vous n'avez pas renseigné votre code postal";
}
if (!array_key_exists('ville', $_POST) || $_POST['ville'] == '')
{
	$errors['ville'] = "Vous n'avez pas renseigné votre ville";
}
if (!array_key_exists('email', $_POST) || $_POST['email'] == '')// rajouter ||  à  18MN vidéo graphikart
{
	$errors['email'] = "Vous n'avez pas renseigné votre email";
}
if (!array_key_exists('message', $_POST) || $_POST['message'] == '')
{
	$errors['message'] = "Vous n'avez pas renseigné votre message";
}

// les 2 fichiers ne partagent pas de variables,
//Comme il ne partage pas le même
if(!empty($errors)){
	session_start();
	$_SESSION['errors'] = $errors;
	header('Location:index1.php');
}else{
	$message = $_POST['message'];
	$headers = 'FROM : sandrine.m@online.codeur';
	mail('sandrine.m@online.codeur','Formulaire de contact', $message, $headers);
}




<?php
$errors
$message = $_POST['message'];
$headers = 'FROM: site@local.dev';
mail('sandrine.mathieu68@free.fr','Formulaire de contact',$message,$headers);

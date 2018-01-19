<?php session_start(); ?>
<!--On démarre la session afin de voir si dans la session j'ai un tableau d'erreur et qui s'appelle obligatoirement tout en haut de la page -->   
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"/>
    <style>body{padding-top: 50px;} .starter-template {padding-top: 40px;}</style>
</head>
<body>

    <!---->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Contact</a>
            </div>
        </div>
    </nav>


<!--#####################################################################################################################-->
<!--######################################  PARTIE MAIN  AVEC CONTAINER#################################################-->
<!--#####################################################################################################################-->

<main class="container">
    <div class="starter-template">

<!--On démarre la session afin de voir si dans la session j'ai un tableau d'erreur
et qui s'appelle obligatoirement tout en haut de la page et on vérifie si dans la session si y a des erreurs DONT la clef est errors dans le tableau de la session ('errors', $_SESSION) en utilisant Bootstrapp en mettant : au lieu de {...}-->
<?php if (array_key_exists)('errors', $_SESSION): ?><!--Puis on se créee une div pour afficher les messages d'erreurs, en l'occurence avec danger de bootstrap pour être en rouge ### si la clef dans la session ### -->

        <div class="alert alert-danger"><!--On crée la div pour cela  et On utilise IMPLODE pour la chaîne de caractère -->

<!--on peut remplacer le <br /> par des <li>-->
<?= implode('<br />',$_SESSION['errors']);//une fois qu'on affiche ses erreurs , il va falloir les supprimer, si l'utilisateur reviens sur le formulaire -> il voit ici son erreur et en actualisant la page, l'erreur reste affichée =>donc=>

<?php unset($-_SESSION[]); endif; ?><!--Pour défaire less erreurs , ainsi , elles ne s'afficheront qu'une fois et affiche en une fois toutes les erreurs trouvées-->
            
        </div><!--vérifier l'emplacement de la div!!!!!!!!!-->
<?php endif; ?>    
    
        <!--##############################################################################################-->
        <!--###########################  PARTIE FORMULAIRE  ##############################################-->
        <!--##############################################################################################-->
        
        <form action="contact.php" method="post">
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="inputname">Votre nom</label>
                        <input type="text" name="name" class="form-control" id="inputname">
                     </div>    
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="inputemail">Votre email</label>
                        <input type="text" name="email" class="form-control" id="inputemail">
                     </div>    
                </div class="col-xs-12">
                    <div class="form-group">
                        <label for="inputmessage">Votre message</label>
                        <textarea id="inputmessage" name="message" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                <div>
                </div>  

            </div>

        </form>
     </div>
<!--#####################################################################################################################-->
<!--###################################### NOUVELLE PARTIE ##############################################################-->
<!--#####################################################################################################################-->        

     <h2>Debug :</h2>
     <?= var_dump($_SESSION); ?><!--On voit les champs saissis par l'utilisteur qui sont stockés dans la session grâce au session_star FAIT EN DEBUT DE FICHIER-->

<!--#####################################################################################################################-->
<!--#########################################  FIN MAIN  ################################################################-->
<!--#####################################################################################################################-->
</main>
</body>
</html>

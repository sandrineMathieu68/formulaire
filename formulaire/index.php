<?php
    include '_inc.php';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"/>
    <style>
        body {
            padding-top: 50px;
        }
        .starter-template {
            padding-top: 40px;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Contact</a>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
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

     


</div>

</body>
</html>

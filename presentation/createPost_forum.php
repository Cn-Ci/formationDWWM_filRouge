<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>MOBILI'T - Acceuil</title>
        <meta charset="utf-8">
        <!-- BOOTSTRAP -->
        <link 
            rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
            crossorigin="anonymous">
        <!-- CSS -->
        <link 
            rel="stylesheet" 
            type="text/css" 
            href="../addTopic.css">
        <!-- TYPO -->
        <link 
            href="//db.onlinewebfonts.com/c/7a8bc7c29b5bcadb9510cca51210ac46?family=Sitka+Banner" 
            rel="stylesheet"
            type="text/css"/>
        <link 
            href="https://fonts.cdnfonts.com/css/caviar-dreams" 
            rel="stylesheet">
        <link 
            href="https://fonts.googleapis.com/css?family=Cinzel" 
            rel="stylesheet">
        <link 
            href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" 
            rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid">
            <?php include '../navbar.php';?>

            <div class="row">
                <div class="col-lg-2" id="buttonBack">
                    <a href="createPost_forum.php">
                        <button type="submit" class="btn btn-success color-228B22 text-center pl-5 pr-5" id="boutonsubmit">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg> Retour
                        </button>
                    </a>
                </div>
                <div class="col"></div>
            </div>
   
            <div class="row">
                <div class="col-12">
                    <div id="blockTopic">
                        <form>                                                
                            <input type="text" name="title" id="inputTitle" placeholder="Titre...">

                            <textarea name="content" id="inputContent" cols="30" rows="15" placeholder="Mon avis..."></textarea>

                            <input id="validate" name="createTopic" class="btn btn-success color-228B22 text-center pl-5 pr-5" type="submit" value="Valider">
                        </form>                        
                    </div>

                </div>
            </div>
        </div>

        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
            crossorigin="anonymous">
        </script>
        <script
            src         ="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity   ="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin ="anonymous">
        </script>
        <script 
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
            crossorigin="anonymous">
        </script>

    </body>
</html>
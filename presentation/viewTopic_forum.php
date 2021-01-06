<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>MOBILI'T - Acceuil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            href="../viewPost.css">
        <!-- TYPO -->
        <link 
            href="https://fonts.cdnfonts.com/css/caviar-dreams" 
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
                <div class="col-1"></div>

                <div class="col">
                    
                </div>

                <div class="col-1"></div>
            </div>

        </div>
    </body>
</html>
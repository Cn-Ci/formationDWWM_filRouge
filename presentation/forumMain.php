<?php 
    require_once('../navbar.php');
    require_once('SearchBarForum.php');

    function showTableContent($Topics) :Void {
        foreach ($Topics as $Topic) {
            echo "<tr>";
                printTd($Topic);
            echo "</tr>";
        }
    }

    function printTd(Object $Topic) :Void {  
        echo '<td>' . $Topic->getTitreTopic() . '</td>  
            <td class="text-center">' . $Topic->getIdAuthor() . '</td>
            <td class="text-center">' . $Topic->datetimeToString($Topic->getDateTopic()) . '</td>
            <td class="text-center">' . $Topic->getNbComm() . '</td>' 
        ;
    }

function RenderForumMain(Array $Topics, Exception $e = NULL) :Void {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>MOBILI'T - Forum</title>
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
                href="../forumStyle.css">
            <!-- TYPO -->
            <link 
                href="https://fonts.cdnfonts.com/css/caviar-dreams" 
                rel="stylesheet">
        </head>

        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-xl-8 m-5">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="pl-3" id='thTitle'>Titre</th>
                                    <th class="text-center">Auteur</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Commentaires</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                if($e) {
                                    echo "Erreur lors du chargement des topics";  
                                } 

                                showTableContent($Topics);

                                ?> 
                            </tbody>
                        </table>  
                    </div>
                    <div class="col"></div>
                </div>

                <div class="row">
                    <div class="col"></div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-lg-10"></div>
                            <div class="col-sm-12 col-lg-2 mt-3 text-right">
                                <button type="submit" class="btn-pagination btn btn-success color-228B22 mb-10 ombre ml-1 mr-1" id="boutonsubmit">1</button>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>

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
            <script 
                type="text/javascript" 
                src="../script.js">
            </script>
        </body>
    </html>
    <?php
}
?>
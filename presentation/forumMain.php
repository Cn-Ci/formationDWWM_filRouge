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
        echo '
            <td class="text-left">' . $Topic->getTitreTopic() . '</td>  
            <td class="text-center">' . $Topic->getIdAuthor() . '</td>
            <td class="text-center">' . $Topic->datetimeToString($Topic->getDateTopic()) . '</td>
            <td class="text-center">' . $Topic->getNbComm() . '</td>'
        ;

        //TODO $_SESSION['id'] == $Topic->getIdAuthor() || $_SESSION['profil'] == admin
        
        $a = 5;
        if($a == 5) {
            //*BOUTTON MODIFIER
            echo '<td class="text-center">
                    <a class ="btn btn-success" href="../controller/controlleurCreatePostForum.php?action=modify&idPost=' 
                        . $Topic->getIdTopic() . '"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16"><path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.117 8.117 0 0 1-3.078.132 3.658 3.658 0 0 1-.563-.135 1.382 1.382 0 0 1-.465-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.393-.197.625-.453.867-.826.094-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.2-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.175-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.247-.013-.574.05-.88.479a11.01 11.01 0 0 0-.5.777l-.104.177c-.107.181-.213.362-.32.528-.206.317-.438.61-.76.861a7.127 7.127 0 0 0 2.657-.12c.559-.139.843-.569.993-1.06a3.121 3.121 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.591 1.927-5.566 4.66-7.302 6.792-.442.543-.796 1.243-1.042 1.826a11.507 11.507 0 0 0-.276.721l.575.575zm-4.973 3.04l.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043l.002.001h-.002z"/></svg>
                    </a>
                </td>'
            ;

            //*BOUTTON SUPPRIMER
            echo '<td class="text-center">
                    <a class ="btn btn-danger" href="../controller/controleurTopic.php?action=DeleteTopic&idPost=' 
                        . $Topic->getIdTopic() . '"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg>
                    </a>
                </td>'
            ;
        }   
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
                                    <th class="text-center">Modifier</th>
                                    <th class="text-center">Supprimer</th>
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
                src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" 
                integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" 
                crossorigin="anonymous">
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
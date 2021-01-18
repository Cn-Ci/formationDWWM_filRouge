<?php 
    require_once('../presentation/formAdd_Personnel.php');
    include_once('../service/ServiceException.php');
    include_once('../service/ServicePersonnel.php');
    

    if (isset($_GET)) {
        if ($_GET['action'] == 'ajouter') {
            try{
                renderAddForm();
            } 
            catch (ServiceException $se){
                renderAddForm($se->getMessage(), $se->getCode());
            }
        
            if (isset($_POST["add"]) )
            {  
                try{
                    $nom = htmlentities($_POST['nom']);
                    $prenom =htmlentities($_POST['prenom']);
                    $emp = htmlentities($_POST['emploi']);
                    $desc = htmlentities($_POST['description']);
                    $photo = htmlentities($_POST['photo']);
                    $fb = htmlentities($_POST['facebookLink']);
                    $tw = htmlentities($_POST['twitterLink']);
                    $li = htmlentities($_POST['linkedinLink']);

        
                    ServicePersonnel::serviceAddPersonne($nom, $prenom, $emp, $desc, $photo, $fb, $tw, $li);
                } 
                catch (ServiceException $se){
                    renderAddForm($se->getMessage(), $se->getCode());
                }
            }
        }
    } 
    
    if ($_GET['action'] == 'modify') {
        renderModifyForm();
    }
    
?> 
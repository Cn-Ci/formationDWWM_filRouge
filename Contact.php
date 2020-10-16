<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!--BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <!-- TYPO -->
    <link href="//db.onlinewebfonts.com/c/7a8bc7c29b5bcadb9510cca51210ac46?family=Sitka+Banner" rel="stylesheet" type="text/css" />
    <!-- CSS -->
    <link rel="stylesheet" href="inscription-Copie.css">
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
   Nous contacter
  </button>

    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!-- Header -->
                <div class="modal-header ">
                    <h5 class="modal-title " id="exampleModalLabel">Vous souhaitez nous contacter ? </h5>
                    <button type="button" class="close pt-2" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>

                <!-- formulaire -->
                <div class="formulaire text-center">   
                    <form>
                            <!-- Liste déroulante -->
                            <div class="form-group col-8 m-4 text-left color-228b22">
                                <select class="form-control border border-sucess" >
                                    <option title="Choisissez un thème">Choisir un thème</option>
                                    <option value="1" title="Partir en voyage">Partir en voyage</option>
                                    <option value="2" title="besoin d'aide médicale">Aide médico-sociale</option>
                                    <option value="3" title="Problème sur le site">Problème sur le site</option>
                                    <option value="4" title="Autre">Autre</option>
                                </select>
                            </div>
                            <!-- Email -->
                            <div class="col-8 m-4 " id="email">
                            <input type="email" class="form-control border border-sucess" id="email" placeholder="Email" title="saisir votre email">
                            </div>
                            
                        
                        <!-- Message -->
                        <div class="form-group">
                        
                            <textarea class="form-commentaire col-10 border border-success rounded" id="formCommentaire" rows="6"  placeholder="Tapez ici votre message" title="tapez ici votre message"></textarea>
                        
                        </div>
                        
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-success color-228B22 mb-10" id="question"> Envoyer </button> </br>

                    </form>
                </div>
            </div>
        </div>
        

</body>


</html>
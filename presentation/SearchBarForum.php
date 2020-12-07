<div id="barForum" class="col-sm 12 row">

    <div class="col-sm-12 col-lg-2">
        <button id="dropBox" class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Trier par 
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Date</a>
            <a class="dropdown-item" href="#">Nombre de commentaire</a>
            <a class="dropdown-item" href="#">Nombre de vues</a>
        </div>
    </div> 

    <div class="col-sm-12 col-lg-8">     
        <form class="form-inline">
            <input id="SearchBar" class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>


    <div class="col-sm-12 col-lg-2 text-center">
        <a href="createPost_forum.php"><button type="submit" class="btn btn-success color-228B22 mb-10" id="boutonsubmit">+ Créer un post</button></a>
    </div>
</div>

<style>
    .container-fluid {
        padding:0px 0px 0px 0px!important;
    }
    
    #barForum{
        margin-top    : 10%;
        border-bottom : 1px solid rgba(0,0,0,0.1);
        padding       : 10px 10px 10px 10px;
        margin        : 0px 0px 0px 0px;
    }
    #dropBox{
        background-color: white;
    }
    .alink{
        color: #228b22;
    }
    .alink:hover{
        color: #175e17;
    }
    #SearchBar{
        width:90%;
    }
</style>
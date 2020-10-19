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
        <form class="form-inline my-2 my-lg-0">
            <input id="SearchBar" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/><path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/></svg>
            </button>
        </form>
    </div>


    <div class="col-sm-12 col-lg-2 text-center">
        <button type="submit" class="btn btn-success color-228B22 mb-10" id="boutonsubmit">+ Créer un post</button>
    </div>
</div>

<style>
    .container-fluid {
        padding:0px 0px 0px 0px!important;
    }
    #barForum{
        border-bottom: 1px solid rgba(0,0,0,0.1);
        padding      : 10px 10px 10px 10px;
        margin       : 0px 0px 0px 0px;
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
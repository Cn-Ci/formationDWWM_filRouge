<?php 
    session_start();
    require_once('../presentation/formAdd_Personnel.php');

    if (isset($_GET)) {
        if ($_GET['action'] == 'add') {
            renderAddForm();
        } else if ($_GET['action'] == 'modify') {
            # Code ...
        }
    }
?> 